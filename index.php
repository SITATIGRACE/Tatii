<?php
require_once 'classes.php';
require_once 'forms.php';
require_once 'classAutoLoad.php';

//create an instance of a myClass
$instance=new myClass();
//create an instance of user_forms
$formInstance=new user_forms();

//call the method myMethod
$layoutsinstance->heading();
$layoutsinstance->myMethod();

//call the signup_form method
$formInstance->signup_form();
$instance->footer();
