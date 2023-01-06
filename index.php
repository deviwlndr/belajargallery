<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Galeri</title>
    <!--link font awasome-->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand" style="background-color: #E1D7C6;">
  <div class="container ">
    <a style="color: #815B5B;" class="navbar-brand" href="#">
      <img src="assets/img/logo.png" alt="Logo" width="50" height="50" class="me-2">
      Capture
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <form class="d-flex ms-auto" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-light" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg></button>
      </form> 
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a style="color: #815B5B;"class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a style="color: #815B5B;" class="nav-link" href="#">Make</a>
        </li>
        <div class="dropdown">
        <button style="color: #815B5B;" class="btn btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Category
        </button>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="cat.php">Cat</a></li>
          <li><a class="dropdown-item" href="flower.php">Flower</a></li>
          <li><a class="dropdown-item" href="random.php">Random</a></li>
        </ul>
        </div>
        </li>  
      </ul>
  </div>
  <ul class="navbar-nav ms-auto">
        <button type="nav-item" class="btn btn" style="background-color: #E69B06;">
          <a style="color: #FFFFFF;" class="nav-link active" href="#">Login</a></button>
        </li>
</nav>
    </div>
  </div>
</nav>

    <!-- IMG -->

    <div class="container"> 
    <h1 class="text-center p-3 color-#ffff" style="color: #ffff;" style="z-index: inherit;">CAPTURE</h1>
    <h2 class="display-3" id="cast"></h2>
        <div class="d-flex justify-content-around">
            <p></p>
            <div class="card" style="width: 18rem;">
                <img src="assets/img/2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#FLOWER</p>
            </div>
        </div>

        <div class="d-flex">
          <div class="d-flex justify-content-around">
            <div class="card" style="width: 18rem;">
                <img src="assets/img/2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT </p> 
                
                </div>
            </div>
              </div>
        </div>
        <div class="d-flex">
          <div class="d-flex justify-content-around"></div>
          <div class="card" style="width: 18rem;">
                    <img src="assets/img/3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#AESTHETIC</p>                    
          </div>
        </div>
        </div>
        </div>


        <div class="container"> 
      <div class="d-flex justify-content-around p-8 mt-5">
          <p></p>
          <div class="card" style="width: 18rem;">
              <img src="assets/img/4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#FLOWER</p>
          </div>
      </div>

      <div class="d-flex">
        <div class="d-flex justify-content-around">
          <div class="card" style="width: 18rem;">
              <img src="assets/img/5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#VIEW</p>
              
              </div>
          </div>
            </div>
      </div>
      <div class="d-flex">
        <div class="d-flex justify-content-around"></div>
        <div class="card" style="width: 18rem;">
                  <img src="assets/img/6.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                  <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#RANDOM</p>
                  
        </div>
        </div>
      </div>
      </div>

</div>

<div class="container"> 
      <div class="d-flex justify-content-around p-8 mt-5">
          <p></p>
          <div class="card" style="width: 18rem;">
              <img src="assets/img/7.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT</p>
          </div>
      </div>

      <div class="d-flex">
        <div class="d-flex justify-content-around">
          <div class="card" style="width: 18rem;">
              <img src="assets/img/8.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT</p>
              
              </div>
          </div>
            </div>
      </div>
      <div class="d-flex">
        <div class="d-flex justify-content-around"></div>
        <div class="card" style="width: 18rem;">
                  <img src="assets/img/9.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                  <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#RANDOM</p>
                  
        </div>
        </div>
      </div>
      </div>
      <div class="overlay">
    <div class="container"> 
    <h1 class="text-center p-3"></h1>
    <h2 class="display-3" id="cast"></h2>
        <div class="d-flex justify-content-around">
            <p></p>
            <div class="card" style="width: 18rem;">
                <img src="assets/img/1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#FLOWER</p>
            </div>
        </div>

        <div class="d-flex">
          <div class="d-flex justify-content-around">
            <div class="card" style="width: 18rem;">
                <img src="assets/img/2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT </p> 
                
                </div>
            </div>
              </div>
        </div>
        <div class="d-flex">
          <div class="d-flex justify-content-around"></div>
          <div class="card" style="width: 18rem;">
                    <img src="assets/img/3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#AESTHETIC</p>                    
          </div>
        </div>
        </div>
        </div>
        

        




