<?php

/**
 * Created by PhpStorm.
 * User: carmen.haav
 * Date: 11.01.2017
 * Time: 15:14
 */
// allows to use text class in ctext class
require_once('text.php');
class ctext extends text
{ // ctext begins

	// class variables
	var $color = false;

	// methods
	// set color
	function setColor($c) {
		$this->color = $c;
	} // setColor

	// show color text - overrided text class function
	function show()
	{
		if($this->color === false) {
			parent::show(); // use text class show function
		}
		else {
			echo '<font color="'.$this->color.'">'.$this->str.'</font><br/>';
		}
	}
} // ctext ends
?>