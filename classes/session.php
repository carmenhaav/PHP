<?php

/**
 * Created by PhpStorm.
 * User: carmen.haav
 * Date: 26.01.2017
 * Time: 14:34
 */
class session
{// class begin
	// class variables
	var $sid = false; // session id
	var $vars = false;
	var $http = false;
	var $db = false;
	var $anonymous = true;
	var $timeout = 1800;

	// class methods
	function __construct(&$http, &$db)
	{
		$this->http = &$http;
		$this->db = &$db;
		$this->sid = $http->get('sid');
	}// construct
}// class end
?>