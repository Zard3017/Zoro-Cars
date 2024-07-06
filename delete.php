<?php
include_once("include/connect.php");
include_once ("template/links.php");
include_once ("template/nav.php");

if(isset($_GET["deleteid"])){
    $DelId = mysqli_real_escape_string($conn, $_GET["deleteid"]);

    $delete_message = "DELETE FROM registration WHERE id='$deleteid' LIMIT 1";

    if ($conn->query($delete_message) === TRUE) {
        header("Location: displaydata.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}