<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<html>
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
    color: #59CE8F;

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
    background: #6FEDD6;
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
    color: #59CE8F;
    font-weight: bold;
    text-align: center;
    padding: 0px 20px 0px 20px;
    text-decoration: none;
}

nav ul li a :hover{
    text-decoration: underline;
}

.categori {
    
    color: #59CE8F;
    font-weight: bold;
    text-align: center;
    padding: 0px 20px 0px 20px;
    text-decoration: none;
}
.categori :hover{
    color: blue;
}

</style>
<nav>
        <div class="wrapper">
            <div class="logo"><img src="logo.jpg" alt="Logo" width="35" height="35" class="me-2">CAPTURE</div>
            <div class="menu"></div>
            
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#">Make</a></li>
                    
                    <li><a href="">Categori</a>
                    </li>   
                    <li><a href="" class="#tbl-biru">Login</a></li>
                </ul>
        </div>

                
    </nav>
</head>
</html>
</body>