<?php
require_once 'conf.php';
require_once 'classAutoLoad.php';
$layoutsinstance = new layouts();   
$formInstance   = new forms();

$layoutsinstance->heading($conf);
$layoutsinstance->welcome($conf);
$formInstance->login();
$layoutsinstance->footer($conf);
