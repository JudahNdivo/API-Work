<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <h1>This is my first page</h1>
    <?php
    require "load.php"; 
    $ObjLayouts->heading();
    $ObjMenus->main_menu();
    $ObjHeadings->main_banner();
    $ObjCont->main_content();
    $ObjCont->side_bar();
    $ObjLayouts->footer();
    //print $Obj->user_age("Alex", 2004);
    ?>
</body>
</html>