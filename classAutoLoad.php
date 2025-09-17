<?php
$directories = [
 'layouts',
 'Forms'
];
spl_autoload_register(function($className) use ($directories){
    foreach($directories as $dir){
        $filePath = $dir . '/' . $className . '.php';
        if(file_exists($filePath)){
            require_once $filePath;
            return;
        }
    }
});

