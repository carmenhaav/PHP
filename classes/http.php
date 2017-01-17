<?php
/**
 * Created by PhpStorm.
 * User: carmen.haav
 * Date: 17.01.2017
 * Time: 12:48
 */
class http
{// http begin
	// class variables
	var $_SERVER = array(); // server data
	var $vars = array(); // http data
	var $cookie = array(); // cookie data
	//class methods

	// construct
	// object creation and initializing by init() and initConst() methods
	function __construct() {
		$this->init();
		$this->initConst();
	} // __construct


	// initialize class variables
	/**
	 *
	 */
	function init() {
		$this->server = $_SERVER; // server real data
		$this->cookie = $_COOKIE; // cookie real data
		$this->vars = array_merge($_GET, $_POST, $_FILES); // http real data
	} // init
	// initalize class constants
	function initConst() {
		$vars = array('REMOTE_ADDR', 'PHP_SELF', 'SCRIPT_NAME', 'HTTP_HOST');
		foreach ($vars as $var) {
			if(!defined($var) and isset($this->server[$var])) {
				define($var, $this->server[$var]);
			}
		}
	} // initConst
}// http end

?>