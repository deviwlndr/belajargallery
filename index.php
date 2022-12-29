<!DOCTYPE html>
<html>

<head>
  <!--link font awasome-->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!--link css-->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

<style>
  *,html,body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


.wrapper{
    width: 1100px;
    margin: auto;
    position: relative;
    
}
.logo{
    font-size: 50px;
    font-weight: bold;
    float: left;
    font-family: 'Courier New', Courier, monospace;
    color: #815B5B;

}
.menu{
    float: right;

}

nav{
    width: 100%;
    margin: auto;
    display: flex;
    line-height: 100px;
    position: sticky;
    position: -webkit-sticky;
    top: 0;
    background: #E1D7C6;
}

nav ul{
    list-style-type: none;
    margin: 0px;
    padding-left: 350px;
    overflow: hidden;
}

nav ul li{
    float: left;
}

nav ul li a{
    color: #815B5B;
    font-weight: bold;
    text-align: center;
    padding: 0px 20px 0px 20px;
    text-decoration: none;
}
a:hover{
    color: #224B0C;
}

.categori {
    
    color: #815B5B;
    font-weight: bold;
    text-align: center;
    padding: 0px 20px 0px 20px;
    text-decoration: none;
}
.categori :hover{
    color: blue;
}

a.tbl-biru{
    background: #AC4425;
    border-radius: 20px;
    margin-top: 20px;
    padding: 15px 20px 15px 20px;
    color: #E1D7C6;
    cursor: pointer;
    font-weight: bold;
}

a.tbl-biru:hover{
  color: #224B0C;
}

