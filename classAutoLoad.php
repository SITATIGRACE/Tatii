<?php
$directory=[
 'layouts',
 'forms'
   
];
spl_autoload_register(function($className) use ($directory){
    foreach($directory as $dir){
        $filePath=$dir.'/'.$className.'.php';
        if(file_exists($filePath)){
            require_once $filePath;
            return;
        }
    }
});

//create various instances to testautoload
$myClassInstance=new myClass();
$formsInstance=new forms();
$layoutsinstance=new layouts();


