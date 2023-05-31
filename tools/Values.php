<?php 
/* ----------------------------- Lang Function ------------------------ */
if(isset($_GET['lang'])){
    $Language = htmlspecialchars($_GET['lang']);

}else

if(isset($_COOKIE['lang'])){
    $Language = htmlspecialchars($_COOKIE['lang']);
    
}else{
    $Language ="tr";
}



switch($Language){
    case "en" :
    unset($_COOKIE['lang']); 
    setcookie("lang", "en");

    include("./tools/Language/lang_en.php");
    break;

    default :
    setcookie("lang", "tr");
    include("./tools/Language/lang_tr.php");

}
























?>