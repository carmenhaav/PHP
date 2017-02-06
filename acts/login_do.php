<?php
/**
 * Created by PhpStorm.
 * User: carmen.haav
 * Date: 30.01.2017
 * Time: 12:49
 */
// login form processing
$username = $http->get('username');
$password = $http->get('password');

$sql = 'select * from user where '.'username='.fixDb($username).' AND '.'password='.fixDb(md5($password)).' and '.'is_active=1';$res = $db->getArray($sql);

if($res === false){
	$sess->set('login_error', tr('Viga sisselogimisel'));

	$link = $http->getLink(array('act'=>'login'), array('username'));
	$http->redirect($link);
}
else{
	$sess->createSession($res[0]);
	$http->redirect();
}
?>