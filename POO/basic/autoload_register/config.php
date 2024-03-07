<?php 
    function autoLoad($class) {
        if(file_exists('./'.$class.'.php')) {
            echo $class;
            include('./'.$class.'.php');
            
        }
    }

    spl_autoload_register('autoLoad');
?>