<?php 
include_once ("template/nav.php");
include_once("template/links.php"); 

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="dropdown.css">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="style.css">
  <style>
    .carousel-item {
      height: 38rem;
      position: relative;
    }
    .overlay-image {
      position: absolute;
     bottom: 0;
      left: 0;
      right: 0;
      
     background-position: center;
     background-size: cover;
     
    }
    .container1{
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      padding-bottom: 50px;
      color: white;
    }

    
  </style>
</html>
  </head>
 








<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="overlay-image">
      <img src="images/pexels-saulo-leite-1491182-18360133.jpg" class="d-block w-100" c-img alt="...">
      </div>
      <div class="container1">
        <h2>Are you looking for a car?Look no further. Buy a car now</h2>
        <p>Experience luxury, comfort, and safety with Aldair.</p>
        <a class="btn btn-lg btn-primary" href="vehicles.php">Buy a car now</a>
      </div>  
    </div>


    <div class="carousel-item">
    <div class="overlay-image">
      <img src="images/pexels-tyler-clemmensen-3877370-8380527.jpg" class="d-block w-100" c-img alt="...">
      <div class="container1">
        <h2>Are you looking for a car?Look no further. Buy a car now</h2>
        <p>Experience luxury, comfort, and safety with Aldair.</p>
        <a class="btn btn-lg btn-primary" href="vehicles.php">Buy a car now</a>
      </div>  
    </div>
    </div>
    <div class="carousel-item">
    <div class="overlay-image">
      <img src="images/pexels-joenibraw-1006511.jpg" class="d-block w-100" c-img alt="...">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  

 
             <title>Aldair</title>
             <div class="wrapper">
              <header style="background-color: white;">
                <h1>Why Choose Us?</h1>

              </header>
              <section class="columns">
                <div class="column">
                  <h2>Wide Variety</h2>
                  <p> From sleek sedans to rugged SUVs, we’ve got it all. Whether you’re a city commuter or an off-road adventurer, our inventory
                     has something just for you. </p>

                </div>

                <div class="column" style="background: antiquewhite;">
                  <h2 style="background: antiquewhite;">Certified Pre-Owned</h2>
                  <p style="background: antiquewhite;">Worried about reliability? Our certified pre-owned cars undergo rigorous inspections and come with warranties, 
                    ensuring peace of mind for your purchase.</p>

                </div>

                <div class="column">
                  <h2>Easy Financing</h2>
                  <p>Our finance team works tirelessly to find the best loan or lease options for you. We’ll make the paperwork hassle-free
                     so you can focus on hitting the road.</p>

                </div>
               
    
              </section>
             </div>

             <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
             <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
             
             <?php
             include_once("template/footer.php")
             ?>
