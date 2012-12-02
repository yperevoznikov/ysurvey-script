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
 * Submit field class
 *
 * @package    YSurvey_Field
 * @copyright  Copyright (c) 2012 Yuriy Perevoznikov. (http://yperevoznikov.com)
 * @license    http://projects.yperevoznikov.com/license/    New BSD License
 */
class YSurvey_Field_Submit extends YSurvey_Field_Base {
	
	protected $opts = array(
		'name' => 'Input',
		'value' => 'Value',
	);

    /**
     * Returns html code for submit button.
     *
     * @param string $name
     * @return mixed
     */
	public function getHtml()
	{
		$html = '';

		$html .= '<input ';

		$html .= 'id="' . $this->htmlId . '" ';
		$html .= 'type="submit" ';
		$html .= 'value="' . $this->getOpt('value') . '" ';

		$html .= '/>';

		return $html;
	} 

}