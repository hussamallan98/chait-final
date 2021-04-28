<?php 
session_start();
include("../includes/classes.php");
$id=$_SESSION['supporter_id'];

$contact=new contact();
if (isset($_POST['contact'])) {
  $contact->user_id=$id;
  $contact->contact_desc=$_POST['message'];
  $contact->create();
}

$sup=new supporter();
$arr=$sup->readById($id);
if (isset($_POST['submit'])) {
   
    $sup->supporter_name=$_POST['supporter-name'];
    $sup->supporter_email=$_POST['supporter-email'];
    $sup->supporter_password=$_POST['supporter-password'];
    $sup->supporter_phone=$_POST['supporter-phone'];
    $sup->update($id);
    header("location:edit-supporter.php");
}
?>
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


    <link rel="stylesheet" href="../css/edit-css.css">



    <!--------------------My js ------------------>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/edit.js"></script>
    <!--------------------My js ------------------>

    
</head>
<body>
    
<!--------------------NavBar------------------>
        <nav class="navbar" >
            <a class="navbar-brand" href="#"><img src="../Image/logo.png"  class="logo"  alt=""></a>
          
          <a class="hvr-bounce-to-bottom active"  href="edit-supporter.php" style="color:#fff !important ;">Edit</a> 
          <a class="hvr-bounce-to-bottom  "  href="category-supporter.php" style="color:#fff !important ;">category</a>
          <a class="hvr-bounce-to-bottom "  href="Home-1.php"style="color:#fff !important ;">Home</a>
          <a class="hvr-bounce-to-bottom"  href="#contact"style="color:#fff !important ;">Contact Us</a>
          <a class="hvr-bounce-to-bottom"  href="logout.php"style="color:#fff !important ;">Log Out <i class="fas fa-door-open"></i></a>
      </nav>
<!--------------------NavBar------------------>

<!--------------------body------------------>
<div class="container">
    <div class="editBody">
        <div class="E-title">
            <span>
                <img src="../Image/left.png" alt="">
                <h1 >Editing </h1>
                <img src="../Image/right.png" alt="">
            </span>
         </div>  
         <div class="right-body">
             <h3 style="color: rgb(150, 20, 11);">Notice</h3>
            <p style="font-family: myfont; font-weight: 1500; font-size: 20px; ">
                
                - Make sure you have a valid email address for people to contact you <br>
                - The password must be composed of numbers and letters <br>
                - Keep away from your personal information in the password such as (name, date of birth, phone number, etc.) <br>
                - Never give out your password to anyone
                
            </p>
        </div>  
        <form action="" method="post">
            <input type="text" value="<?php echo $arr[0]['supporter_name'];?>" class="newInput"   style=" width: 400px;"  oninput="style='border-bottom: 3px solid green; letter-spacing:1px; width: 400px;'" name="supporter-name" requierd>
            <input type="text" value="<?php echo $arr[0]['supporter_phone'];?>" class="newInput"   style=" width: 420px;"  oninput="style='border-bottom: 3px solid green; letter-spacing:1px; width: 400px;'"  requierd name="supporter-phone">

            <input type="email" value="<?php echo $arr[0]['supporter_email'];?>" class="newInput" id="dis"  style=" width: 440px;" oninput="style='border-bottom: 3px solid green; letter-spacing:1px; width: 430px;'" requierd  name="supporter-email"> 
            

            <input type="password" placeholder="Your Password" class="newInput" style=" width: 460px;" oninput="style='border-bottom: 3px solid green; letter-spacing:1px; width: 460px;'" required>
            <input type="password" placeholder=" New Password" class="newInput" style=" width: 490px;" oninput="style='border-bottom: 3px solid green; letter-spacing:1px; width: 490px;'" name="supporter-password" required>
            <input type="password" placeholder=" Confirm New Password" style=" width: 510px;" class="newInput" oninput="style='border-bottom: 3px solid green; letter-spacing:1px; width: 510px; '" required>
            <input type="submit" name="submit" class="Save-button" value="Save">
            
           
        </form>
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
                    <input type="text" name="user" class="contact-field" placeholder="<?php echo $arr[0]['supporter_name'];?>" disabled>
                    <input type="text" name="phone" class="contact-field" placeholder="<?php echo $arr[0]['supporter_phone'];?>" disabled>
                    <input type="text" name="email" class="contact-field" placeholder="<?php echo $arr[0]['supporter_email'];?> " disabled>
                    <textarea name="message" id="" cols="30" rows="10" > Your Message Here</textarea>
                    <button type="submit"  name="contact"class="hvr-shutter-in-horizontal">Send To Admin</button>
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
</html><?php 
session_start();
include("../includes/classes.php");
$id=$_SESSION['charity-id'];

