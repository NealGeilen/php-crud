<?php
namespace Crud;

use Crud\Exceptions\CrudException;
use PDO;
use PDOStatement;

class Database{

    protected static $connection;

    private $queryState = false;

    /**
     * @param mixed $connection
     */
    public static function setConnection(PDO $connection)
    {
        self::$connection = $connection;
    }

    /**
     * @return PDO
     */
    protected function connect() : PDO
    {
        return  self::$connection;
    }


    /**
     * @param string $statment
     * @param array $parameters
     * @return PDOStatement
     * @throws CrudException
     */
    public function query($statment = "", array $parameters = []){
        $this->queryState = false;
        $stmt = $this->connect()->prepare($statment);
        $this -> queryState = $stmt->execute($parameters);
        if (!$this ->queryState){
            $sError = (json_encode($stmt->errorInfo())) . " " . $statment;
            throw new CrudException($sError);
        }
        return $stmt;
    }

    /**
     * @param string $statment
     * @param array $parameters
     * @return array
     * @throws CrudException
     */
    public function fetchAll($statment = "", array $parameters = []){
        return $this->query($statment,$parameters)->fetchAll(PDO::FETCH_ASSOC);
    }


    /**
     * @param string $statment
     * @param array $parameters
     * @return array
     * @throws CrudException
     */
    public function fetchRow($statment = "", array $parameters = []){
        return $this->query($statment,$parameters)->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @return int
     */
    function getLastInsertId(){
        return (int)$this->connect() -> lastInsertId();
    }

    /**
     * @return bool
     */
    public function isQuerySuccessful(){
        return $this -> queryState;
    }

    /**
     * @param string $sTable
     * @param array $aData
     * @return int
     * @throws CrudException
     */
    public function createRecord($sTable = "", $aData = []){
        $sQuery = 'INSERT INTO '.$sTable.' SET ';
        $this->buildSetString($sQuery,$aData);
        return $this -> getLastInsertId();
    }

    /**
     * @param string $sTable
     * @param array $aData
     * @param string $sPrimaryKey
     * @return PDOStatement
     * @throws CrudException
     */
    public function updateRecord($sTable = "", $aData = [], $sPrimaryKey = ""){
        $sQuery = 'UPDATE '.$sTable.' SET ';
        return $this->buildSetString($sQuery,$aData,$sPrimaryKey);
    }

    /**
     * @param string $sQuery
     * @param array $aData
     * @param string $sPrimaryKey
     * @return PDOStatement
     * @throws CrudException
     */
    private function buildSetString($sQuery = "", $aData = [], $sPrimaryKey = ""){
        foreach ($aData as $sKey => $sValue){
            if ($sKey !== $sPrimaryKey){
                $sQuery .= $sKey . ' = :' . $sKey. ', ';
            }
        }
        $sQuery = trim($sQuery,", ");
        if (!empty($sPrimaryKey)){
            $sQuery .= ' WHERE ' .$sPrimaryKey . ' = :' .$sPrimaryKey;
        }
        return $this->query($sQuery,$aData);
    }



}