<?php

$vDate = $_POST['visitDate'];
$vTime = $_POST['visitTime'];
$DoID = $_POST['docid'];
$PatID = $_POST['ptntid'];
$Cost = $_POST['cost'];

include("dbcon.php");

$sql = "insert into visit(visit_date,visit_time,doctor_id,patient_id,cost) values ('$vDate','$vTime','$DoID','$PatID','$Cost')";

echo $sql;

if (mysqli_query($conn, $sql)) {
  echo "<br>New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>