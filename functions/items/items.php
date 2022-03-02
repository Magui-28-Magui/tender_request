<?php

function saveItems()
{
    global $connection;

    if (isset($_POST['save_items'])) {
        $item = $_POST['item'];
        $description = $_POST['description'];
        $item_family = $_POST['item_family'];
        $sales_group = $_POST['sales_group'];
        $sales_price = $_POST['sales_price'];
        $um = $_POST['um'];

        $query = query("INSERT INTO item (item, description, item_family, sales_group, sales_price, um) VALUES ('$item', '$description', '$item_family', '$sales_group','$sales_price', '$um')");
        $result = mysqli_real_escape_string($connection, $query);
        if (!$result) {
            echo "Form not submitted";
        } else {
            $message_success = <<<DELIMETER
            <div class="mt-3 mb-3">
                <div class="alert alert-success" role="alert">New item created</div>
            </div>
            DELIMETER;
            echo $message_success;
        }
    }
}


function getItemTable()
{
    $query = query("SELECT * FROM item");
    confirm($query);

    while ($row = fetch_array($query)) {
        $table = <<<DELIMETER
            <tr>
                <th scope="row">{$row['item']}</th>
                <td>{$row['description']}</td>
                <td>{$row['item_family']}</td>
                <td>{$row['sales_group']}</td>
                <td>{$row['sales_price']}</td>
                <td>{$row['um']}</td>
                <td>
                    <a href="http://localhost/tender_request/functions/items/delete_items.php?id={$row['item_id']}" class="btn btn-outline-danger">
                        <span class="material-icons">
                            delete
                        </span>
                    </a>
                </td>
        </tr>
        DELIMETER;
        echo $table;
    };
}
