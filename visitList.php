<?php

$vDate = $_POST['visitDate'];
$vTime = $_POST['visitTime'];
$DoID = $_POST['docid'];
$PatID = $_POST['ptntid'];
$Cost = $_POST['cost'];

include("dbcon.php");

$sql = "SELECT * FROM Visit";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";

    foreach ($row as $value) {
        echo "<td>" . htmlspecialchars($value ?? '') . "</td>";
    }

    echo "</tr>";
}
?>
