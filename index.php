<?php 
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
  header("location: login page/login.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Bookrr</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <link href="./style.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
      <link rel="stylesheet" href="node_modules/mdbootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css">
      <link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css">
  </head>
  <body>
    <div class="main">
      <!--Navbar-->
      <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container">
              <a href="#" class="navbar-brand text-uppercase "><i class="fa fa-film" aria-hidden="true"></i>Bookrr</a>
              <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
              <div id="navbarSupportedContent" class="collapse navbar-collapse">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item active"><a href="#" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                      <li class="nav-item"><a href="#footer" class="nav-link text-uppercase font-weight-bold">About</a></li>
                      <li class="nav-item"><a href="#moviesnow" class="nav-link text-uppercase font-weight-bold">Movies</a></li>
                      <li class="nav-item"><a href="#footer" class="nav-link text-uppercase font-weight-bold">Contact</a></li>
                      <li class="nav-item"><a href="login page/logout.php" class="nav-link text-uppercase font-weight-bold">Logout</a></li>
                  </ul>
              </div>
            </div>
        </nav>
      </header>


      <!--Carousel-->
      <div class="carouselExampleCaptions"  data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./971275.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="./wp4714658.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="./729758.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>  
          <div class="carousel-item">
            <img src="./a48120df2ec1c186c259a7adaf7cb1c5.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
        </div>
        
      </div>
      
      <!--Parallax-->
      <div class="container-fluid bgBlueImg text-center" id="quick-info">
        <h1>Movies Available</h1>
      </div><br/><br/>
      
      <!--Cards-->
      <div class="content" id="moviesnow">
        <h1 class="heading">Here we go !!</h1>
        <p class="description">Hover over a movie to see its mini description.</p><a class="card" href="#!">
          <div class="front" style="background-image: url(./1134932.jpg)">
            <!--<p>Lorem ipsum dolor sit amet consectetur adipisi.</p>-->
          </div>
          <div class="back">
            <div class="font-weight-bold">
              <p>Determined to ensure Superman's ultimate sacrifice was not in vain, Bruce Wayne aligns forces with Diana Prince with plans to recruit a team of metahumans to protect the world from an approaching threat of catastrophic proportions.</p>
              <button class="button" onclick="window.location.href=''">Know more</button>
            </div>
          </div></a><a class="card" href="#!">
          <div class="front" style="background-image: url(./1079623.jpg)">
            <!--<p>Lorem ipsum dolor sit amet consectetur adipisi.</p>-->
          </div>
          <div class="back">
            <div class="font-weight-bold">
              <p>At birth the Black Widow (aka Natasha Romanova) is given to the KGB, which grooms her to become its ultimate operative. When the U.S.S.R. breaks up, the government tries to kill her as the action moves to present-day New York, where she is a freelance operative.</p>
              <button class="button">Know more</button>
            </div>
          </div></a><a class="card" href="#!">
          <div class="front" style="background-image: url(./729758.jpg)">
            <!--<p>Lorem ipsum dolor sit amet consectetur adipisi.</p>-->
          </div>
          <div class="back">
            <div class="font-weight-bold">
              <p>A secret government agency recruits some of the most dangerous incarcerated super-villains to form a defensive task force. Their first mission: save the world from the apocalypse.</p>
              <button class="button">Know more</button>
            </div>
          </div></a><a class="card" href="#!">
          <div class="front" style="background-image: url(./1021834.jpg)">
            <!--<p>Lorem ipsum dolor sit amet consectetur adipisi.</p>-->
          </div>
          <div class="back">
            <div class="font-weight-bold">
              <p>Peter Parker, the beloved superhero Spider-Man, faces four destructive elemental monsters while on holiday in Europe. Soon, he receives help from Mysterio, a fellow hero with mysterious origins.</p>
              <button class="button">Know more</button>
            </div>
          </div></a><a class="card" href="#!">
          <div class="front" style="background-image: url(./971275.jpg)">
            <!--<p>Lorem ipsum dolor sit amet consectetur adipisi.</p>-->
          </div>
          <div class="back">
            <div class="font-weight-bold">
              <p>After gaining superpowers from a spider bite, Miles Morales protects the city as Spider-Man. Soon, he meets alternate versions of himself and gets embroiled in an epic battle to save the multiverse.</p>
              <button class="button">Know more</button>
            </div>
          </div></a><a class="card" href="#!">
          <div class="front" style="background-image: url(./a48120df2ec1c186c259a7adaf7cb1c5.jpg)">
            <!--<p>Lorem ipsum dolor sit amet consectetur adipisi.</p>-->
          </div>
          <div class="back">
            <div class="font-weight-bold">
              <p>Karikaalan consistently fights to keep the people of Dharavi, a slum in Mumbai, safe from the clutches of mighty politicians and the land mafia don, Hari Dhadha.</p>
              <button class="button">Know more</button>
            </div>
          </div></a>
      </div><br/><br/>
     

      <!-- Footer -->
      <footer class="page-footer font-small unique-color-dark" id="footer">

        <div style="background-color: #6351ce;">
          <div class="container">

            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center">

              <!-- Grid column -->
              <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                <h6 class="mb-0">Get connected with us on social networks!</h6>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-6 col-lg-7 text-center text-md-right">

                <!-- Facebook -->
                <a class="fb-ic">
                  <i class="fab fa-facebook-f white-text mr-4"> </i>
                </a>
                <!-- Twitter -->
                <a class="tw-ic">
                  <i class="fab fa-twitter white-text mr-4"> </i>
                </a>
                <!-- Google +-->
                <a class="gplus-ic">
                  <i class="fab fa-google-plus-g white-text mr-4"> </i>
                </a>
                <!--Linkedin -->
                <a class="li-ic">
                  <i class="fab fa-linkedin-in white-text mr-4"> </i>
                </a>
                <!--Instagram-->
                <a class="ins-ic">
                  <i class="fab fa-instagram white-text"> </i>
                </a>

              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row-->

          </div>
        </div>

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">

          <!-- Grid row -->
          <div class="row mt-3">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

              <!-- Content -->
              <h6 class="text-uppercase font-weight-bold">Bookrr</h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>We aim to connect the world of cinemas and the public by giving them a platform to get information about the movies and also book tickets of the movie of their choice. This application will almost close the gap between the common public and the beautiful world of movies</p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

              <!-- Links -->
              <h6 class="text-uppercase font-weight-bold">The Creators</h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>
                <a href="#!">Prakhar aka BUTCHER</a>
              </p>
              <p>
                <a href="#!">Eeshan aka NANI-TF</a>
              </p>
              <p>
                <a href="#!">Ashish aka CHAPPRI</a>
              </p>

            </div>
            <!-- Grid column -->

            

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

              <!-- Links -->
              <h6 class="text-uppercase font-weight-bold">Contact</h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>
                <i class="fas fa-home mr-3"></i> Chennai, India 600 001</p>
              <p>
                <i class="fas fa-envelope mr-3"></i> BookrrOP@gmail.com</p>
              <p>
                <i class="fas fa-phone mr-3"></i> + 91 98 678 684 23</p>

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2021 Copyright:
          <a href="./index.html">Bookrr.com</a>
        </div>

      </footer>

      




    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>  
  </body>
</html>