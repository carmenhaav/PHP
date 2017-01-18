<?php

/**
 * Created by PhpStorm.
 * User: carmen.haav
 * Date: 18.01.2017
 * Time: 8:48
 */

// useful function for this class
function fixUrl($val) {
	return urldecode($val);
} // fixUrl

// only for testing
// import http class
require_once 'http.php';
// only for testing

class linkobject extends http
{ // class begin
	// class variables
	var $baseUrl = false; // base URL
	var $protocol = 'http://'; // protocol for URL - http
	var $delim = '&amp;'; // & html tag name1=value1&name2=value2
	var $eq = '='; // = for URL element pair element_name = element_value

	// class methods to help to make the url link
	// construct
	// create base URL: http//XXX.XXX.XXX.XXX/path_to_file.php
	function __construct() {
		parent::__construct();
		$this->baseUrl = $this->protocol.HTTP_HOST.SCRIPT_NAME;
	} // construct

	// create http data pairs and merge them
	function addToLink($link, $name, $val) {
		// create pair: element_name = element_value
		$link = $link.fixUrl($name).$this->eq.fixUrl($val);
		echo $link;
	}// addTo link
} // class end

?>