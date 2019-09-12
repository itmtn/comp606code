<?php

sp_audoload_register(
    function($class_name){
        include $class_name.'.php';
    }
)





?>