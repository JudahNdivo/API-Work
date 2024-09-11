load.php
<?php

//Class Auto Load

function classAutoLoad($classname)
{
    $directories = ["contents", "layouts", "menus"];

    foreach ($directories as $dir) {
    
        $filename = dirname(_FILE_) . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR
            . $classname . ".php";
        if (file_exists($filename) and is_readable($filename)) {
            require_once $filename;
        }
    }
}

spl_autoload_register('classAutoLoad');

//Create instances of all classes

// require_once "layouts/layouts.php";
$ObjLayouts = new layouts();
// require_once "menus/menus.php";
$ObjMenus = new menus();
// require_once "contents/headings.php";
$ObjHeadings = new headings();


// $arr = ["black", "white", "green", "red"];

// foreach($arr AS $color){
//    print $color . "<br>";
// }

// print dirname(FILE);
// print "<br>";
// print "<br>";
// print $_SERVER["PHP_SELF"];
// print "<br>";
// print "<br>";
// print basename($_SERVER["PHP_SELF"]);
// print "<br>";
// print "<br>";

// if(file_exists("index.php")){
//    print "yes";
// }
// else{
//    print "no";
// }
?>