<?php

include 'dbconnection.php';

$value = $_POST["value"];
 
$sql = "INSERT INTO `graphic_card_type` ( `value` ) VALUES ( '$value' )";

if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>