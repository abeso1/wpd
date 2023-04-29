<?php
include "dbconnection.php";

$naziv = $_POST["name"];

$ram = $_POST["ram"];

$kapacitet = $_POST["capacity"];

$baterija = $_POST["batery_life"];

$display = $_POST["display"];

$rezolucija = $_POST["resolution"];

$graficka = $_POST["graphic_card_type"];

$id = $_POST["id"];

$sql = "UPDATE `laptop` SET `ram_capacity`='$ram', `storage_capacity`='$kapacitet', `batery_life`='$baterija', `display`='$display', `resolution`='$rezolucija', `graphic_card_type_id`='$graficka', `name`='$naziv' WHERE `laptop_id`=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>