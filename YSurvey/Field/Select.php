<?php
/**
 * YSurvey
 *
 * @package    YSurvey_Field
 * @copyright  Copyright (c) 2012 Yuriy Perevoznikov. (http://yperevoznikov.com)
 * @license    http://projects.yperevoznikov.com/license/    New BSD License
 */

/**
 * @see YSurvey_Field_Base
 */
require_once('Base.php');

/**
 * Select field class
 *
 * @package    YSurvey_Field
 * @copyright  Copyright (c) 2012 Yuriy Perevoznikov. (http://yperevoznikov.com)
 * @license    http://projects.yperevoznikov.com/license/    New BSD License
 */
class YSurvey_Field_Select extends YSurvey_Field_Base {
	
	protected $opts = array(
		'label' => 'Label',
		'name' => 'Input',
		'options' => array(
			'yes' => 'Yes',
			'no' => 'No',
		),
		'value' => 'yes',
	);

    /**
     * Returns html code for select html element.
     *
     * @param string $name
     * @return mixed
     */
	public function getHtml()
	{
		$html = '';

		if ('' != $this->getOpt('label')) {
			$html .= '<label for="' . $this->htmlId . '">' . $this->getOpt('label') . '</label>';
		}

		$html .= '<select ';
		$html .= 'id="' . $this->htmlId . '" ';
		$html .= '>';

		foreach ($this->getOpt('options') as $optionName => $optionValue) {
			$html .= '<option value="' . $optionName . '">';
			$html .= $optionValue;
			$html .= '</option>';
		}

		$html .= '</select>';

		return $html;
	} 

}