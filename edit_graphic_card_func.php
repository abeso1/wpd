<?php
include "dbconnection.php";

$naziv = $_POST["name"];

$id = $_POST["id"];

$sql = "UPDATE `graphic_card_type` SET `value`='$naziv' WHERE `graphic_card_type_id`=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>