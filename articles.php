<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design|Aldair</title>
    <link rel="icon" href="images/Nuestro Nuevo Logo !.jpeg">
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body background="images/0dfc1fdf-a3cd-4ad3-980d-e227c82d15a6.jpeg">
    <header>
        <div class="logo"><a href="#">Aldair</a>
        </div>
        <div class="menu">
            <a href="#">
                <ion-icon name="close"class="close"> </ion-icon>
            </a>

           
        </div>
       
        <div class="heading">
            <ul>
                <li><a  href="index.html" class="under">Home</a>  </li>
                <li><a   href="sustainability.html" class="under">Sustainability</a>  </li>
                <li><a   href="vehicles.html"  class="under">Vehicles</a>  </li> 
                <li><a   href="design.html" class="under">Design</a>  </li>
                <li><a    href="FAQs.html" class="under">FAQ</a></li>
                <li><a   href="contact.html" class="under">Contact Us</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Account</a>
                    <div class="dropdown-content">
                      <a href="login.html">Login</a>
                      <a href="login.html">Sign Up</a>
                    </div>
                  </li>
                
            </ul>
        </div>
        
    </header>

   
    </h3>

  
           
</body>
</html>

<?php
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
 include_once("template/footer.php")
    ?>
