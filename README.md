# YSurvey script  
  
## What is the script?
> YServey is a easy way to make survey feature on your server. Library files organized as Zend-like classes so it's also easy include the script into framework.

## Simple example

* First of all you have to add library to code, for example like this:  
```php
require_once('YSurvey/Form.php');
```

* Then let's create form  
```php
$form = new YSurvey_Form();
```

* The form is empty and we can add elements in it:  
#### Input text field:
```php
$form->addField(new YSurvey_Field_Input(array(
	'label' => 'First name',
	'name' => 'first_name',
)))
```
#### Drop down menu (select html tag):
```php
$form->addField(new YSurvey_Field_Select(array(
	'name' => 'First name',
	'value' => 'Save',
)));
```
#### Group of radio buttons:
```php
$form->addField(new YSurvey_Field_Radiobuttons(array(
	'name' => 'First name',
	'value' => 'Save',
)));
```
#### Group of checkboxes:
```php
$form->addField(new YSurvey_Field_Checkboxes(array(
	'name' => 'First name',
	'value' => 'Save',
)));
```
#### Button to submit form:
```php
$form->addField(new YSurvey_Field_Submit(array(
	'name' => 'First name',
	'value' => 'Save',
)));
```

* Finally flush html form
```php
$form->render();
```

----

## License
[New BSD License](http://projects.yperevoznikov.com/license/new-bsd)

----

> Another source about me, the script and other my projects is in [my blog](http://yperevoznikov.com/)