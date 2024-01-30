
<?php
$pic = "covern_1550x500.jpg";
$picr = "footr.png";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Single+Day&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>paint</title>
    <style>
        .firstpart
        {
            height:500px;
            width:1530px;
            margin:auto;
            background-image: url('<?php echo $pic;?>') ;
            background-repeat: no-repeat;
            background-size:1400px 500px;

    

        }
        .firstpartfooter
        {
            height:920px;
            width:1530px;
            margin:auto;
            background-image: url('<?php echo $picr;?>') ;
            background-repeat: no-repeat;
            background-size:1400px 920px;

    

        }
        .m{
            margin-left:100px;
            margin-right:200px;
        }
        .m{
            margin-right:100px;
        }
        .h{
            font-family: 'Single Day', cursive;
            font-size: 150px;
        }
        .logindesign{
            font-family: 'Single Day', cursive;
            font-size: 25px;
        }
        .logindesign1{
            font-family: 'Single Day', cursive;
            font-size: 50px;
        }
        .logindesign2{
            font-family: 'Single Day', cursive;
        }
        .section2{
            height:920px;
            width:1530px;
            
        }
        .u{
            color:red;
        }
        .brush{
            color:blue; 
        }
        .s{
            color:white;
        }
        .l{
            color:purple;
        }
    </style>
</head>
<body >
    <section  class="firstpart container shadow-lg m mb-5 bg-body-tertiary rounded">
        <div >
        
        <nav class="navbar bg-dark border-bottom border-bodynavbar navbar-expand-lg m-0 d-flex justify-content-between ">
         
            <div>
                <h1 class="text-white logindesign">canvaspicker@gmail.com</h1>
            </div>
            <div>
                <h1 class="text-white logindesign">free delivery avabe 5000tk</h1>
            </div>
          <div>
                
          <a class="link-opacity-100" href="login.php"><span id="signup"class=" fs-2 text-white  logindesign2">login</span></a><i class=" fs-3 fa-solid fa-person bg-white"></i>
</div>

           
             </div>
        </nav>

        <ul class="nav justify-content-center logindesign1">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">color</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Brush</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="#">sale painting </a>
            </li>
            
            
                
        
          </ul>
          
        <div>
            <h1 class="text-center h mt-5">canvas picker</h1>
        </div>
    </div>
    </section>
    
        
    <!-------------------------------------------------------color------------------------------------------------------------------------------->
    <section class="section2 bg-gradient container mt-2 shadow-lg p-3 mb-5 bg-body-tertiary rounded ">
    <h1 class="logindesign1 text-center text-shadow"><span class="u">C</span>o<span class="u">l</span>o<span class="u">r</span></h1>
        <div class=" d-flex justify-content-around">
        <div class="card shadow-lg " style="width: 18rem;">
            <img src="color1.jpg" style="height:200px;"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        <div class="card shadow-lg card-hover" style="width: 18rem;">
            <img src="color2.jpg"style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="color3.jpg"style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="color4.jpg" style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div><br>
    <div class=" d-flex justify-content-around">
        <div class="card shadow-lg " style="width: 18rem;">
            <img src="color5.jpg"style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="color6.jpg" style="height:200px;"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="color7.jpg"style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

        <div class="card shadow-lg" style="width: 18rem;">
            <img src="color8.jpg" style="height:200px;"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div>
    </section>
    <!------------------------------------------------brush-------------------------------------------------------------->
    
    <section class="section2 bg-gradient container mt-2 shadow-lg p-3 mb-5 bg-body-tertiary rounded ">
        <h1 class="logindesign1 text-center text-shadow"> Brush </h1>
        <div class=" d-flex justify-content-around">
        <div class="card shadow-lg " style="width: 18rem;">
            <img src="brush1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="brush4.jpg" style="height:200px;"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="brush3.jpg"style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="brush4.jpg"style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div><br>
    <div class=" d-flex justify-content-around">
        <div class="card shadow-lg " style="width: 18rem;">
            <img src="brush5.png" style="height:200px;"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="brush4.jpg"style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="brush6.jpg"style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

        <div class="card shadow-lg" style="width: 18rem;">
            <img src="brush2.jpg"style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div>
    </section>
    <!----------------------------------------------------------------color-------------------------------------------------------------------------------->
    <!---<section class="firstpartfooter bg-gradient container mt-2 shadow-lg  bg-body-tertiary rounded ">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
    <h1 class="logindesign1 text-center text-shadow"> Co<span class="u">l</span>or </h1>
        <div class=" d-flex justify-content-around">
        <div class="card shadow-lg " style="width: 18rem;">
            <img src="color1.jpg" style="height:200px;"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        <div class="card shadow-lg card-hover" style="width: 18rem;">
            <img src="color2.jpg"style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="color3.jpg"style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="color4.jpg" style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div><br>
    <div class=" d-flex justify-content-around">
        <div class="card shadow-lg " style="width: 18rem;">
            <img src="color5.jpg"style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="color6.jpg" style="height:200px;"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="color7.jpg"style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

        <div class="card shadow-lg" style="width: 18rem;">
            <img src="color8.jpg" style="height:200px;"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div>
    </div>
    </div>
    </div>
    </section>---------------------------->
    <!----------------------------------------------------------ltr------------------------------------------------------>

    <section class="section2 bg-gradient container mt-2 shadow-lg bg-body-tertiary rounded ">
    <h1 class="logindesign1 text-center text-shadow">co<span class="u">m</span>b<span class="u">o</span>s<span class="u">e</span>t</h1>
        <div class=" d-flex justify-content-between">
            <div class="d-flex justify-content-between ">
                <div class="m mt-4">
            <img src="brush/combo brush.jpg">
    </div><br>
    <div>
        <h1 class="logindesign mt-4 ">Some quick example text to build on the card title and make up<br>Some quick example text to build on the card title and make up<br>Some quick example text to build on the card title and make up<br> the bulk of the card's content.Some quick example text to build on <br>the card title and make up the bulk of the card's content.</h1>
    
    </div>
