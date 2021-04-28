<?php
include("../includes/classes.php");
$sup=new supporter();

if (isset($_POST['save'])) {  
    $sup->supporter_name=$_POST['supporter-name'];
    $sup->supporter_email=$_POST['supporter-email'];
    $sup->supporter_password=$_POST['supporter-password'];
    $sup->supporter_phone=$_POST['supporter-phone'];
    $sup->create();
    header("location:login-supporter.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        SignUp
    </title>
    <link rel="icon" href="../Image/logo.png">

    
    <!--AOS animation-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--AOS animation-->


    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Bootstrap-->


    <link rel="stylesheet" href="../css/Signup-supporter-css.css">
</head>
<body>
     <!--------------------NavBar------------------>
       
     <div>
    <nav class="navbar justify-content-start fixed-top" >
        <a class="navbar-brand" href="#"><img src="../Image/logo.png"  class="logo"  alt=""></a>
        <a class="hvr-bounce-to-bottom nav-item active"  href="Home-1.php" style="color:#fff !important ;" >Home</a>
    </nav>
</div>

<!--------------------NavBar------------------>


<!--------------------body------------------>
<div class="bg-image "></div>

<div class="bg-text col-6 col-s-9" >
    <h1 style="margin: 20px;">Donors Sign-Up</h1>
    <h6 >*All fields below are compulsory</h6>
    <form action="" method="post">
        <div class="form-group">
        <input type="text" class="username" placeholder="Association Name" oninput="style=' letter-spacing:1px;'" name="supporter-name">
        <input type="email" class="username" name="supporter-email" placeholder="E-mail" oninput="style=' letter-spacing:1px;'">
        <input type="password" class="pass" name="supporter-password" placeholder="Password" oninput="style=' letter-spacing:1px;'">
        <input type="password" class="pass" name="" placeholder="Retype password" oninput="style=' letter-spacing:1px;'">
        <input type="text" class="username" placeholder="Phone Number" oninput="style=' letter-spacing:1px;'" name="supporter-phone">
        
        <input type="submit" value="Go !" class="log" name="save">
        <label>
           Already have An Account ? <a href="login-supporter.php" style="color: rgb(150, 20, 11);">LogIn !!</a>
        </label> 
    </div>
    </form>
<!--------------------google map---------------------->



</div>
<div class="one" >
</div>
<div class="two">
</div>
<div class="three">
</div>
<div class="four">   
</div>
<div class="five">
</div>



<!--------------------body------------------>












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