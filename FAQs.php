
    <title>FAQs|Aldair</title>
    <link rel="icon" href="images/Nuestro Nuevo Logo !.jpeg">
    <link rel="stylesheet" href="CSS/style.css">
    <style>
      .collapsible {
        background-color: #777;
        color: white;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
      }
      
      .active, .collapsible:hover {
        background-color: #555;
      }
      
      .content {
        padding: 0 18px;
        display: none;
        overflow: hidden;
        background-color: #f1f1f1;
      }
      </style>
</head>
<body >
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
            </ul>

        </div>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </nav>
    </header>
    
    <button type="button" class="collapsible">Do you sell electric vehicles?</button>
<div class="content">
  <p> Our inventory will vary, but we currently don't have a selection available. 
    If this changes, we can help you find what you are looking for. Contact us today to see how we can help!</p>
</div>

<button type="button" class="collapsible">How do I know what price to expect to pay for a particular vehicle?</button>
<div class="content">
  <p>  
     Our sales team can provide you with a price quote for any vehicle you are interested in, and we also offer online resources to help you research pricing information.</p>
</div>

<button type="button" class="collapsible">Can I customize a new car to my preferences?</button>
<div class="content">
  <p> 
 Yes, many new car models offer a variety of customization options, including color, interior features, and technology upgrades.</p>
</div>

<button type="button" class="collapsible"></button>
<div class="content">
  <p> Our inventory will vary, but we currently don't have a selection available. 
    If this changes, we can help you find what you are looking for. Contact us today to see how we can help!</p>
</div>

<button type="button" class="collapsible">Do you sell electric vehicles?</button>
<div class="content">
  <p> Our inventory will vary, but we currently don't have a selection available. 
    If this changes, we can help you find what you are looking for. Contact us today to see how we can help!</p>
</div>

<button type="button" class="collapsible">Do you sell electric vehicles?</button>
<div class="content">
  <p> Our inventory will vary, but we currently don't have a selection available. 
    If this changes, we can help you find what you are looking for. Contact us today to see how we can help!</p>
</div>













<script>
  var coll = document.getElementsByClassName("collapsible");
  var i;
  
  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var content = this.nextElementSibling;
      if (content.style.display === "block") {
        content.style.display = "none";
      } else {
        content.style.display = "block";
      }
    });
  }
  </script>

