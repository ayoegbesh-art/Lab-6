<?php

$vDate = $_POST['visitDate'];
$vTime = $_POST['visitTime'];
$DoID = $_POST['docid'];
$PatID = $_POST['ptntid'];
$Cost = $_POST['cost'];

include("dbcon.php");

$sql = "SELECT visit_date, visit_time, patient.Firstname, patient.Surname FROM visit INNER JOIN patient ON patient.id = visit.patient_id";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
    $id=$row['visit_date'];
    $vtime=$row['visit_time'];
    $fn=$row['Firstname'];
    $sname=$row['Surname'];

    echo "<TR><TD>$id</TD><TD>$vtime</TD><TD>$fn</TD><TD>$sname</TD></TR>";
}

?>
