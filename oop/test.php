<?php
/**
 * Created by PhpStorm.
 * User: carmen.haav
 * Date: 11.01.2017
 * Time: 14:46
 */
// require the object creating and using a class
require_once('text.php');
require_once('ctext.php');

// create an object
$sentence = new text();

// control object output
echo '<pre>';
print_r($sentence);
echo '<pre>';

// set text
$sentence->setText('Hello, text object!');

// control object output
echo '<pre>';
print_r($sentence);
echo '<pre>';

// show object output
$sentence->show();

// set text
$sentence2 = new text('Hello, text by constructor!');

// control object output
echo '<pre>';
print_r($sentence2);
echo '<pre>';

// show object output
$sentence2->show();

// set text
$sentence3 = new ctext('Hello, color text by constructor!');

// set object color
$sentence3->setColor('#FF0000');

// control object output
echo '<pre>';
print_r($sentence3);
echo '<pre>';

// show object output
$sentence3->show();
?>