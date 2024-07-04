<?php 
require_once("include/connect.php");
include_once ("template/links.php");
include_once ("template/nav.php");


if(isset($_GET["DelId"])){
    $DelId = mysqli_real_escape_string($conn, $_GET["DelId"]);

    $delete_message = "DELETE FROM registration WHERE messageId='$DelId' LIMIT 1";

    if ($conn->query($delete_message) === TRUE) {
        header("Location: viewdata.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
 ?>
        <div class="banner">
            <h1>View Messages</h1>
        </div>
        <div class="row">
            <div class="content">
    <h1>Clients</h1>

<table>
    <thead>
        <tr>
            <th>Fullname</th>
            <th>Email</th>
            <th>Message</th>
            <th>Time</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
<?php

$select_messages = "SELECT * FROM registration ORDER BY datecreated DESC";
$sel_mes_res = $conn->query($select_messages);

if ($sel_mes_res->num_rows > 0) {
  // output data of each row
  while($sel_mes_row = $sel_mes_res->fetch_assoc()) {
?>
    <tr>
        <td><?php print $sel_mes_row["full_name"]; ?></td>
        <td><?php print $sel_mes_row["sender_email"]; ?></td>
        <td><?php print $sel_mes_row["subject_line"] . " " . substr($sel_mes_row["message"], 0, 15) . "..."; ?></td>
        <td><?php print date("d-M-Y H:i", strtotime($sel_mes_row["datecreated"])); ?></td>
        <td>[ <a href="edit_mes.php?messageId=<?php print $sel_mes_row["messageId"]; ?>">Edit</a> ] [ <a href="?DelId=<?php print $sel_mes_row["messageId"]; ?>" onclick="return confirm('Are you sure you want to delete this message from the database permanently?');">Del</a> ]</td>
    </tr>
    <?php
  }
} else {
    echo "0 results";
}
?>
</tbody>    
    <thead>
        <tr>
            <th>Fullname</th>
            <th>Email</th>
            <th>Message</th>
            <th>Time</th>
            <th>Actions</th>
        </tr>
    </thead>
</table>

</div>

</div>
<?php include_once("templates/footer.php"); ?>