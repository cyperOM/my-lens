<?php
require "includes/header.php"
?>
<main>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <header>
                <title>Al Busaidi</title> 
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="css/about.css">
    </header>
    </head>
  
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="about.php">Lense</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="login.php">login</a></li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

    <div class="Heading">
        <h1>Here are some pictures of some of the places I visited</h1>
        <button class="button">Send Email</button>
        <button class="button">Call me </button>
    </div>

    
    <div class="row">
        <div class="column">
          <img src="images/london.JPG" style="widows: 25%">
          <p> London, the capital of England and the United Kingdom,<br> is a 21st-century city with history stretching back to Roman times</p>
        </div>
        <div class="column">
          <img src="images/atlanticCity.jpg" style="width:25%">
          <p>Atlantic City is a resort city on New Jersey's Atlantic coast that's known for its many casinos,<br> wide beaches and iconic Boardwalk. Established in the 1800s as a health resort, today the city is dotted with glitzy high-rise hotels and nightclubs.</p>
        </div>
        <div class="column">
          <img src="images/orlando.jpg"  style="widows: 25%">
          <p>Orlando, a city in central Florida, is home to more than a dozen theme parks.<br> Chief among its claims to fame is Walt Disney World, comprised of parks like the Magic Kingdom and Epcot, as well as water parks.</p>
        </div>
        <div class="column">
            <img src="images/sanDiago.jpg"  style="width:25%">
            <p>San Diego is a city on the Pacific coast of California known for its beaches, parks and warm climate.<br> Immense Balboa Park is the site of the renowned San Diego Zoo, as well as numerous art galleries, artist studios, museums and gardens.</p>
          </div>
      </div>


</body>
</main>