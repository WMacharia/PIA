<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is my first page</h1>
    <h1>This is my first line</h1>
    <h1>This is my second line</h1>

    <?php

    require_once "load.php";
    
    print $obj->user_age("Grace", 2004);
    print '<br>';

    //print $obj->hash_pass(123);
    
    ?>
</body>
</html>