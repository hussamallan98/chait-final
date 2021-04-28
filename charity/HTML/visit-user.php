<?php 
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
include("../includes/classes.php");
$id=$_GET['id'];
$user=$_SESSION['id'];
$case=new cases();
$arr=$case->profile($id);
$ch=new charity();

$cha=$ch->readById($arr[0]['charity_id']);
$con=$ch->readById($user);
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


    <link rel="stylesheet" href="../css/visit-user-css.css">



    <!--------------------My js ------------------>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/profile-script.js"></script>
    <!--------------------My js ------------------>

   
</head>
<body>
    
<!--------------------NavBar------------------>
        <nav class="navbar" >
            <a class="navbar-brand" href="Home.php"><img src="../Image/logo.png"  class="logo"  alt=""></a>
           <a class="hvr-bounce-to-bottom nav-item"  href="profile.php"style="color:#fff !important ;">My Profile</a>
          <a class="hvr-bounce-to-bottom"  href="edit.php"style="color:#fff !important ;">Edit</a> 
          <a class="hvr-bounce-to-bottom  "  href="category.php"style="color:#fff !important ;">category</a>
          <a class="hvr-bounce-to-bottom"  href="#contact"style="color:#fff !important ;">Contact Us</a>
          <a class="hvr-bounce-to-bottom"  href="Home-1.php#portal"style="color:#fff !important ;">Log Out <i class="fas fa-door-open"></i></a>
      </nav>
<!--------------------NavBar------------------>

<!--------------------body------------------>
<div class="container">
    <div class="visit-body">
        <div class="visit">
            <div class="row">
                <div class="col-md-6">
                    <label for=""><i class="fas fa-user"></i></label><label for="">Case Name: &nbsp;&nbsp;</label><label for=""><?php echo $arr[0]['case_name']; ?></label><br>
                    <label for=""><i class="fas fa-percentage"></i></label><label for="">E-mail: &nbsp;&nbsp;</label><label for=""><?php echo $arr[0]['case_name']; ?></label><br>
                    <label for=""><i class="fas fa-phone"></i></label><label for="">Phone: &nbsp
                    ;&nbsp;</label><label for=""><?php echo $arr[0]['case_name']; ?></label><br>
                    <div class="row">
                        <div class="col-md-6">
                            <?php 
                        $cat_id=$arr[0]['case_cat'];
                        echo "<a href=case.php?id={$cat_id} class='btn btn-primary pb-3 '>back<i class='far fa-arrow-alt-circle-right '></i></a>";
                    ?>

                        </div>
                        <div class="col-md-6">
                            
                        </div>
                    </div> 
                </div>
            <div class="col-md-6">
                <label for=""><i class="fas fa-house-user"></i></label><label for="">Charity Name: &nbsp;&nbsp;</label><label for=""><?php echo $cha[0]['charity_name']; ?></label><br>
                <label for=""><i class="far fa-envelope"></i></label><label for=""> Email: &nbsp;&nbsp;</label><label for=""><?php echo $cha[0]['charity_email']; ?></label><br>
                <label for=""><i class="fas fa-phone"></i></label><label for="">Charity Phone: &nbsp;&nbsp;</label><label for=""><?php echo $cha[0]['charity_phone']; ?></label><br>
                <a href='https://jordan.wu.com/send_money' class='btn btn-primary pb-3'>Donate <i class="fas fa-dollar-sign"></i></a>
           
           
                    
                </div>
        </div>
            
            



        </div> 
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
                    <input type="text" name="user" class="contact-field" placeholder="<?php echo $con[0]['charity_name'];?>" disabled>
                    <input type="text" name="phone" class="contact-field" placeholder="<?php echo $con[0]['charity_phone'];?>" disabled>
                    <input type="text" name="email" class="contact-field" placeholder="<?php echo $con[0]['charity_email'];?>" disabled>
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