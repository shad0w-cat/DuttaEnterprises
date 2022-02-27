<?php

    require 'assets/phps/db_login.php';

    $connection = new mysqli($servername, $username, $password, $database);
    if ($connection->connect_error) die($connection->connect_error);
    $query = "SELECT 1 FROM `firmLogin` WHERE (`userId` = '" . $_POST['username'] . "' AND `userPasswd` = '" . $_POST['password'] . "') ;";
    $result = $connection->query($query);
    if (!$result)
    {
        die($connection->error);
    }
    $rows = $result->num_rows;
    if ($rows)
    {
        echo 'oooooo';
    }
    else {
        echo "yeloow";
    }
    $connection->close();

?>