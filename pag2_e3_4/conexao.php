<?php

    $user = "root";
    $pass = "";
    $server = "localhost";
    $db = "db_xo_bagunca";

    $mysqli = new mysqli($server, $user, $pass, $db);
    $mysqli->set_charset('utf8');

    if ($mysqli->connect_error) {
      die('Connection Error');
    }
?>
