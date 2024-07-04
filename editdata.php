<?php 
    require_once("include/connect.php");
    include_once ("templates/links.php");
    include_once ("templates/nav.php");

$messageId = $_GET["messageId"];

$spot_message = "SELECT * FROM registration WHERE messageId = '$messageId' LIMIT 1";
$spot_mes_res = $conn->query($spot_message);

$spot_mes_row = $spot_mes_res->fetch_assoc();


    
// Handle update operation
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
  
    $sql = "UPDATE information SET fullname = '$fullname', email = '$email', message = '$message' WHERE id = $id";
  
    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  
  // Retrieve data for updating
  $id = $_GET['id'];
  
  $sql = "SELECT * FROM registration WHERE id = $id";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
  } else {
    echo "0 results";
  }
  
  // Display form for updating data
  echo "
  <form method='post'>
    <label for='fullname'>Full Name:</label><input type='text' name='fullname' value='$row[fullname]' required>
    <br>
    <label for='email'>Email:</label>
    <input type='email' name='email' value='$row[email]' required>
    <br>
    <label for='message'>Message:</label>
    <textarea name='message' required>$row[message]</textarea>
    <br>
    <input type='hidden' name='id' value='$row[id]'>
    <input type='submit' name='submit' value='Update'>
  </form>
  ";
  
  $conn->close();
  ?>



</div>
<?php include_once("template/footer.php"); ?>