<div class="container"> 
      <div class="d-flex justify-content-around p-8 mt-5">
          <p></p>
          <div class="card" style="width: 18rem;">
              <img src="assets/img/4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#FLOWER</p>
          </div>
      </div>

      <div class="d-flex">
        <div class="d-flex justify-content-around">
          <div class="card" style="width: 18rem;">
              <img src="assets/img/5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#VIEW</p>
              
              </div>
          </div>
            </div>
      </div>
      <div class="d-flex">
        <div class="d-flex justify-content-around"></div>
        <div class="card" style="width: 18rem;">
                  <img src="assets/img/6.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                  <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#RANDOM</p>
                  
        </div>
        </div>
      </div>
      </div>

</div>

<div class="container"> 
      <div class="d-flex justify-content-around p-8 mt-5">
          <p></p>
          <div class="card" style="width: 18rem;">
              <img src="assets/img/7.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT</p>
          </div>
      </div>

      <div class="d-flex">
        <div class="d-flex justify-content-around">
          <div class="card" style="width: 18rem;">
              <img src="assets/img/8.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT</p>
              
              </div>
          </div>
            </div>
      </div>
      <div class="d-flex">
        <div class="d-flex justify-content-around"></div>
        <div class="card" style="width: 18rem;">
                  <img src="assets/img/9.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                  <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#RANDOM</p>
                  
        </div>
        </div>
      </div>
      </div>

      <div class="overlay">
    <div class="container"> 
    <h1 class="text-center p-3"></h1>
    <h2 class="display-3" id="cast"></h2>
        <div class="d-flex justify-content-around">
            <p></p>
            <div class="card" style="width: 18rem;">
                <img src="assets/img/1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#FLOWER</p>
            </div>
        </div>

        <div class="d-flex">
          <div class="d-flex justify-content-around">
            <div class="card" style="width: 18rem;">
                <img src="assets/img/2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT </p> 
                
                </div>
            </div>
              </div>
        </div>
        <div class="d-flex">
          <div class="d-flex justify-content-around"></div>
          <div class="card" style="width: 18rem;">
                    <img src="assets/img/3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#AESTHETIC</p>                    
          </div>
        </div>
        </div>
        </div>
        

        




<div class="container"> 
      <div class="d-flex justify-content-around p-8 mt-5">
          <p></p>
          <div class="card" style="width: 18rem;">
              <img src="assets/img/4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#FLOWER</p>
          </div>
      </div>

      <div class="d-flex">
        <div class="d-flex justify-content-around">
          <div class="card" style="width: 18rem;">
              <img src="assets/img/5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#VIEW</p>
              
              </div>
          </div>
            </div>
      </div>
      <div class="d-flex">
        <div class="d-flex justify-content-around"></div>
        <div class="card" style="width: 18rem;">
                  <img src="assets/img/6.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                  <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#RANDOM</p>
                  
        </div>
        </div>
      </div>
      </div>

</div>

<div class="container"> 
      <div class="d-flex justify-content-around p-8 mt-5">
          <p></p>
          <div class="card" style="width: 18rem;">
              <img src="assets/img/7.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT</p>
          </div>
      </div>

      <div class="d-flex">
        <div class="d-flex justify-content-around">
          <div class="card" style="width: 18rem;">
              <img src="assets/img/8.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT</p>
              
              </div>
          </div>
            </div>
      </div>
      <div class="d-flex">
        <div class="d-flex justify-content-around"></div>
        <div class="card" style="width: 18rem;">
                  <img src="assets/img/9.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                  <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#RANDOM</p>
                  
        </div>
        </div>
      </div>
      </div>
      <div class="overlay">
    <div class="container"> 
    <h1 class="text-center p-3"></h1>
    <h2 class="display-3" id="cast"></h2>
        <div class="d-flex justify-content-around">
            <p></p>
            <div class="card" style="width: 18rem;">
                <img src="assets/img/1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#FLOWER</p>
            </div>
        </div>

        <div class="d-flex">
          <div class="d-flex justify-content-around">
            <div class="card" style="width: 18rem;">
                <img src="assets/img/2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT </p> 
                
                </div>
            </div>
              </div>
        </div>
        <div class="d-flex">
          <div class="d-flex justify-content-around"></div>
          <div class="card" style="width: 18rem;">
                    <img src="assets/img/3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#AESTHETIC</p>                    
          </div>
        </div>
        </div>
        </div>
        

        




