<?php
/**
 * YSurvey
 *
 * @package    YSurvey_Field
 * @copyright  Copyright (c) 2012 Yuriy Perevoznikov. (http://yperevoznikov.com)
 * @license    http://projects.yperevoznikov.com/license/new-bsd     New BSD License
 */

/**
 * YSurvey_Field_Base provides a bas implementation for form's element of survey.
 *
 * @package    YSurvey
 * @copyright  Copyright (c) 2012 Yuriy Perevoznikov. (http://yperevoznikov.com)
 * @license    http://projects.yperevoznikov.com/license/new-bsd    New BSD License
 */
abstract class YSurvey_Field_Base {
	
	/**
     * Holds unique html id.
     *
     * @var string
     */
	protected $htmlId;

	/**
     * Holds field's current data.
     *
     * @var array
     */
	protected $opts;

    /**
     * Constructor.
     *
     * @param array $opts
     */
	public function __construct($opts)
	{
		$this->htmlId = 'el_' . uniqid();
		foreach ($opts as $name => $opt) {
			$this->opts[$name] = $opt;
		}
	}

    /**
     * Gets option by name.
     *
     * @param string $name
     * @return mixed
     */
	public function getOpt($name)
	{
		return $this->opts[$name];
	}

    /**
     * Returns code for element.
     *
     * @param string $name
     * @return mixed
     */
	abstract function getHtml();

    /**
     * Flush code to output.
     *
     * @param string $name
     * @return mixed
     */
	function render() {
		echo $this->getHtml();
	}

}