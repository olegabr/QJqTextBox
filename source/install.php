<?php

$objPlugin = new QPlugin();
$objPlugin->strName = "QJqTextBox";
$objPlugin->strDescription = 'jQuery UI Inputtext: Plugin for Styling a Custom HTML input[type=text] Element.';
$objPlugin->strVersion = "0.1";
$objPlugin->strPlatformVersion = "2.2";
$objPlugin->strAuthorName = "Oleg Abrosimov";
$objPlugin->strAuthorEmail = "olegabr [at] yandex [dot] ru";

$components = array();

$components[] = new QPluginJsFile("jquery.ui.inputtext.js");
$components[] = new QPluginCssFile("jquery.ui.inputtext.css");

$components[] = new QPluginControlFile("includes/QJqTextBox.class.php");
$components[] = new QPluginControlFile("includes/QJqTextBoxBase.class.php");
$components[] = new QPluginControlFile("includes/QJqTextBoxGen.class.php");

$components[] = new QPluginIncludedClass("QJqTextBox", "includes/QJqTextBox.class.php");
$components[] = new QPluginIncludedClass("QJqTextBoxBase", "includes/QJqTextBoxBase.class.php");
$components[] = new QPluginIncludedClass("QJqTextBoxGen", "includes/QJqTextBoxGen.class.php");

$components[] = new QPluginExample("example/inputtext.php", "QJqTextBox: tree view/editor control based on jQuery inputtext plugin");
$components[] = new QPluginExampleFile("example/inputtext.php");
$components[] = new QPluginExampleFile("example/inputtext.tpl.php");

$objPlugin->addComponents($components);
$objPlugin->install();

?>