$contact=new contact();
if (isset($_POST['contact'])) {
  $contact->user_id=$id;
  $contact->contact_desc=$_POST['message'];
  $contact->create();
}

$ch=new charity();
$arr=$ch->readById($id);
if (isset($_POST['submit'])) {
   
    $ch->charity_name=$_POST['charity-name'];
    $ch->charity_email=$_POST['charity-email'];
    $ch->charity_password=$_POST['charity-password'];
    $ch->charity_phone=$_POST['charity-phone'];
    $ch->update($id);
    header("location:edit.php");
}
?>
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


    <link rel="stylesheet" href="../css/edit-css.css">



    <!--------------------My js ------------------>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/edit.js"></script>
    <!--------------------My js ------------------>

    
</head>
<body>
    
<!--------------------NavBar------------------>
        <nav class="navbar" >
            <a class="navbar-brand" href="#"><img src="../Image/logo.png"  class="logo"  alt=""></a>
           <a class="hvr-bounce-to-bottom nav-item "  href="../HTML/profile.php">My Profile</a>
          <a class="hvr-bounce-to-bottom active"  href="edit.php">Edit</a> 
          <a class="hvr-bounce-to-bottom  "  href="category.php">category</a>
          <a class="hvr-bounce-to-bottom "  href="Home.php">Home</a>
          <a class="hvr-bounce-to-bottom"  href="#contact">Contact Us</a>
          <a class="hvr-bounce-to-bottom"  href="Home.html#portal">Log Out <i class="fas fa-door-open"></i></a>
      </nav>
<!--------------------NavBar------------------>

<!--------------------body------------------>
<div class="container">
    <div class="editBody">
        <div class="E-title">
            <span>
                <img src="../Image/left.png" alt="">
                <h1 >Editing </h1>
                <img src="../Image/right.png" alt="">
            </span>
         </div>  
         <div class="right-body">
             <h3 style="color: rgb(150, 20, 11);">Notice</h3>
            <p style="font-family: myfont; font-weight: 1500; font-size: 20px; ">
                
                - Make sure you have a valid email address for people to contact you <br>
                - The password must be composed of numbers and letters <br>
                - Keep away from your personal information in the password such as (name, date of birth, phone number, etc.) <br>
                - Never give out your password to anyone
                
            </p>
        </div>  
        <form action="" method="post">
            <input type="text" value="<?php echo $arr[0]['charity_name'];?>" class="newInput"   style=" width: 400px;"  oninput="style='border-bottom: 3px solid green; letter-spacing:1px; width: 400px;'" name="charity-name" requierd>
            <input type="text" value="<?php echo $arr[0]['charity_phone'];?>" class="newInput"   style=" width: 420px;"  oninput="style='border-bottom: 3px solid green; letter-spacing:1px; width: 400px;'"  requierd name="charity-phone">

            <input type="email" value="<?php echo $arr[0]['charity_email'];?>" class="newInput" id="dis"  style=" width: 440px;" oninput="style='border-bottom: 3px solid green; letter-spacing:1px; width: 430px;'" requierd  name="charity-email"> 
            

            <input type="password" placeholder="Your Password" class="newInput" style=" width: 460px;" oninput="style='border-bottom: 3px solid green; letter-spacing:1px; width: 460px;'" required>
            <input type="password" placeholder=" New Password" class="newInput" style=" width: 490px;" oninput="style='border-bottom: 3px solid green; letter-spacing:1px; width: 490px;'" name="charity-password" required>
            <input type="password" placeholder=" Confirm New Password" style=" width: 510px;" class="newInput" oninput="style='border-bottom: 3px solid green; letter-spacing:1px; width: 510px; '" required>
            <input type="submit" name="submit" class="Save-button" value="Save">
            
           
        </form>
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
                    <input type="text" name="user" class="contact-field" placeholder="<?php echo $arr[0]['charity_name'];?>" disabled>
                    <input type="text" name="phone" class="contact-field" placeholder="<?php echo $arr[0]['charity_phone'];?>" disabled>
                    <input type="text" name="email" class="contact-field" placeholder="<?php echo $arr[0]['charity_email'];?> " disabled>
                    <textarea name="message" id="" cols="30" rows="10" > Your Message Here</textarea>
                    <button type="submit"  name="contact"class="hvr-shutter-in-horizontal">Send To Admin</button>
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