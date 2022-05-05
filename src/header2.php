<?php 
   
   $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],'/') + 1);
   $page2 = substr($page, 0, strrpos($page,'.'));
$page = str_replace('.php', '', $page);

$lang = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'en' : 'fr';
function lang($frn, $eng) {
    echo ($GLOBALS['lang'] == 'en') ?  $eng : $frn;
}
    // echo $page2;

?>