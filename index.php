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
define('ACTS_DIR', 'acts/');
require_once CLASSES_DIR.'template.php';

// create an empty template object
$tmpl = new template('main');

//add pair of template element names and real values
$tmpl->set('style', STYLE_DIR.'style.css');

$tmpl->set('header', 'minu lehe pealkiri');

// import http class
require_once CLASSES_DIR.'http.php';

// import linkobject class
require_once CLASSES_DIR.'linkobject.php';

// create and output linkobject object
$http = new linkobject();
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
?>