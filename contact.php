<?php 
include_once ("template/nav.php");
include_once("template/links.php"); 

    
?>
  
   
  
    <link rel="icon" href="images/Nuestro Nuevo Logo !.jpeg">
    <link rel="stylesheet" href="CSS/contact.css">
    <section class="contact">
        <div class="content">
            <h2>Have a question? We'd love to hear from you!</h2>
            <p>Fill out the contact form below or reach out to us via phone or email.  We typically respond to 
                inquiries within 24 hours.</p>
        </div>

        <div class="contactcontainer">
            <div class="contactInfo">

                <div class="box">
                 <div class="icon"></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>24th Street Campana,<br> Nairobi, Kenya,<br>11230</p>
                    </div>
                </div>
                <div class="contactbox">
                  <div class="icon">
                    
                  </div>
                    <div class="text">
                    <h3>Phone</h3>
                    <p>+254718790446</p>
                
                </div>
            </div>
         
         <div class="contactbox">
            <div class="icon"></i></div>
            <div class="text">
            <h3>Email</h3>
            <p>aldairsupport@gmail.com</p>
        
        </div>
    </div>
  
 <div class="contactForm">
    <form action="connect.php" method = "post">
        <h2>Send us a message</h2>
        <div class="inputBox">
            <input type="text" name="fullname" required="required">
            <span>Full Name</span>
        </div>
        <div class="inputBox">
            <input type="text" name="email" required="required">
            <span>Email</span>
        </div>
        <div class="inputBox">
            <textarea name="message" required="required" id=""></textarea>
            <span>Type your message...</span>
        </div>
        <div class="inputBox">
            <input type="submit" name=""  value="Send">
            
        </div>

    </form>
 </div>
     </div>

    </section>


 
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name="contactus";

$fullname="fullname";
$email="email";
$message="message";
$ID="UserID";

// Create connection
$conn = new mysqli($servername, $username, $password ,$db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
    

    

    

    
