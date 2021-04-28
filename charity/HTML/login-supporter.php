<?php

session_start();
ob_start();

include("../includes/classes.php");
$sup=new supporter();
if (isset($_POST['login'])) {
    if (empty($_POST['supporter-email'])OR empty($_POST['supporter-password'])) {
        $e="<label style='color: rgb(150,20,11);'> *all Field Requierd </label>";
    }else{
        $t=$sup->login($_POST['supporter-email'],$_POST['supporter-password']);
  
  if ($t[0]['supporter_id']) {
    $_SESSION['supporter_id']=$t[0]['supporter_id'];
    header("location:category-supporter.php");
   
    
      }else{
    $e="<label style='color: rgb(150,20,11);'> *invalid  name or password </label>";
    
  }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LogIn</title>
    <link rel="icon" href="../Image/logo.png">

    
    <!--AOS animation-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--AOS animation-->


    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Bootstrap-->


    <link rel="stylesheet" href="../css/login-supporter-css.css">

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
    <h1>Donors Log-In</h1>
    <form action="" method="post">
        <div class="form-group">
        <input type="email" class="username" name="supporter-email" placeholder="E-mail" oninput="style=' letter-spacing:1px;'">
        
         <?php
                    if (!empty($e)) {
                            echo $e;
                        }?>
                
        <input type="password" class="pass" name="supporter-password" placeholder="Password"  oninput="style=' letter-spacing:1px;'">
        <input type="submit" value="Go !" class="log" name="login">

        <label>
            Don't Have An Account ? <a href="./signup-supporter.php" style="color: rgb(150,20,11);">Sign Up Now !!</a>
        </label> 
    </div>
    </form>
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



<!--
            <a href="http://maps.google.com/?q=31.966039014128594,35.88619504528049">click</a>

-->








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