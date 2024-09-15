<?php

require_once('db_credentials.php');

function db_connect()
{
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    confirm_db_connect();
    return $connection;
}

function db_disconnect($connection)
{
    if (isset($connection)) {
        mysqli_close($connection);
    }
}

function confirm_db_connect()
{
    if (mysqli_connect_errno()) { //if there is an error displays a personalized error message
        $msg = "Database connection failed: ";
        $msg .= mysqli_connect_error();
        $msg .= " (" . mysqli_connect_errno() . ")"; // error number
        exit($msg);
    }
}

function confirm_result_set($result_set)
{
    if (!$result_set) {
        exit("Database query failed.");
    }
}

// Code to prove injection on edit + subject >>>  http://localhost/blueprint/blueprint/globe_bank/public/views/subjects/show.php?id=%27%20OR%20%27a%27=%27a
// Values should be delimited by single quotes to prevent SQL injection.
// It forces attackers to circumvent data delimeters.
function db_escape($connection, $string)
{
    return mysqli_real_escape_string($connection, $string);
}
