<?php
/**
 * Created by PhpStorm.
 * User: carmen.haav
 * Date: 30.01.2017
 * Time: 12:38
 */
// login template file
$form = new Template('login');

// add template element names and real values
$form->set('error', $sess->('login_error'));
$sess->del('login_error');

$form->set('submit', tr('Logi sisse'));
$form->set('username_str', tr('Kasutajanimi'));
$form->set('password_str', tr('Parool'));

$form->set('username', $http->get('username', true));

$link = $http->getLink(array('act' => 'login_do'));
$form->set('action', $link);

$tmpl->set('content', $form->parse());

?>