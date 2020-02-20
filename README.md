# Crud

Automatic Crud with uses Bootstrap and PDO


##Instalation

```
composer require phpmailer/phpmailer
```
Or add
```
"phpmailer/phpmailer": "1.0"
```

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