<?php 
    $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],'/') +1);
    $page2 = substr($page, 0, strrpos($page,'.'));
    
    // echo $page2;

?>