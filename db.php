<?php

$conn = mysqli_connect($GLOBALS['hostname'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['database'], $GLOBALS['port']);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}