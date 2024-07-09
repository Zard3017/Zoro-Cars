<?php
include_once("include/connect.php");

$id="id";
$email="email";
$password="password";

//insert data
if(isset($_POST['send'])){
    $email = mysqli_real_escape_string($conn, ($_POST["email"]));
    $password = mysqli_real_escape_string($conn, ($_POST["password"]));
    
}

$sql = "INSERT IGNORE INTO user(email,password)
VALUES('$email','$password')";

if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
   //header("location:articles.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Log in</title>
    <style>
       body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            width: 30rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
 
        label {
            margin-bottom: 20px;
        }

       
        input[type="email"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 10px;
            border: 1px solid #ccc;
            width: 70%;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
 
        button[type="submit"]:hover {
            background-color: green;
        }
        h1{
            text-align: center;
            margin-bottom: 20px;
            margin-top: auto;
            font-weight: 300;
        }
            
    </style>
</head>
<body>
    <form  method="POST" action="articles.php">
       <h4>To access the articles</h4> 
    <h1>Please Log In</h1>
       
        <label for="email">Email:</label>
        <input type="email" placeholder="Enter your email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" placeholder="Enter your password" id="password" name="password" required>

        <button type="submit" name="send" >Login</button>

        <p>Don't have an account? <a href="signup.php">Sign Up</a></p>

    </form>
</body>
</html>