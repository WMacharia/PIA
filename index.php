<?php
    require_once "load.php";
    $objlayouts->heading();
    $objmenus->main_menu();
    $objContents->main_content();
    $objContents->sidebar();
    $objlayouts->footer();