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
 * Radiobuttons field class
 *
 * @package    YSurvey_Field
 * @copyright  Copyright (c) 2012 Yuriy Perevoznikov. (http://yperevoznikov.com)
 * @license    http://projects.yperevoznikov.com/license/    New BSD License
 */
class YSurvey_Field_Radiobuttons extends YSurvey_Field_Base {
	
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
     * Returns html code for group of radio buttons.
     *
     * @param string $name
     * @return mixed
     */
	public function getHtml()
	{
		$html = '';

		if ('' != $this->getOpt('label')) {
			$html .= $this->getOpt('label');
		}

		foreach ($this->getOpt('options') as $optionName => $optionValue) {
			$htmlId = 'el_' . uniqid();
			$html .= '<input ';
			$html .= 'id="' . $htmlId . '" ';
			$html .= 'type="radio" ';
			$html .= 'name="' . $this->getOpt('name') . '" ';
			$html .= 'value="' . $optionName . '" ';
			$html .= '/>';
			$html .= '<label for="' . $htmlId . '">' . $optionValue . '</label>';
		}

		return $html;
	} 

}