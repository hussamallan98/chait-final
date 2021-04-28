<?php
session_start();
ob_start();
include("../includes/classes.php");

$user=$_SESSION['supporter_id'];
$id=$_GET['id'];
$case=new cases();
$arr=$case->readCatID($id);
$cat=new category();
$name=$cat->readById($id);
$sup=new supporter();
$ch=new charity();
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


    <link rel="stylesheet" href="../css/case-css.css">



    <!--------------------My js ------------------>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--------------------My js ------------------>

    
</head>
<body>
    
<!--------------------NavBar------------------>
        <nav class="navbar" >
            <a class="navbar-brand" href="#"><img src="../Image/logo.png"  class="logo"  alt=""></a>
           
          <a class="hvr-bounce-to-bottom "  href="edit-supporter.php" style="color:#fff !important ;">Edit</a> 
          <a class="hvr-bounce-to-bottom  active"  href="category-supporter.php" style="color:#fff !important ;">Category</a>
          <a class="hvr-bounce-to-bottom "  href="Home-1.php" style="color:#fff !important ;">Home</a>
          <a class="hvr-bounce-to-bottom"  href="#contact" style="color:#fff !important ;">Contact Us</a>
          <a class="hvr-bounce-to-bottom"  href="logout.php"style="color:#fff !important ;">Log Out <i class="fas fa-door-open"></i></a>
      </nav>
<!--------------------NavBar------------------>

<!--------------------body------------------>
<div class="container">
  <div class="post">
     <div class="row">
        <div class="col-md-4"></div>
    
        <div class="c-title  col-md-5">
            <img src="../Image/left.png" alt="">
            <h1 class="p-3"> <?php
            echo $name[0]['cat_name'];
            ?> Cases  </h1>
            <img src="../Image/right.png" alt="">
        </div>
    </div>
    <?php
    foreach ($arr as $key => $v) {
        $charity=$ch->readById($v['charity_id']);
        echo "<div class='card'>";
        echo "<div class='card-header'>";
        echo "<div class='row'>";
        echo "<div class='col-md-5'></div>";
        echo "<div class='col-md-6'>";
        echo "<h5 class='mr-1' style='color :rgb(150, 20, 11); display:inline'></h5> <h5 style='display:inline'>{$charity['0']['charity_name']}</h5>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "<div class='card-body'>";
        echo "<h5 class=' mr-5 card-title title' style='color :rgb(150, 20, 11);display:inline'>case name :</h5><h5 style='display:inline-block'>{$v['case_name']}</h5>";
        echo "<br>";
        echo "<br>";
        echo "<p class='card-text'style='color :rgb(150, 20, 11); display:inline-block'> Short Description  :</p><p style='display:inline' class='ml-3'>{$v['case_desc']}</p>";
        echo "<br>";      
        echo "<br>";      
              
       
        echo "<a href='visit-user-supporter.php?id={$v['case_id']}' class='btn mr-3 '>Show the profile</a>";
        echo "<a href='https://jordan.wu.com/send_money' target='_blank' class='btn btn-primary'>Donate Now !</a>";
        echo "</div>";
        echo "</div>";
    }
    ?>
  </div>
</div>


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
    <span style="font-family: myfont; padding-top: 120px;">
        © 2020 Developed by <span style="font-family: myfont; color: rgb(150, 20, 11);">Charity Gate Team</span>. All rights reserved.
    </span>
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