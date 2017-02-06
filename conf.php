<?php
/**
 * Created by PhpStorm.
 * User: carmen.haav
 * Date: 19.01.2017
 * Time: 12:19
 */

//  framework configuration
// create and template object and use it
define ('CLASSES_DIR', 'classes/'); // classes path
define ('TMPL_DIR', 'tmpl/'); // templates path
define ('STYLE_DIR', 'css/'); // style path
define('ACTS_DIR', 'acts/'); // acts path
define('LIB_DIR', 'lib/'); // lib path
define('ADMIN_DIR', 'admin/');// admin path

// import useful functions
require_once LIB_DIR.'utils.php';

define('DEFAULT_ACT', 'default'); // default act file name

// user roles
define('ROLE_NONE', 0);
define('ROLE_ADMIN', 1);
define('ROLE_USER', 2);

// default language
define('DEFAULT_LANG', 'et');

require_once CLASSES_DIR.'template.php'; // import template class
require_once CLASSES_DIR.'http.php'; // import http class
require_once CLASSES_DIR.'linkobject.php'; // import linkobject class
require_once CLASSES_DIR.'mysql.php'; // import database class
require_once CLASSES_DIR.'session.php'; // import session class

require_once 'db_conf.php'; // import database configuration

// create linkobject object
$http = new linkobject();

// create database object
$db = new mysql(DBHOST, DBUSER, DBPASS, DBNAME);

// create session object
$sess = new session($http, $db);

// language support
$lang_id = DEFAULT_LANG;
$http->set('lang_id', $lang_id);

// langs used in site
$siteLangs = array(
	'et' => 'estonian',
	'en' => 'english',
	'ru' => 'russian'
);

?>