</style>
    <!--navbar-->
    
    
    <nav>
        <div class="wrapper">
            <div class="logo"><img src="logo2.jpg" alt="Logo" width="35" height="35" class="me-2">CAPTURE</div>
            <div class="menu"></div>
            
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#make">Make</a></li>
                    
                    <li><a href="cat.php">Categori</a>
                    </li>   
                    <li><a class="tbl-biru">Login</a></li>
                </ul>
        </div>

                
    </nav>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
    
    <!--image -->
    
    
    <div class="container"> 
    <h1 class="text-center p-3 color-#ffff" style="color: #ffff;" style="z-index: inherit;">CAPTURE</h1>
    <h2 class="display-3" id="cast"></h2>
        <div class="d-flex justify-content-around">
            <p></p>
            <div class="card" style="width: 18rem;">
                <img src="2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#FLOWER</p>
            </div>
        </div>

        <div class="d-flex">
          <div class="d-flex justify-content-around">
            <div class="card" style="width: 18rem;">
                <img src="2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT </p> 
                
                </div>
            </div>
              </div>
        </div>
        <div class="d-flex">
          <div class="d-flex justify-content-around"></div>
          <div class="card" style="width: 18rem;">
                    <img src="3.jpg" class="card-img-top" alt="...">
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
              <img src="4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#FLOWER</p>
          </div>
      </div>

      <div class="d-flex">
        <div class="d-flex justify-content-around">
          <div class="card" style="width: 18rem;">
              <img src="5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#VIEW</p>
              
              </div>
          </div>
            </div>
      </div>
      <div class="d-flex">
        <div class="d-flex justify-content-around"></div>
        <div class="card" style="width: 18rem;">
                  <img src="6.jpg" class="card-img-top" alt="...">
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
              <img src="7.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT</p>
          </div>
      </div>

      <div class="d-flex">
        <div class="d-flex justify-content-around">
          <div class="card" style="width: 18rem;">
              <img src="8.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT</p>
              
              </div>
          </div>
            </div>
      </div>
      <div class="d-flex">
        <div class="d-flex justify-content-around"></div>
        <div class="card" style="width: 18rem;">
                  <img src="9.jpg" class="card-img-top" alt="...">
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
                <img src="1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#FLOWER</p>
            </div>
        </div>

        <div class="d-flex">
          <div class="d-flex justify-content-around">
            <div class="card" style="width: 18rem;">
                <img src="2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT </p> 
                
                </div>
            </div>
              </div>
        </div>
        <div class="d-flex">
          <div class="d-flex justify-content-around"></div>
          <div class="card" style="width: 18rem;">
                    <img src="3.jpg" class="card-img-top" alt="...">
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
              <img src="4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#FLOWER</p>
          </div>
      </div>

      <div class="d-flex">
        <div class="d-flex justify-content-around">
          <div class="card" style="width: 18rem;">
              <img src="5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#VIEW</p>
              
              </div>
          </div>
            </div>
      </div>
      <div class="d-flex">
        <div class="d-flex justify-content-around"></div>
        <div class="card" style="width: 18rem;">
                  <img src="6.jpg" class="card-img-top" alt="...">
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
              <img src="7.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT</p>
          </div>
      </div>

      <div class="d-flex">
        <div class="d-flex justify-content-around">
          <div class="card" style="width: 18rem;">
              <img src="8.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT</p>
              
              </div>
          </div>
            </div>
      </div>
      <div class="d-flex">
        <div class="d-flex justify-content-around"></div>
        <div class="card" style="width: 18rem;">
                  <img src="9.jpg" class="card-img-top" alt="...">
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
                <img src="1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#FLOWER</p>
            </div>
        </div>

        <div class="d-flex">
          <div class="d-flex justify-content-around">
            <div class="card" style="width: 18rem;">
                <img src="2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT </p> 
                
                </div>
            </div>
              </div>
        </div>
        <div class="d-flex">
          <div class="d-flex justify-content-around"></div>
          <div class="card" style="width: 18rem;">
                    <img src="3.jpg" class="card-img-top" alt="...">
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
              <img src="4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#FLOWER</p>
          </div>
      </div>

      <div class="d-flex">
        <div class="d-flex justify-content-around">
          <div class="card" style="width: 18rem;">
              <img src="5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#VIEW</p>
              
              </div>
          </div>
            </div>
      </div>
      <div class="d-flex">
        <div class="d-flex justify-content-around"></div>
        <div class="card" style="width: 18rem;">
                  <img src="6.jpg" class="card-img-top" alt="...">
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
              <img src="7.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT</p>
          </div>
      </div>

      <div class="d-flex">
        <div class="d-flex justify-content-around">
          <div class="card" style="width: 18rem;">
              <img src="8.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT</p>
              
              </div>
          </div>
            </div>
      </div>
      <div class="d-flex">
        <div class="d-flex justify-content-around"></div>
        <div class="card" style="width: 18rem;">
                  <img src="9.jpg" class="card-img-top" alt="...">
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
                <img src="1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#FLOWER</p>
            </div>
        </div>

        <div class="d-flex">
          <div class="d-flex justify-content-around">
            <div class="card" style="width: 18rem;">
                <img src="2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT </p> 
                
                </div>
            </div>
              </div>
        </div>
        <div class="d-flex">
          <div class="d-flex justify-content-around"></div>
          <div class="card" style="width: 18rem;">
                    <img src="3.jpg" class="card-img-top" alt="...">
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
              <img src="4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#FLOWER</p>
          </div>
      </div>

      <div class="d-flex">
        <div class="d-flex justify-content-around">
          <div class="card" style="width: 18rem;">
              <img src="5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#VIEW</p>
              
              </div>
          </div>
            </div>
      </div>
      <div class="d-flex">
        <div class="d-flex justify-content-around"></div>
        <div class="card" style="width: 18rem;">
                  <img src="6.jpg" class="card-img-top" alt="...">
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
              <img src="7.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT</p>
          </div>
      </div>

      <div class="d-flex">
        <div class="d-flex justify-content-around">
          <div class="card" style="width: 18rem;">
              <img src="8.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT</p>
              
              </div>
          </div>
            </div>
      </div>
      <div class="d-flex">
        <div class="d-flex justify-content-around"></div>
        <div class="card" style="width: 18rem;">
                  <img src="9.jpg" class="card-img-top" alt="...">
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
                <img src="1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#FLOWER</p>
            </div>
        </div>

        <div class="d-flex">
          <div class="d-flex justify-content-around">
            <div class="card" style="width: 18rem;">
                <img src="2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT </p> 
                
                </div>
            </div>
              </div>
        </div>
        <div class="d-flex">
          <div class="d-flex justify-content-around"></div>
          <div class="card" style="width: 18rem;">
                    <img src="3.jpg" class="card-img-top" alt="...">
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
              <img src="4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#FLOWER</p>
          </div>
      </div>

      <div class="d-flex">
        <div class="d-flex justify-content-around">
          <div class="card" style="width: 18rem;">
              <img src="5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#VIEW</p>
              
              </div>
          </div>
            </div>
      </div>
      <div class="d-flex">
        <div class="d-flex justify-content-around"></div>
        <div class="card" style="width: 18rem;">
                  <img src="6.jpg" class="card-img-top" alt="...">
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
              <img src="7.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT</p>
          </div>
      </div>

      <div class="d-flex">
        <div class="d-flex justify-content-around">
          <div class="card" style="width: 18rem;">
              <img src="8.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <p class="card-text" text-family="comic sans ms" style="font-size: 2em;">#CAT</p>
              
              </div>
          </div>
            </div>
      </div>
      <div class="d-flex">
        <div class="d-flex justify-content-around"></div>
        <div class="card" style="width: 18rem;">
                  <img src="9.jpg" class="card-img-top" alt="...">
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
</body>

</html>