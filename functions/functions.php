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

function scape_string($string)
{
    global $connection;

    return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result)
{
    return mysqli_fetch_array($result);
}

function redirect($location)
{

    header("Location: $location");
};

function query($sql)
{
    global $connection;

    return mysqli_query($connection, $sql);
}

function confirm($result)
{
    global $connection;

    if (!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
}
