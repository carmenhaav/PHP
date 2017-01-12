<?php

/**
 * Created by PhpStorm.
 * User: carmen.haav
 * Date: 12.01.2017
 * Time: 12:27
 */
// if TMPL_DIR is not defined
if(!defined('TMPL_DIR')){
	// define this constant and use in class template
	define('TMPL_DIR', '../tmpl');
}
class template
{ // class begin
	// class variables
	var $file = ''; // template file name
	var $content = false; // template content - now is empty

	// class methods
	function readFile($f){
		
	}

}// class end

?>