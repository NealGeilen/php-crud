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

### Add a field to the Crud

```php
use Crud\Fields\Field;

/**
* @param string HTML input type
* @param string Column name of the field
* @param string Name of the field that will be shown to the user.
 */
$Field = new Field("text", "fistname","firstname");


/**
* Add attributes to the HMTL input element
* @param string name of the attribute
* @param string value of the attribute.
* When the value is NULL only the name of the attribute will be placed in side the element. 
 */
$Field->addAttribute("required", null);


/**
* Add field to crud; 
 */
$Crud->addField($Field);
```

### Form

```php
/**
* Set the value of the rest button for the form 
* @param string value
 */
$Crud->oForm->setCancelBtn("");

/**
* Set the value of the sumbit button for the form 
* @param string value
 */
$Crud->oForm->setSaveBtn("");
```

### Table

```php
/**
* Set the name of the creat button visible to the user
* @param string value
 */
$Crud->oTable->setInsterBtn("");

/**
* Set the name of the delete button visible to the user, 
* This button wil show ad the end of every record.
* @param string value
 */
$Crud->oTable->setDeleteBtn("");

/**
* Set the name of the edit button visible to the user, 
* This button wil show ad the end of every record.
* @param string value
 */
$Crud->oTable->setEditBtn("");


/**
* Add custom CSS class names to the table
* @param string value
 */
$Crud->oTable->addCssTableClasses("");

/**
* Add custom CSS class names to the table head <thead>
* @param string value
 */
$Crud->oTable->addCssTheadClasses("");
```
