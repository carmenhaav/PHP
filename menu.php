<?php
/**
 * Created by PhpStorm.
 * User: carmen.haav
 * Date: 18.01.2017
 * Time: 10:33
 */

// menu.php - create page menu
// create menu template objects for menu and menu items
$menu = new template('menu.menu'); // menu directory is file menu.html menu/menu.html
$item = new template('menu.item');
//
// menu item creation - begin

//add pair of template element names and real values
$item->set('name', 'Esimene leht');
$link = $http->getLink(array('page'=>'first'));
$item->set('link', $link);

// control created item output
/*echo '<pre>';
print_r($item);
echo '<pre>';*/

// add menu item to menu
 $menu->set('items', $item->parse());

// menu item creation - end
//
//
// menu item creation - begin

//add pair of template element names and real values
$item->set('name', 'Teine leht');
$link = $http->getLink(array('page'=>'second'));
$item->set('link', $link);

// control created item output
/*echo '<pre>';
print_r($item);
echo '<pre>';*/

// add menu item to menu
$menu->add('items', $item->parse()); // add another item to menu

// menu item creation - end
// control created menu output
/*echo '<pre>';
print_r($menu);
echo '<pre>';*/

// output menu
// echo $menu->parse();

?>