<?php
    require_once "load.php";
    $objlayouts->heading();
    $objmenus->main_menu();
    $Objlayouts->banner();
    $objContents->main_content();
    $objContents->sidebar();
    $objlayouts->footer();