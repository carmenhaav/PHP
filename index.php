<?php
// index.php
/**
 * Created by PhpStorm.
 * User: carmen.haav
 * Date: 12.01.2017
 * Time: 12:58
 */

// import configuration
require_once 'conf.php';

// create an empty template object
$tmpl = new template('main');

//add pair of template element names and real values
$tmpl->set('style', STYLE_DIR.'style.css');
$tmpl->set('header', 'minu lehe pealkiri');

// create and output menu
//  import menu file
require_once 'menu.php';
$tmpl->set('menu', $menu->parse());

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

// control http object output
/*echo '<pre>';
print_r($http);
echo '<pre>';*/

// control http constants
echo REMOTE_ADDR.'<br />';
echo PHP_SELF.'<br />';
echo SCRIPT_NAME.'<br />';
echo HTTP_HOST.'<br />';
echo '<hr />';

// create http data pairs and set up into $http->vars array
$http->set('kasutaja', 'Carmen');
$http->set('tund', 'php programmeerimisvahendid');

// control $http->vars output
/*echo '<pre>';
print_r($http->vars);
echo '<pre>';*/

// control link creation
$link = $http->getLink(array('kasutaja'=>'Carmen', 'parool'=>'qwerty'));
// echo $link.'<br />';

// control http output
/*echo '<pre>';
print_r($http);
echo '<pre>';*/

// control element value by name
// echo $http->set('act');

// control actions
// import act
require_once 'act.php';

// control database object
// create test query
$sql = 'select now;';
$res = $db->query($sql);
// control database query
echo '<pre>';
print_r($res);
echo '<pre>';
?>