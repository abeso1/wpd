<?php
include "dbconnection.php";
$id = $_GET["id"];

$sql = "SELECT * FROM laptop WHERE laptop_id=$id";

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
    <form action="edit_laptop_func.php" method="POST">
        <label for="name">Naziv: </label>
        <br>
        <input type="text" name="name" placeholder="Unesite naziv laptopa" value="<?php echo $row["name"] ?>">
        <br>
        <label for="ram">RAM (GB): </label>
        <br>
        <input type="text" name="ram" placeholder="Unesite RAM" value="<?php echo $row["ram_capacity"] ?>">
        <br>

        <label for="capacity">SSD Kapacitet (GB): </label>
        <br>
        <input type="text" name="capacity" placeholder="Unesite SSD kapacitet"
            value="<?php echo $row["storage_capacity"] ?>">
        <br>

        <label for="batery_life">Trajanje baterije: </label>
        <br>
        <input type="text" name="batery_life" placeholder="Unesite trajanje baterije"
            value="<?php echo $row["batery_life"] ?>">
        <br>

        <label for="display">Veličina displaya (inch): </label>
        <br>
        <input type="text" name="display" placeholder="Unesite veličina displaya" value="<?php echo $row["display"] ?>">
        <br>


        <label for="resolution">Rezolucija: </label>
        <br>
        <input type="text" name="resolution" placeholder="Unesite rezoluciju" value="<?php echo $row["resolution"] ?>">
        <br>


        <label for="graphic_card_type">Vrsta grafičke: </label>
        <br>

        <?php

        include 'dbconnection.php';
        $sql = "SELECT * FROM graphic_card_type";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            $graphic_card_type_id = $row["graphic_card_type_id"];

            echo "<select id='graphic_card_type' name='graphic_card_type'>";

            while ($row = $result->fetch_assoc()) {

                $id2 = $row["graphic_card_type_id"];

                $value = $row["value"];

                if ($id2 == $graphic_card_type_id) {
                    echo "<option value='$id2' selected> $value </option>";
                } else {
                    echo "<option value='$id2'> $value </option>";
                }



            }

            echo "</select>";

        } else {
            echo "0 results";
        }
        ?>

        <br>
        <br>

        <input type="hidden" name="id" value="<?php echo $id ?>">

        <input type="submit" value="Izmjeni">
    </form>
</body>

</html>