<?php 
session_start();
include("../includes/classes.php");
$id=$_SESSION['id'];
$ch=new charity();
$arr=$ch->readById($id);
$contact=new contact();
if (isset($_POST['contact'])) {
  $contact->user_id=$id;
  $contact->contact_desc=$_POST['message'];
  $contact->create();
}
$case=new cases();
if (isset($_POST['submit'])) {
  $case->case_name  =$_POST['case-name'];
  $case->case_age   =$_POST['case-age'];
  $case->case_cat   =$_POST['case-category'];
  $case->case_desc  =$_POST['case-desc'];
  $case->charity_id =$id;
  $case->case_image=$_FILES['case-image']['name'];
  $tmp = $_FILES['case-image']['tmp_name'];
  $path="admin/img/case";
  move_uploaded_file($tmp, $path . $case->case_image);
  $case->accept();
}
$cases=$case->readById($id);
/*
  $tmp = $_FILES['cust-image']['tmp_name'];
    $path="../admin/img/";
    move_uploaded_file($tmp, $path . $cust->cust_image);
    $cust->create();
*/
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


    <link rel="stylesheet" href="../css/profile-css.css">



    <!--------------------My js ------------------>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/profile-script.js"></script>
    <!--------------------My js ------------------>

   
</head>
<body>
    
<!--------------------NavBar------------------>
        <nav class="navbar" >
            <a class="navbar-brand" href="#"><img src="../Image/logo.png"  class="logo"  alt=""></a>
           <a class="hvr-bounce-to-bottom nav-item active"  href="profile.php" style="color:#fff !important ;">My Profile</a>
          <a class="hvr-bounce-to-bottom"  href="edit.php" style="color:#fff !important ;">Edit</a> 
          <a class="hvr-bounce-to-bottom  "  href="category.php" style="color:#fff !important ;">category</a>
          <a class="hvr-bounce-to-bottom "  href="Home-1.php" style="color:#fff !important ;">Home</a>
          <a class="hvr-bounce-to-bottom"  href="#contact" style="color:#fff !important ;">Contact Us</a>
          <a class="hvr-bounce-to-bottom"  href="logout.php" style="color:#fff !important ;">Log Out <i class="fas fa-door-open"></i></a>
      </nav>
<!--------------------NavBar------------------>

<!--------------------body------------------>
<div class="container">
    <div class="profile">
      <span>
        <img src="../Image/left.png" alt="">
        <h1 >Welcome <label ><?php echo $arr[0]['charity_name'];?></label> </h1>
        <img src="../Image/right.png" alt="">
        </span>
        <div class="hvr-rectangle-out" id="flip">ADD CASES <i class="fas fa-plus-circle"></i></div>
        <div id="panel">
          <form action="" method="post" enctype="multipart/form-data"> 
          <input type="text" name="case-name" placeholder="name" >
          <input type="number" name="case-age" placeholder="age"  class="ml-3">  
          <br>  
          <br>
          <br>
          <div class="row"> 
          <div class="col-md-4"> </div>
          <div class="col-md-4 align-middle"> 
          <select id="inputState" class="form-control" name=case-category>
              <option selected>Category</option>
              <option value="1">learning</option>
              <option value="3">help</option>
              <option value="4">health</option>
          </select>
          <br>
          <input class="form-control ml-2" type="file" name="case-image">
          </div>
          </div>
            <textarea name="case-desc" id="" cols="30" rows="10">Description</textarea> 
            <input type="submit" name="submit" id="" value="ADD" class="post">
         </form>
        </div>
        <br><br><br>
        <h2>My Cases</h2>
        <?php 
        if (empty($cases)) {
          echo "<p class='text-danger' >*no cases in this charity</p>";
        }else{
        foreach ($cases as $k => $v) {
          echo "<div class='card text-center' >";
          echo "<div class='card-header'>";
          echo "<h3>{$v['case_name']} </h3>";
          echo "</div>";
          echo "<div class='card-body'>";
          echo "<p class='card-text'>{$v['case_desc']}</p>";
          echo "</div>";
          echo "<div class='card-footer '>";
          echo "{$v['case_age']} Years";
          echo "</div>";
          echo "</div>";
          
          

          
        }
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
                    <input type="text" name="user" class="contact-field" placeholder="<?php echo $arr[0]['charity_name'];?>" disabled>
                    <input type="text" name="phone" class="contact-field" placeholder="<?php echo $arr[0]['charity_phone'];?>" disabled>
                    <input type="text" name="email" class="contact-field" placeholder="<?php echo $arr[0]['charity_email'];?>" disabled>
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
                        +692788888888
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