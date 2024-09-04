<?php

require_once "fnc.php";

$Obj = new fnc();
?>

<h1> Today is Wednesday </h1>

<?php
$arr = ["black","white","green","yellow","red"];

foreach($arr as $color){
    print $color . "<br>";
}

print dirname(__FILE__);
print "<br>";
print "<br>";
print $_SERVER['PHP_SELF'];
print "<br>";
print "<br>";
print basename($_SERVER["PHP_SELF"]);
print "<br>";
print "<br>";

if(file_exists("index.php")){
    print "yes";
}
else{
    print "no";
}