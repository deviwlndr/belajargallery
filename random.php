<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random</title>
    <link rel="stylesheet" href="random.css">
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


</style>
    <!--navbar-->
    
    
    <nav>
        <div class="wrapper">
            <div class="logo"><img src="logo2.jpg" alt="Logo" width="35" height="45" class="me-2" style="padding-top: 15px;" 
            >CAPTURE</div>
            <div class="menu"></div>
            
                <ul>
                    <li><a href="cat.php">Cat</a></li>
                    <li><a href="flower.php">Flower</a></li>
                    <li><a href="random.php">Random</a></li>                    
                    
                      
                    
                </ul>
        </div>

                
    </nav>
    <div class="container">
        <div class="heading">
            <h3>Random</h3>
        </div>
        <div class="box">
            <div class="dream">
                <img src="r1.jpg">
                <img src="r4.jpg">
                <img src="r3.jpg">
                <img src="r6.jpg">
                <img src="r5.jpg">
                <img src="r2.jpg">
            
            </div>
            
            <div class="dream">
                <img src="r2.jpg">
                <img src="r5.jpg">
                <img src="r6.jpg">
                <img src="r1.jpg">
                <img src="r3.jpg">
                <img src="r4.jpg">
            
            </div>
            
            <div class="dream">
                <img src="r1.jpg">
                <img src="r2.jpg">
                <img src="r3.jpg">
                <img src="r4.jpg">
                <img src="r5.jpg">
                <img src="r6.jpg">
            
            </div>

        </div>
</div>
    

</div>
<div class="btn">
  <a href="#">More</a>
</div>
    
</body>
</html>