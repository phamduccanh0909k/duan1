<?php
require_once "../../global.php";
require_once "../../dao/don-hang.php";

//--------------------------------//

check_login();


if (exist_param("chart")) {
    $VIEW_NAME = "chart.php";
} else {
   $list_don_hang = list_don_hang();

    $VIEW_NAME = "list.php";
}

require "../layout.php";