<?php
include "dbconnection.php";
$id = $_GET["id"];
echo $id;
$sql = "DELETE FROM laptop WHERE laptop_id=$id";
/*$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();*/
if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>