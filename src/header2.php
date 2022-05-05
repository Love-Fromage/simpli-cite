<?php 
//la fonction qui sert à traduire la page + afficher du 
//contenu selon sur quelle âge on est rendu
   
   $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],'/') + 1);
   $page2 = substr($page, 0, strrpos($page,'.'));
$page = str_replace('.php', '', $page);

$lang = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'en' : 'fr';
function lang($frn, $eng) {
    echo ($GLOBALS['lang'] == 'en') ?  $eng : $frn;
}

$vehicules = false;
$home = false;
$career = false;
$customer = false;
if($page2== "vehicules"){
    $vehicules = true;
    $home = false;
$career = false;
$customer = false;
}
if($page2== "home"){
    $home = true;
    $vehicules = false;
$career = false;
$customer = false;
}
if($page2== "customer"){
    $customer = true;
    $home = false;
$career = false;
$vehicules = false;
}
if($page2== "career"){
    $career = true;
    $home = false;
$vehicules = false;
$customer = false;
}
    

?>