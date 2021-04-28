
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Charity Gate</title>
    <link rel="icon" href="../Image/logo.png">


    <!--AOS animation-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--AOS animation-->


    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Bootstrap-->


    <link rel="stylesheet" href="../css/home-1-css.css">
  
   

</head>
<body>
<header>    
<!--------------------NavBar------------------>
        <nav class="navbar" >
          <a class="hvr-bounce-to-bottom nav-item active"  href="#"  style=" background-color: rgb(150, 20, 11);
          color:black; font-weight:bold">Home</a>
          <a class="hvr-bounce-to-bottom"  href="#about" style="color:#fff !important ;">About</a>
          <a class="navbar-brand" href="#"><img src="../Image/logo.png"  class="logo"  alt=""></a>
          <a class="hvr-bounce-to-bottom"  href="#contact" style="color:#fff !important ;">Contact Us</a>
          <a class="hvr-bounce-to-bottom"  href="#portal" style="color:#fff !important ;">SignUp/LogIn</a>
          <!-- Button trigger modal -->

      </nav>
<!--------------------NavBar------------------>

<!--------------------sliders----------------->
  <div class="sliders">
    <img src="../Image/main-background.jpg" height="600px" class="d-block w-100" alt="...">   
    <div class="paragraph">
        <h3>" We grow and believe that happiness is taking, then we discover that it is in giving "</h3>
        
    </div>
</div>
<!--------------------sliders----------------->
</header>
<!--------------------Features----------------->

<div class="features">
    <div class="container">
        <div class="f-title">
        <span >
            <img src="../Image/left.png" alt="">
            <h1>Website Features</h1>
            <img src="../Image/right.png" alt="">
        </span>
    </div>
        <div class="row">
            <div class="f1 col-xs-12 col-md-4 "  data-aos="fade-right" data-aos-duration="500">
                <h3>Easy To Use</h3><br>
                <i class="far fa-laugh-wink"></i><br>
                <span>A  website  easy to learn  and  fast you use</span>
            </div>
            <div class="f2 col-xs-12 col-md-4"  data-aos="zoom-out-down" data-aos-duration="500">
                <h3>Support The Community</h3><br>
                <i class="fas fa-hands-helping"></i><br> 
                <span>This site supports a large segment of society</span>
            </div>
            <div class="f3  col-xs-12 col-md-4"  data-aos="fade-left" data-aos-duration="500">
                <h3>For Free</h3><br>
                <i class="fas fa-dollar-sign"></i><br>
                <span>This site is free, it depends only on love of charity</span>
               
            </div>
        </div>
    </div>
    <img src="../Image/hand.png" class="hand" alt="">
</div>

<!--------------------Features----------------->

<!--------------------About----------------->
<div class="about"  id="about">
    <div class="container">
        <div class="I-title">
            <span >
                <img src="../Image/left.png" alt="">
                <h1>About Us</h1>
                <img src="../Image/right.png" alt="">
            </span>
        </div>
            <div class="row">
                <div class="left-about col-md-6" data-aos="fade-up-right" data-aos-duration="500">
                    <p>
                        <span style="font-size: 50px; color:rgb(150, 20, 11)"> A</span><span style=" color:rgb(150, 20, 11)"> Charity Gate</span> Lorem Ipsum is simply dummy text ofLorem Ipsum is simply dummy text ofLorem Ipsum is simply dummy text ofLorem Ipsum is simply dummy text of
                    </p>
                </div>
                <div class="right-about  col-md-6 " data-aos="fade-up-left" data-aos-duration="500">
                <img src="../Image/1.jpg"  id="circle-image-1">
                <img src="../Image/2.jpg"  id="circle-image-2">
                <img src="../Image/3.jpg"  id="circle-image-3">

                </div>
        </div>
    </div>
    <img src="../Image/hand.png" class="hand" alt="">
</div>

<!--------------------About----------------->


<!--------------------portals----------------->
<div class="portals" >
    <div class="container">
        <div class="p-title">
            <span>
                <img src="../Image/left.png" alt="">
                <h1 id="portal">Portals</h1>
                <img src="../Image/right.png" alt="">
            </span>
        </div>
            <div class="row">

