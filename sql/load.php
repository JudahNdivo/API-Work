<?php

// Class Auto Load
function classAutoLoad($classname)
{
    $directories = ["contents", "layouts", "menus","forms", "processes"];

    foreach ($directories as $dir) {
        $filename = dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR
            . $classname . ".php";
        if (file_exists($filename) and is_readable($filename)) {
            require_once $filename;
        }
    }
}

spl_autoload_register('classAutoLoad');

// Create instances of all classes
$ObjLayouts = new Layouts();
$ObjMenus = new menus();
$ObjHeadings = new headings();
$ObjCont = new contents();

require "includes/constants.php";
require "includes/dbconnection.php";

$conn = new dbconnection($dbtype, $hostname, $dbport, $hostuser, $hostpass, $dbname);  

//Create process instances 

$ObjAuth = new auth();
$ObjAuth->signup($conn);
