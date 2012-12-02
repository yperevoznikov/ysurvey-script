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
 * Input field class
 *
 * @package    YSurvey_Field
 * @copyright  Copyright (c) 2012 Yuriy Perevoznikov. (http://yperevoznikov.com)
 * @license    http://projects.yperevoznikov.com/license/    New BSD License
 */
class YSurvey_Field_Input extends YSurvey_Field_Base {

	protected $opts = array(
		'label' => 'Label',
		'name' => 'Input',
		'type' => 'text',
		'value' => 'Value',
		'placeholder' => 'Placeholder',
	);

    /**
     * Returns html code for input.
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

		$html .= '<input ';

		$html .= 'id="' . $this->htmlId . '" ';
		$html .= 'type="' . $this->getOpt('type') . '" ';
		$html .= 'placeholder="' . $this->getOpt('placeholder') . '" ';
		$html .= 'value="' . $this->getOpt('value') . '" ';

		$html .= '/>';

		return $html;
	} 

}