<!----------------supporter portal--------->

                <div class="left-portals " data-aos="fade-right" data-aos-duration="500">
                    <div class="support">
                            <div class="support1">
                                <p>
                                    A dedicated portal for logging in or registering donors. Through this portal, you can see cases of charitable organizations 
                                </p>
                                <form action="signup-supporter.php">
                                    <button type="submit" class="hvr-shutter-in-horizontal" formaction="login-supporter.php"> Log-In <i class="fas fa-arrow-circle-right  arrow"></i></button>
                                    <button type="submit" class="hvr-shutter-in-horizontal" > SignUp <i class="fas fa-plus  plus"></i></button>
                                 </form>
                            </div>
                            <div class="support2">
                                     <h1>Donors</h1>
                            </div>
                    </div>
                </div>
 <!----------------supporter portal--------->


               
 <!----------------admin portal--------->

                <div class="center-portals " data-aos="zoom-out-down" data-aos-duration="500">
                    <div class="support">
                        <div class="support1">
                            <p>
                                Dedicated portal for admin login only
                            </p>
                                <button type="button" class="admin-login hvr-shutter-in-horizontal" style="margin-top: 100px;"  data-aos="zoom-out-down" data-aos-duration="500" data-toggle="modal" data-target="#exampleModal">
                                        Log-In
                                     <i class="fas fa-arrow-circle-right  arrow"></i>
                                </button>
                        </div>
                        <div class="support2">
                                <h1>Admin</h1>
                        </div>
                    </div>
                </div>
                <!----------------popup-admin--------->
                <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content circle-popup">
                            <form action="admin-login.php" method="POST">
                                <h3 style="margin-top: 40px; font-family: myfont; font-weight: bold; margin-bottom: 40px;">Admin Login</h3>
                                <input type="email" class="username" name="admin-email" placeholder="User Name" oninput="style=' letter-spacing:1px;'">
                                <input type="password" class="pass" name="admin-password" placeholder="Password" oninput="style=' letter-spacing:1px;'" >
                                <input type="submit" value="Go !" class="log" name="save">
                            </form>
                      </div>
                    </div>
                  </div> 
                <!----------------popup-admin--------->

 <!----------------admin portal--------->



 <!----------------charity portal--------->

                <div class="right-portals " data-aos="fade-left" data-aos-duration="500">
                        <div class="support">
                            <div class="support1">
                                <p>
                                    A portal dedicated to logging in or registering for charities, through this portal you can add cases, view cases and communicate with donors .
                                </p>
                                <form action="../HTML/signup-charity.php">
                                <button type="submit" class="hvr-shutter-in-horizontal" formaction="login-charity.php"> Log-In <i class="fas fa-arrow-circle-right  arrow"></i></button>
                                <button type="submit" class="hvr-shutter-in-horizontal"> SignUp <i class="fas fa-plus  plus"></i></button>
                                </form>
                            </div>
                            <div class="support2">
                                    <h1>A charity</h1>
                            </div>
                        </div>
                     </div>

     <!----------------charity portal--------->

                </div>
            </div>
            <img src="../Image/hand.png" class="hand" alt="">
        </div>
    <!--------------------portals----------------->


<!--------------------talk----------------->


<div class="talk">
    <div class="container">
        <div class="t-title">
            <span>
                <img src="../Image/left.png" alt="">
                <h1 id="portal">What Users Say </h1>
                <img src="../Image/right.png" alt="">
            </span>
            <div class="image-slider " data-aos="flip-right" data-aos-duration="1500">
                <div id="carouselExampleFade" class="carousel slide " data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                            <img src="../Image/human-2.png" alt="">
                            <br>
                            <span class="name">
                                Hussam ahmad 
                            </span><br>
                            <span class="job">
                                - Restaurant Manager -
                            </span>
                            <p>
                                A safe and easy-to-use site contributes to the <br> community and facilitates access to charities
                            </p>
                      </div>
                      <div class="carousel-item">
                            <img src="../Image/human-1.png" alt="">
                            <br>
                            <span class="name">
                                leen Khalid
                            </span><br>
                            <span class="job">
                                - Charity Owner -
                            </span>
                            <p>
                                A site that facilitates the process of meeting the needs of charities
                            </p>
                      </div>
                      <div class="carousel-item">
                            <img src="../Image/human-3.png" alt="">
                            <br>
                        <span class="name">
                           Ahmad 
                        </span><br>
                        <span class="job">
                            - Donor -
                        </span>
                        <p>
                            A great site where you can make people smile
                        </p>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--------------------talk----------------->

<!--------------------Contact Us ----------------->

<div class="contact-us">
    <div class="container">
        <div class="c-title">
                <img src="../Image/left.png" alt="">
                <h1 id="contact">Contact Us </h1>
                <img src="../Image/right.png" alt="">
                <div class="info">
                    <span class="gmail">
                    <img src="../Image/gmail-icon.png" alt="">
                    charitygate@gmail.com
                    </span>
                    <br> <br> <br>
                    <span class="phone">
                        <img src="../Image/phone-icon.png" alt="">
                        +962777777777
                    </span>
                </div>
        </div>
    </div>
    
</div>

<!--------------------Contact Us ----------------->













  <!--AOS animation-->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
    <!--AOS animation-->



  <!--Font awesome-->
 <script src="https://kit.fontawesome.com/bbe243f847.js" crossorigin="anonymous"></script>
  <!--Font awesome-->
    

    <!--Bootstrap-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--Bootstrap-->
</body>
</html>