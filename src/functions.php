<?php include("./header2.php");
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