<?php
include ('connect.php');

$weightofpalm = $_POST['weightofpalm'];
$oer = $_POST['oer'];
$oerprice = $_POST['oerprice'];
$palmID = $_POST['palmID'];
$staffID = $_POST['staffID'];
$no = $_POST['no'];

// Perform the multiplication to calculate the total
$total = $weightofpalm * $oer * $oerprice;

$sql = "INSERT INTO voucher (weightofpalm, oer, oerprice, palmID, staffID, no, total) VALUES ('$weightofpalm', '$oer', '$oerprice', '$palmID', '$staffID', '$no', '$total')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('VOUCHER DETAILS SUCCESSFULLY INSERTED !'); </script>";
    echo "<meta http-equiv=\"refresh\" content=\"1;URL=display-voucher.php\">";
} 
else {
    echo "<script type='text/javascript'>alert('USE ANOTHER ID!'); </script>";
    echo "<meta http-equiv=\"refresh\" content=\"1;URL=display-voucher.php\">";
    echo "<h4>THE DATA IS REDUNDANT !!!!</h4>";
}

$conn->close();
?>