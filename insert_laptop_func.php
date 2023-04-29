<?php

include 'dbconnection.php';

$naziv = $_POST["name"];

$ram = $_POST["ram"];

$kapacitet = $_POST["capacity"];

$baterija = $_POST["batery_life"];

$display = $_POST["display"];

$rezolucija = $_POST["resolution"];

$graficka = $_POST["graphic_card_type"];

 
$sql = "INSERT INTO `laptop` ( `ram_capacity`, `storage_capacity`, `batery_life`, `display`, `resolution`, `graphic_card_type_id`, `name` ) VALUES ( '$ram', '$kapacitet', '$baterija', '$display', '$rezolucija', '$graficka', '$naziv')";

if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>