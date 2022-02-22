<?php
require_once("src/includes/header.php");
include_once("src/includes/topbar.php");
include_once("src/includes/sidebar.php");
//include_once("views/dashboard/dashboard.php");
$dashboard = 'dashboard';

if (!empty($page)) {

    switch ($page) {
        case "tender_request_form":
            include("src/views/tender_request/tender_request_form.php");
            break;

        case "tender_request_table":
            include("src/views/tender_request/tender_request_table.php");
            break;

        default:
            include("src/views/dashboard/dashboard.php");
            break;
    }

} else {
    include("src/views/dashboard/dashboard.php");
}


include_once("src/includes/footer.php");
?>
