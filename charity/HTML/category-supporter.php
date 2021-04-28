<?php
    session_start();
    ob_start();
    include("../includes/classes.php");
    $cat=new category();
    $arr=$cat->readAll();
    $user=$_SESSION['supporter_id'];
    $sup=new supporter();
    $con=$sup->readById($user);
    $contact=new contact();
    if (isset($_POST['contact'])) {
    $contact->user_id=$user;
    $contact->contact_desc=$_POST['message'];
    $contact->create();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>profile</title>
    <link rel="icon" href="../Image/logo.png">
  
 
    <!--AOS animation-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--AOS animation-->



    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Bootstrap-->


    <link rel="stylesheet" href="../css/category-css.css">



    <!--------------------My js ------------------>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--------------------My js ------------------>

    
</head>
<body>
    
<!--------------------NavBar------------------>
        <nav class="navbar" >
            <a class="navbar-brand" href="#"><img src="../Image/logo.png"  class="logo"  alt=""></a>
           
          <a class="hvr-bounce-to-bottom "  href="edit-supporter.php" style="color:#fff !important ;">Edit</a> 
          <a class="hvr-bounce-to-bottom  active"  href="category-supporter.php" style="color:#fff !important ;">category</a>
          <a class="hvr-bounce-to-bottom "  href="Home-1.php" style="color:#fff !important ;">Home</a>
          <a class="hvr-bounce-to-bottom"  href="#contact" style="color:#fff !important ;">Contact Us</a>
          <a class="hvr-bounce-to-bottom"  href="logout.php" style="color:#fff !important ;">Log Out <i class="fas fa-door-open"></i></a>
      </nav>
<!--------------------NavBar------------------>

<!--------------------body------------------>

<div class="container">
  <div class="post mb-5">
    <div class="row ">
        <div class="col-md-4"></div>
        <div class="col-md-4 m-3 c-title">
            <img src="../Image/left.png" alt="">
            <h1>category</h1>  
            <img src="../Image/right.png" alt="">    
        </div>
    </div>
    <div class="mb-3" style="border: 1px solid black !important;
    border-radius: 50px; box-shadow: 6px 6px 15px black !important;">
    <div class="row " style="">
        <?php
        foreach ($arr as $key => $v) {
            echo "<div class='card col-lg-3 ' style='width: 26rem;'>";
            echo "<img class='card-img-top mt-3' width='100%' height='250px' src='admin/img/{$v['cat_image']}' alt='Card image cap'>";
            echo "<div class='card-body'>";
            echo "<h4 class='card-title' style='color:rgb(150 20 11)'>{$v['cat_name']}</h4>";
            echo "<p class='card-text'>{$v['cat_desc']}</p>";
            echo "<a href='case-supporter.php?id={$v['cat_id']}' class='btn btn-primary'>Show Cases</a>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
    <div class="row ">
    <div class="card col-md-3" style="width: 18rem;">
        <img class="card-img-top mt-3" width="100%" src="admin/img/learning.jpg" alt="Card image cap" style="margin: 0px; padding: 0px;">
        <div class="card-body">
        <h4 class="card-title" style="color:rgb(150 20 11)">Learning</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Show Cases</a>
    </div>
    </div>
    <div class="card col-md-3" style="width: 18rem;">
        <img class="card-img-top mt-3" width="100%" src="admin/img/learning.jpg" alt="Card image cap" style="margin: 0px; padding: 0px;">
        <div class="card-body">
        <h4 class="card-title" style="color:rgb(150 20 11)">Learning</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Show Cases</a>
    </div>
    </div>
    
    <div class="card col-md-3" style="width: 18rem;">
        <img class="card-img-top" src="../image/1.jpg" alt="Card image cap">
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

<div class="row mb-5"></div>


<!--------------------body------------------>



<!--------------------Contact Us ----------------->

<div class="contact-us">
    <div class="container">
        <div class="c-title">
            <img src="../Image/left.png" alt="">
            <h1 id="contact">Contact Us </h1>
            <img src="../Image/right.png" alt="">
            <div class="message">
                <form action="" method="post">
                    <input type="text" name="user" class="contact-field" placeholder="<?php echo $con[0]['supporter_name'];?>" disabled>
                    <input type="text" name="phone" class="contact-field" placeholder="<?php echo $con[0]['supporter_phone'];?>" disabled>
                    <input type="text" name="email" class="contact-field" placeholder="<?php echo $con[0]['supporter_email'];?>" disabled>
                    <textarea name="message" id="" cols="30" rows="10" > Your Message Here</textarea>
                    <button type="submit" name="contact" class="hvr-shutter-in-horizontal">Send To Admin</button>
                </form>
            </div>
               
            <div class=" info">
                    <span class="gmail">
                    <img src="../Image/gmail-icon.png" alt="">
                    CharityGate7@gmail.com
                    </span>
                    <br> <br> <br>
                    <span class="phone">
                        <img src="../Image/phone-icon.png" alt="">
                        +692789906924
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
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--Bootstrap-->

</body>
</html>