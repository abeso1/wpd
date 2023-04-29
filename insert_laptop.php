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
    <h2>Popunite sva polja da bi dodali novi laptop</h2>
    <br>
    <form action="insert_laptop_func.php" method="POST">
        <label for="name">Naziv: </label>
        <br>
        <input type="text" name="name" placeholder="Unesite naziv laptopa">
        <br>
        <label for="ram">RAM (GB): </label>
        <br>
        <input type="text" name="ram" placeholder="Unesite RAM">
        <br>

        <label for="capacity">SSD Kapacitet (GB): </label>
        <br>
        <input type="text" name="capacity" placeholder="Unesite SSD kapacitet">
        <br>

        <label for="batery_life">Trajanje baterije: </label>
        <br>
        <input type="text" name="batery_life" placeholder="Unesite trajanje baterije">
        <br>

        <label for="display">Veličina displaya (inch): </label>
        <br>
        <input type="text" name="display" placeholder="Unesite veličina displaya">
        <br>


        <label for="resolution">Rezolucija: </label>
        <br>
        <input type="text" name="resolution" placeholder="Unesite rezoluciju">
        <br>

        <label for="graphic_card_type">Vrsta grafičke: </label>
        <br>
        <?php

        include 'dbconnection.php';
        $sql = "SELECT * FROM graphic_card_type";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            echo "<select id='graphic_card_type' name='graphic_card_type'>";

            while ($row = $result->fetch_assoc()) {

                $id = $row["graphic_card_type_id"];

                $value = $row["value"];


                echo "<option value='$id'> $value </option>";
            }

            echo "</select>";

        } else {
            echo "0 results";
        }
        ?>
        <br>
        <br>

        <input type="submit" value="Dodaj">
    </form>
</body>

</html>