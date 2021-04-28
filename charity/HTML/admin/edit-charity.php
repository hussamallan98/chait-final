<?php
ob_start();
include('includes\header.php');
include('includes\classes.php');
$ch= new charity();
$id=$_GET['id'];
$arr=$ch->readById($_GET['id']);

if(isset($_POST['save'])){
	

	if(empty($_POST['charity-name'])){
		$error_name="name is requierd";
	}else{
		$ch->charity_name=$_POST['charity-name'];
	}
	if(empty($_POST['charity-email'])){
		$error_email="email is requierd";
	}else{
		$ch->charity_email=$_POST['charity-email'];
	}
	if(empty($_POST['charity-password'])){
		$error_password="password is requierd";
	}else{
		$ch->charity_password=$_POST['charity-password'];
	}
	if(empty($_POST['charity-phone'])){
		$error_phone="mobile is requierd";
	}else{
		$ch->charity_phone=$_POST['charity-phone'];
	}
	 

    if (empty($error_name)&&empty($error_email)   && 
    	empty($error_phone) && empty($error_password)) {
         $ch->update($id);
         header("location:manage-charity.php");


    }

}
?>
<div class="main-container">
	<div class="pd-20 card-box mb-30">
		<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4 text-danger">Edit Costumer</h4>
							
						</div>
						
					</div>
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Customer Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text"name="charity-name" placeholder="charity Name"value="<?php 
								echo $arr[0]['charity_name'];
								?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Email</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" name="charity-email"placeholder="example@example.com" type="email"value="<?php 
								echo $arr[0]['charity_email'];
								?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Password</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control"name="charity-password" placeholder="password" type="password"value="<?php 
								echo $arr[0]['charity_password'];
								?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Mobile</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text"name="charity-phone" placeholder="079-000-0000"value="<?php 
								echo $arr[0]['charity_phone'];
								?>">
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-5"></div>
							<div class="col-md-7">
								<button type="submit" name="save"class="btn btn-danger ">Edit</button>
							</div>

							
						</div>
					</form>
				</div>
			</div>



