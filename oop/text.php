<?php

/**
 * Created by PhpStorm.
 * User: carmen.haav
 * Date: 11.01.2017
 * Time: 14:22
 */
class text
{// text class begin
	// class variables = instance variables
	var $str = '';

	// constructor
	function __construct($s = ''){
		$this->setText($s);
	} // construct


	// methods
	// set text function
	function setText($s){
		$this->str = $s;
	}// setText

	// show text function
	function show(){
		echo $this->str.'<br/>';
	}// show

}// text class end
?>