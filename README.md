# Crud

Automatic Crud which uses Bootstrap and PDO


## Instalation
composer package
```sh
composer require nealg/crud
```
Or add 
```json
{
"composer require nealg/crud": "^1"
}
```
To your `composer.json` file.

## Setup

```php
<?php
use Crud\Crud;
use Crud\Fields\Field;
require_once __DIR__ . "/../vendor/autoload.php";
        
$PDO = new PDO('mysql:host=[HOST];dbname=[TABLENAME]', "USER", "PASSWORD");
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

## Documentation
[Documentation](DOCUMENTATION.md)

## License
[License](LICENSE)
