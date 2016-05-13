<?php
include('Smarty.class.php');

// create object
$smarty = new Smarty;

// load config variables and assign them
$smarty->configLoad('config.conf', 'Page1');

// display it
$smarty->display('index.tpl');

?>
