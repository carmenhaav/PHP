<?php
/**
 * Created by PhpStorm.
 * User: carmen.haav
 * Date: 17.01.2017
 * Time: 12:48
 */

// useful function
function fixHtml($val){
	return htmlentities($val);
} // fixHtml

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

	// setup data for http object
	function set($name, $val) {
		$this->vars[$name] = $val;
	}

	// get element_value according to the element_name
	function get($name, $fix = true){
		// if element with such name exists
		if (isset($this->vars[$name])){
			if ($fix){
				return fixHtml($this->vars[$name]);
			}
			return $this->vars[$name];
		}
		// if element with such name does not exist
		return false;
	} // get

	// delete http data element
	function del($name){
		if(isset($this->vars[$name])){
			unset($this->vars[$name]);
		}
	} // del

	// redirect http data
	function redirect($url = false){
		global $sess;
		$sess->flush();

		if ($url == false){
			$url = $this->getLink();
		}
		$url = str_replace('&amp;', '&', $url);
		header('Location: '.$url);
		exit;
	}// redirect
}// http end
?>