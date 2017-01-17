<?php
// index.php
/**
 * Created by PhpStorm.
 * User: carmen.haav
 * Date: 12.01.2017
 * Time: 12:58
 */
// create and template object and use it
define ('CLASSES_DIR', 'classes/');
define ('TMPL_DIR', 'tmpl/');
define ('STYLE_DIR', 'css/');
require_once CLASSES_DIR.'template.php';

// create an empty template object
$tmpl = new template('main');

//add pair of template element names and real values
$tmpl->set('style', STYLE_DIR.'style.css');

$tmpl->set('header', 'minu lehe pealkiri');
$tmpl->set('menu', 'minu menüü');
$tmpl->set('nav_bar', 'minu navigatsioon');
$tmpl->set('lang_bar', 'minu keeleriba');
$tmpl->set('content', 'minu sisu');
/*
// control the content of the template object
echo '<pre>';
print_r($tmpl);
echo '<pre>';
*/
echo $tmpl->parse();

// import http class
require_once CLASSES_DIR.'http.php';

// create and output http object
$http = new http();

// control http object output
echo '<pre>';
print_r($http);
echo '<pre>';
?>