<?php
include "dbconnection.php";
$id = $_GET["id"];
echo $id;
$sql = "DELETE FROM graphic_card_type WHERE graphic_card_type_id=$id";
if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>