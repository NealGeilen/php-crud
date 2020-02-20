# Documentation

### Crud

```php
use Crud\Fields\Field;
/**
* Add field to crud
* @param Field add a field to the crud
*/
$Crud->addField(new Field());

/**
* Set default values for records. 
* Only records with default values will show up, and new records will have these default values
*
* @param string column name
* @param mixed value of the column 
*/
$Crud->addDefaultValue("", "");

/**
* Add a GET parameter to the url. These parameters will be used when the application redirects.
* @param string key of GET parameter
* @param string|int value of GET parameter
*/
$Crud->addParam("", "");

/**
* Control if the user is allowed to delete all records.
* Default = true
* @param bool Is user allowed to delete?
*/
$Crud->setCanDelete(true);

/**
* Control if the user is allowed to edit all records.
* Default = true
* @param bool Is user allowed to delete?
*/
$Crud->setCanEdit(true);

/**
* Control if the user is allowed to edit all records.
* Default = true
* @param bool Is user allowed to delete?
*/
$Crud->setCanInsert(true);

/**
* Css element id. Will be placed at the end of every url redirect. 
* In this way the user will always see the Crud. 
* @param string
*/
$Crud->setCssId(true);
```

### Form

```php
$Crud->oForm->setCancelBtn("");
$Crud->oForm->setSaveBtn("");
```

### Table

```php
$Crud->oTable->setInsterBtn("");
$Crud->oTable->setDeleteBtn("");
$Crud->oTable->setEditBtn("");

$Crud->oTable->addCssTableClasses("");
$Crud->oTable->addCssTheadClasses("");
```
