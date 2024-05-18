<?php
include('includes/config.php');



$search = $navBar['HOME'];
if(isset($_GET['oldal'])){
    if(isset($search[$_GET['oldal']]) && 
    file_exists("pages/{$navBar[$_GET['oldal']]['file']}.pgs.php")){
        $search = $navBar[$_GET['oldal']];
    }else {
        $search = $hiba_oldal;
        header("HTTP/1.0 404 Not Found");
    }
}





include("./pages/index.php");