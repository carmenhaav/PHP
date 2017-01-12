<?php
// index.php
/**
 * Created by PhpStorm.
 * User: carmen.haav
 * Date: 12.01.2017
 * Time: 12:58
 */
// create and template object
define ('CLASSES_DIR', 'classes/');
define ('TMPL_DIR', 'tmpl/');
require_once CLASSES_DIR.'template.php';
// and use it

// create and empty template object
$tmpl = new template('main.html');

// control the content of the template object
echo '<pre>';
print_r($tmpl);
echo '<pre>';
?>