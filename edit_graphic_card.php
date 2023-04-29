<?php
include "dbconnection.php";
$id = $_GET["id"];

$sql = "SELECT * FROM graphic_card_type WHERE graphic_card_type_id=$id";

$result = $conn->query($sql);

$row = $result->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br>
    <h1>Uredite polja</h1>
    <br>
    <form action="edit_graphic_card_func.php" method="POST">
        <label for="name">Naziv: </label>
        <br>
        <input type="text" name="name" placeholder="Unesite naziv grafičke" value="<?php echo $row["value"] ?>">

        <br>
        <br>

        <input type="hidden" name="id" value="<?php echo $id ?>">

        <input type="submit" value="Izmjeni">
    </form>
</body>

</html>