<?php

include('inc/connections.php');


if ($localdb->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully to: ";
?>
