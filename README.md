# Crud

Automatic Crud which uses Bootstrap and PDO


## Instalation
composer package
```
composer require nealg/crud
```
Or add 
```
"composer require nealg/crud": "dev-master"
```
To your `composer.json` file.

## Setup

```
<?php
use Crud\Crud;
use Crud\Fields\Field;
require __DIR__ . "/../vendor/autoload.php";
        
$PDO = new PDO('mysql:host=[HOST];dbname=[TABLENAME]', [USERNAME], [PASSWORD]);
/**
* @param string Table name
* @param string Primary key of given table
* @param PDO $PDO Object
*/
$Crud = new Crud("Users", "ID", $PDO);

$Crud->addField(new Field("text", "firstname", "First name"));
$Crud->addField(new Field("text", "lastanme", "Last name"));
echo $Crud;
?>
```

## Options

### Crud class

```
/**
* Add field to crud
* @param Field add a field to the crud
*/
$Crud->addField();

/**
* Set default values for records. 
* Only records with default values will show up, and new records will have these default values
*
* @param string column name
* @param mixed value of the column 
*/
$Crud->addDefaultValue(string, mixed);

/**
* Add a GET parameter to the url. These parameters will be used when the application redirects.
* @param string key of GET parameter
* @param string|int value of GET parameter
*/
$Crud->addParam(string, string|int);

/**
* Control if the user is allowed to delete all records.
* Default = true
* @param bool Is user allowed to delete?
*/
$Crud->setCanDelete(bool);

/**
* Control if the user is allowed to edit all records.
* Default = true
* @param bool Is user allowed to delete?
*/
$Crud->setCanEdit(bool);

/**
* Control if the user is allowed to edit all records.
* Default = true
* @param bool Is user allowed to delete?
*/
$Crud->setCanInsert(bool);

/**
* Css element id. Will be placed at the end of every url redirect. 
* In this way the user will always see the Crud. 
* @param string
*/
$Crud->setCssId(string);
```

## License

MIT License

Copyright (c) 2020 Neal Geilen

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.