<div class="container"> 
      <div class="d-flex justify-content-around p-8 mt-5">
          <p></p>
          <div class="card" style="width: 18rem;">
              <img src="assets/img/4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#FLOWER</p>
          </div>
      </div>

      <div class="d-flex">
        <div class="d-flex justify-content-around">
          <div class="card" style="width: 18rem;">
              <img src="assets/img/5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#VIEW</p>
              
              </div>
          </div>
            </div>
      </div>
      <div class="d-flex">
        <div class="d-flex justify-content-around"></div>
        <div class="card" style="width: 18rem;">
                  <img src="assets/img/6.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                  <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#RANDOM</p>
                  
        </div>
        </div>
      </div>
      </div>

</div>

<div class="container"> 
      <div class="d-flex justify-content-around p-8 mt-5">
          <p></p>
          <div class="card" style="width: 18rem;">
              <img src="assets/img/7.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT</p>
          </div>
      </div>

      <div class="d-flex">
        <div class="d-flex justify-content-around">
          <div class="card" style="width: 18rem;">
              <img src="assets/img/8.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT</p>
              
              </div>
          </div>
            </div>
      </div>
      <div class="d-flex">
        <div class="d-flex justify-content-around"></div>
        <div class="card" style="width: 18rem;">
                  <img src="assets/img/9.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                  <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#RANDOM</p>
                  
        </div>
        </div>
      </div>
      </div>
      <div class="overlay">
    <div class="container"> 
    <h1 class="text-center p-3"></h1>
    <h2 class="display-3" id="cast"></h2>
        <div class="d-flex justify-content-around">
            <p></p>
            <div class="card" style="width: 18rem;">
                <img src="assets/img/1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#FLOWER</p>
            </div>
        </div>

        <div class="d-flex">
          <div class="d-flex justify-content-around">
            <div class="card" style="width: 18rem;">
                <img src="assets/img/2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT </p> 
                
                </div>
            </div>
              </div>
        </div>
        <div class="d-flex">
          <div class="d-flex justify-content-around"></div>
          <div class="card" style="width: 18rem;">
                    <img src="assets/img/3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#AESTHETIC</p>                    
          </div>
        </div>
        </div>
        </div>
        

<div class="container"> 
      <div class="d-flex justify-content-around p-8 mt-5">
          <p></p>
          <div class="card" style="width: 18rem;">
              <img src="assets/img/4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#FLOWER</p>
          </div>
      </div>

      <div class="d-flex">
        <div class="d-flex justify-content-around">
          <div class="card" style="width: 18rem;">
              <img src="assets/img/5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#VIEW</p>
              
              </div>
          </div>
            </div>
      </div>
      <div class="d-flex">
        <div class="d-flex justify-content-around"></div>
        <div class="card" style="width: 18rem;">
                  <img src="assets/img/6.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                  <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#RANDOM</p>
                  
        </div>
        </div>
      </div>
      </div>

</div>

<div class="container"> 
      <div class="d-flex justify-content-around p-8 mt-5">
          <p></p>
          <div class="card" style="width: 18rem;">
              <img src="assets/img/7.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT</p>
          </div>
      </div>

      <div class="d-flex">
        <div class="d-flex justify-content-around">
          <div class="card" style="width: 18rem;">
              <img src="assets/img/8.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT</p>
              
              </div>
          </div>
            </div>
      </div>
      <div class="d-flex">
        <div class="d-flex justify-content-around"></div>
        <div class="card" style="width: 18rem;">
                  <img src="assets/img/9.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                  <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#RANDOM</p>
                  
        </div>
        </div>
      </div>
      </div>

</div>
<!--end card cast-->

<!--footer-->
<footer class="footer">
  <div class="akhir">
    <div class="row">
    
        <div class="footer-col">
          <h4>Our Team</h4>
          <ul>
            <li><a href="#">Rayfan</a></li>
            <li><a href="#">Devi</a></li>
            <li><a href="#">Ruth</a></li>
            
          </ul>
        </div>
        <div class="footer-col">
          <h4>Get Help</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">shipping</a></li>
            <li><a href="#">returns</a></li>
            <li><a href="#">order status</a></li>
            <li><a href="#">payment options</a></li>
          </ul>
        </div>
        
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
     </div>
  </footer>



<script src="script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>