<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="card">
    <div class="card-body">
        <?php
        use Crud\Crud;
        use Crud\Fields\Field;

        require __DIR__ . "/../vendor/autoload.php";

        $PDO = new PDO('mysql:host=localhost;dbname=knltb', 'root', '');

        /**
         * @param string Table name
         * @param string Primary key of given table
         * @param PDO $PDO Object
         */
        $Crud = new Crud("Gebruikers", "ID", $PDO);

        $Crud->addField(new Field("text", "Voornaam", "Voornaam"));
        $Crud->addField(new Field("text", "Achternaam", "Voornaam"));
        $Crud->oForm->setCancelBtn("Annuleren");
        $Crud->oForm->setSaveBtn("Opslaan");
        echo $Crud;
        ?>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>