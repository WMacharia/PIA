<?php
//class autoload

function ClassAutoload($ClassName){
    $directories = ["forms","processes","structure","tables","global","store"];

    foreach($directories AS $dir){
        $FileName = dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $ClassName . '.php';
        if(is_readable($FileName)){
            require $FileName;
        }
    }
}
spl_autoload_register('ClassAutoload');

//require_once "structure/layouts.php";

$objlayouts = new layouts();

//require_once "structure/menus.php";

$objmenus = new menus();

//print"me";

//$path = dirname(__FILE__) . DIRECTORY_SEPARATOR . ;
//print $path;

// $arr = ["Green","Black","Red","White"];
// foreach($arr AS $color){
//     print $color . "<br>";
// }
// $file = "form.php";
// if(is_readable($file)){
//     print "yes";
// }else{
//     print "no";
// }