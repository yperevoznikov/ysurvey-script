<?php
/**
 * YSurvey
 *
 * @package    YSurvey
 * @copyright  Copyright (c) 2012 Yuriy Perevoznikov. (http://yperevoznikov.com)
 * @license    http://projects.yperevoznikov.com/license/    New BSD License
 */

/**
 * @see YSurvey_Field_Input
 */
require_once('Field/Input.php');

/**
 * @see YSurvey_Field_Submit
 */
require_once('Field/Submit.php');

/**
 * @see YSurvey_Field_Select
 */
require_once('Field/Select.php');

/**
 * @see YSurvey_Field_Radiobuttons
 */
require_once('Field/Radiobuttons.php');

/**
 * @see YSurvey_Field_Checkboxes
 */
require_once('Field/Checkboxes.php');

/**
 * YSurvey_Form is a representation of survey's form.
 *
 * @package    YSurvey
 * @copyright  Copyright (c) 2012 Yuriy Perevoznikov. (http://yperevoznikov.com)
 * @license    http://projects.yperevoznikov.com/license/    New BSD License
 */
class YSurvey_Form {

	private $opts = array();
	private $fields = array();

    /**
     * Add form element.
     *
     * @param  YSurvey_Field_Base		$field
     * @return YSurvey_Form	
     */
	public function addField(YSurvey_Field_Base $field)
	{
		$this->fields[] = $field;
		return $this;
	}

    /**
     * Get html of form.
     *
     * @param  YSurvey_Field_Base		$field
     * @return YSurvey_Form	
     */
	public function getHtml()
	{
		$html  = '<form>';

		foreach ($this->fields as $field) {
			$html .= $field->getHtml();
			$html .= '<div></div>';
		}

		$html .= '</form>';

		return $html;
	}
	
    /**
     * Flush survey form to output.
     *
     * @return YSurvey_Form	
     */
	public function render()
	{
		echo $this->getHtml();
		return $this;
	}

}