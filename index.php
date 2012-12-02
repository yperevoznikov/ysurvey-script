<?php

	require_once('YSurvey/Form.php');

	$form = new YSurvey_Form();

	$form->addField(new YSurvey_Field_Input(array(
		'label' => 'First name',
		'name' => 'first_name',
	)));

	$form->addField(new YSurvey_Field_Select(array(
		'name' => 'First name',
		'value' => 'Save',
	)));

	$form->addField(new YSurvey_Field_Radiobuttons(array(
		'name' => 'First name',
		'value' => 'Save',
	)));

	$form->addField(new YSurvey_Field_Checkboxes(array(
		'name' => 'First name',
		'value' => 'Save',
	)));

	$form->addField(new YSurvey_Field_Submit(array(
		'name' => 'First name',
		'value' => 'Save',
	)));

	$form->render();