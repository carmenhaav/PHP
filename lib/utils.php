<?php
/**
 * Created by PhpStorm.
 * User: carmen.haav
 * Date: 26.01.2017
 * Time: 14:51
 */
// useful function for sql queries
function fixDb($val){
	return '"'.addslashes($val).'"'; // slashes quotation marks
}
?>