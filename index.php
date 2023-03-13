<?php
include_once './menu.php';

$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

$menu = new Menu();
$textArray = explode("*",$text);

if ($text ==""){
    /// register menu
    $menu -> Register();
}
switch($textArray[0]){
    case 1:
        $menu ->Registration($textArray);
        break;
    case 2 :
        $menu -> CheckStatus();

        break;
}


//else if ($text =="1"){
//     //registration process
//     $menu ->Registration($textArray);
// }elseif($text ==2){
//    // check status
   
// }



?>