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
    <h2>Laptopi</h2>
    <br>
    <a href="insert_laptop.php">Dodaj novi laptop</a>
    <br>
    <br>

    <table border="1">
        <tr>
            <th>#</th>
            <th>Naziv</th>
            <th>RAM (GB)</th>
            <th>SSD Kapacitet (GB)</th>
            <th>Trajanje baterije</th>
            <th>Display (inch)</th>
            <th>Rezolucija</th>
            <th>Tip grafičke</th>
            <th>Akcija</th>
        </tr>
        <?php

        include 'dbconnection.php';
        $sql = "SELECT * FROM laptop";

        $result = $conn->query($sql);

        print_r($rows);

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

                $id = $row["laptop_id"];

                echo "<tr>";
                echo "<th>" . $row["laptop_id"] . "</th>";

                echo "<th>" . $row["name"] . "</th>";

                echo "<th>" . $row["ram_capacity"] . "</th>";

                echo "<th>" . $row["storage_capacity"] . "</th>";

                echo "<th>" . $row["batery_life"] . "</th>";

                echo "<th>" . $row["display"] . "</th>";

                echo "<th>" . $row["resolution"] . "</th>";

                $graphic_card_id = $row["graphic_card_type_id"];

                $sql2 = "SELECT * FROM graphic_card_type WHERE graphic_card_type_id=$graphic_card_id";

                $result2 = $conn->query($sql2);
        
                $rows = $result2->fetch_all();

                echo "<th>" . $rows[0][1] . "</th>";

                echo "<th><a href=\"edit_laptop.php?id=$id\">Edit</a>" . " " . "<a href=\"delete_laptop_func.php?id=$id\">Delete</a></th>";

                echo "</tr>";
            }

        }
        $numberOfRows = $result->num_rows;
        echo "Pronađeno $numberOfRows rezultata";

        ?>
    </table>
    <br>
    <h2>Tipovi grafičke</h2>

    <br>
    <a href="insert_graphic_card.php">Dodaj novi tip grafičke</a>
    <br>
    <br>

    <table border="1">
        <tr>
            <th>#</th>
            <th>Naziv</th>
            <th>Akcija</th>
        </tr>
        <?php

        include 'dbconnection.php';
        $sql = "SELECT * FROM graphic_card_type";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {



            while ($row = $result->fetch_assoc()) {

                $id = $row["graphic_card_type_id"];

                echo "<tr>";
                echo "<th>" . $row["graphic_card_type_id"] . "</th>";

                echo "<th>" . $row["value"] . "</th>";

                echo "<th><a href=\"edit_graphic_card.php?id=$id\">Edit</a>" . " " . "<a href=\"delete_graphic_card_func.php?id=$id\">Delete</a></th>";

                echo "</tr>";
            }

        } else {
            echo "0 results";
        }
        ?>
    </table>
    <br>
</body>

</html>