<?php
require_once('../../settings/config_db.php');
global $connection;

if ( !empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}
$location = 'index.php?page=tender_request_form';

if (isset($_GET['id'])) {
    echo $query = "DELETE FROM item WHERE item_id = $id";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query error");
    }else{
        $message_delete = <<<DELIMETER
        <<<DELIMETER
        <div class="mt-3 mb-3">
            <div class="alert alert-success" role="alert">Item deleted</div>
        </div>
        DELIMETER;
        echo $message_delete;
        header("Location: $location");
    }

} else {
    echo "ERROR";
}
