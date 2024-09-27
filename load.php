<?php

require "includes/constants.php";
require "includes/dbConnection.php";

//class autoload

function ClassAutoload($ClassName){
    $directories = ["forms","processes","structure","tables","global","store"];

    foreach($directories AS $dir){
        $FileName = dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $ClassName . '.php';
        if(file_exists($FileName) AND is_readable($FileName)){
            require $FileName;
        }
    }
}
spl_autoload_register('ClassAutoload');

//require_once "structure/layouts.php";

$objlayouts = new layouts();

//require_once "structure/menus.php";

$objmenus = new menus();
//$obj = new fnc();
$objContents = new contents();
$Objforms = new forms();

//require "includes/constants.php";
//require "includes/dbConnection.php";

//$conn = new dbConnection(DBTYPE , HOSTNAME, DBPORT, HOSTUSER, HOSTPASS, DBNAME);

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