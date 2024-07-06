<?php
include_once("template/nav.php");
require_once("include/connect.php");
include_once ("template/links.php");
 
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>
<body>
    <div class="container">
    <button class="btn btn-primary" ><a href="contact.php" class="text-light">Add User</a></button>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Fullname</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Created At</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

  <?php
  
  //SELECT DATA FROM MY TABLE

  
// Check if the key 'id' exists in the array before accessing it


  $sql = "SELECT * FROM registration";
  $result = $conn->query($sql);
  $id = isset($_GET['id']) ? $_GET['id'] : '';
  if($result){
    
    while($row = mysqli_fetch_assoc($result)){

        
 
  $fullname=$row['fullname'];
  $email=$row['email'];
  $phone=$row['phone'];
  $address=$row['address'];
  $created_at=$row['created_at'];
  
  echo'
   <tr>
      <th scope="row">'.$id.'</th> 
      <td>'.$fullname.'</td>
      <td>'.$email.'</td>
      <td>'.$phone.'</td>
      <td>'.$address.'</td>
      <td>'.$created_at.'</td>

      

      <td>
    <button class="btn btn-primary"><a href="update.php? updateid='.$id.'"class="text-light">Update</a></button>
   <button class="btn btn-danger"><a href="delete.php"? deleteid='.$id.'
   class="text-light"> Delete</a></button>
    </td>
    </tr>
  
  ';


    }
}



  ?>
   
  </tbody>
</table>
    </div>
</body>
</html>