</div>
    </div>
        <div class=" d-flex justify-content-between">
            <div class="d-flex justify-content-between ">
            <div>
        <h1 class="logindesign mt-4 ms-5">Some quick example text to build on the card title and make up<br>Some quick example text to build on the card title and make up<br>Some quick example text to build on the card title and make up<br> the bulk of the card's content.Some quick example text to build on <br>the card title and make up the bulk of the card's content.</h1>
    
    </div>
                <br>
   
    <div class="m mt-4">
            <img src="brush/combobrush2.jpg">
    </div>
</div>
    </div>
        <div class=" d-flex justify-content-between">
            <div class="d-flex justify-content-between ">
                <div class="m mt-4">
            <img src="combo brush3.jpg">
    </div><br>
    <div>
        <h1 class="logindesign mt-4 ">Some quick example text to build on the card title and make up<br>Some quick example text to build on the card title and make up<br>Some quick example text to build on the card title and make up<br> the bulk of the card's content.Some quick example text to build on <br>the card title and make up the bulk of the card's content.</h1>
    
    </div>
</div>
    </div>
    </section>
    <!----------------------------------------------------------------------------sale painting-------------------------------------------------------------->
    
    <section class="section2 bg-gradient container mt-2 shadow-lg bg-body-tertiary rounded ">
    <h1 class="logindesign1 text-center text-shadow">S<span class="u">a</span><span class="l">l</span><span class="u">e</span> p<span class="u">a</span>i<span class="u">n</span>t<span class="l">i</span>n<span class="u">g</span>s</h1>
        <div class=" d-flex justify-content-between">
            <div class="d-flex justify-content-between ">
                <div class="m mt-4">
            <img src="sale1.jpeg "style="height:200px;width:220px;">
    </div><br>
    <div>
        <h1 class="logindesign mt-4 ">Some quick example text to build on the card title and make up<br>Some quick example text to build on the card title and make up<br>Some quick example text to build on the card title and make up<br> the bulk of the card's content.Some quick example text to build on <br>the card title and make up the bulk of the card's content.</h1>
    
    </div>
</div>
    </div>
        <div class=" d-flex justify-content-between">
            <div class="d-flex justify-content-between ">
            <div>
        <h1 class="logindesign mt-4 ms-5">Some quick example text to build on the card title and make up<br>Some quick example text to build on the card title and make up<br>Some quick example text to build on the card title and make up<br> the bulk of the card's content.Some quick example text to build on <br>the card title and make up the bulk of the card's content.</h1>
    
    </div>
                <br>
   
    <div class="m mt-4">
            <img src="sale2.jpeg"style="height:200px;width:320px;">
    </div>
</div>
    </div>
        <div class=" d-flex justify-content-between">
            <div class="d-flex justify-content-between ">
                <div class="m mt-4">
            <img src="sale3.jpeg"style="height:200px;width:220px;">
    </div><br>
    <div>
        <h1 class="logindesign mt-4" >Some quick example text to build on the card title and make up<br>Some quick example text to build on the card title and make up<br>Some quick example text to build on the card title and make up<br> the bulk of the card's content.Some quick example text to build on <br>the card title and make up the bulk of the card's content.</h1>
    
    </div>
</div>
    </div>
    </section>
    <!--------------------------------------------------------------------------------------close--------------------------------------------------------->
    <footer class="firstpartfooter container mt-0 shadow-lg  mb-5 bg-body-tertiary rounded">
    
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</html>
