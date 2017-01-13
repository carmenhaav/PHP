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
require_once CLASSES_DIR.'template.php';

// create an empty template object
$tmpl = new template('main');

//add pair of template element names and real values
$tmpl->set('menu', 'minu menüü');
$tmpl->set('nav_bar', 'minu navigatsioon');
$tmpl->set('lang_bar', 'minu keeleriba');
$tmpl->set('content', 'minu sisu');

// control the content of the template object
echo '<pre>';
print_r($tmpl);
echo '<pre>';

echo $tmpl->parse();
?>