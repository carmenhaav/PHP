<?php
/**
 * Created by PhpStorm.
 * User: carmen.haav
 * Date: 19.01.2017
 * Time: 12:19
 */
// create and template object and use it
define ('CLASSES_DIR', 'classes/'); // classes path
define ('TMPL_DIR', 'tmpl/'); // templates path
define ('STYLE_DIR', 'css/'); // style path
define('ACTS_DIR', 'acts/'); // acts path
define('DEFAULT_ACT', 'default'); // default act file name


require_once CLASSES_DIR.'template.php'; // import template class
require_once CLASSES_DIR.'http.php'; // import http class
require_once CLASSES_DIR.'linkobject.php'; // import linkobject class

// create and output linkobject object
$http = new linkobject();
?>