<?php

/**
 * Created by PhpStorm.
 * User: carmen.haav
 * Date: 19.01.2017
 * Time: 12:31
 */
class mysql
{// class begin
	// class variables
	var $conn = false; // connection to database server
	var $host = false; // database server name / ip
	var $user = false; // database server user
	var $pass = false; // database server password
	var $dbname = false; // database server user's database

	// class methods
	// construct
	function __construct($h, $u, $p, $dn)
	{
		$this->host = $h;
		$this->user = $u;
		$this->pass = $p;
		$this->dbname = $dn;
		$this->connect();
	}// construct

	// connect to database server and use database
	function connect() {
		$this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);
		if (!$this->conn){
			echo 'Probleem andmebaasi ühendamisega<br />';
			exit;
		}
	}

	// query to database
	function query($sql){
		$res = mysqli_query($this->conn, $sql);
		if ($res === FALSE){
			echo 'Viga päringus <b>'.$sql.'</b><br />';
			echo mysqli_error().'<br />';
			exit;
		}
		return $res;
	}// query
}// class end
?>