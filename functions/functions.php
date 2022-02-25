<?php
//require_once "../settings/config_db.php";

function getRequests()
{
    global $connection;

    $sql = "SELECT COUNT(*) FROM request";
    $run = mysqli_query($connection, $sql);
    $row = mysqli_fetch_array($run);

    return $row[0];
}

function getRequestsWon()
{
    global $connection;

    $sql = "SELECT COUNT(*) FROM request WHERE won_lost = 1";
    $run = mysqli_query($connection, $sql);
    $row = mysqli_fetch_array($run);

    return $row[0];
}


function getRequestsLost()
{
    global $connection;

    $sql = "SELECT COUNT(*) FROM request WHERE won_lost = 2";
    $run = mysqli_query($connection, $sql);
    $row = mysqli_fetch_array($run);

    return $row[0];
}