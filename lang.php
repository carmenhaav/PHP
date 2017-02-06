<?php
/**
 * Created by PhpStorm.
 * User: carmen.haav
 * Date: 6.02.2017
 * Time: 9:41
 */
// define separator
$sep = new Template('lang.sep');
$sep = $sep->parse();
$count = 0;
// all languages are in array
foreach ($siteLangs as $lang_id => $lang_name){
	// expand language separators
	$count++
	// if active language, use active template
	if ($lang_id == LANG_ID){
		$item = new Template('lang.active');
	}
	// else use item template
	else{
		$item = new Template('lang.item');
	}
	// add link for choosing language
	// add language array, aie array, menu element
	// non-array lang-opt
	$link = $http->getLink(array('lang_id'=>$lang_id), array('act', 'page_id'), array('lang_id'));
	$item->set('link', $link);
	$item->set('name', $lang_name);
	$tmpl->add('lang_bar', $item->parse());
}
?>