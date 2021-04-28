<?php
ob_start();
include('includes\header.php');
include('includes\classes.php');
$sup= new supporter();
$id=$_GET['id'];
$arr=$sup->readById($_GET['id']);

if(isset($_POST['save'])){
	

	if(empty($_POST['supporter-name'])){
		$error_name="name is requierd";
	}else{
		$sup->supporter_name=$_POST['supporter-name'];
	}
	if(empty($_POST['supporter-email'])){
		$error_email="email is requierd";
	}else{
		$sup->supporter_email=$_POST['supporter-email'];
	}
	if(empty($_POST['supporter-password'])){
		$error_password="password is requierd";
	}else{
		$sup->supporter_password=$_POST['supporter-password'];
	}
	if(empty($_POST['supporter-phone'])){
		$error_phone="mobile is requierd";
	}else{
		$sup->supporter_phone=$_POST['supporter-phone'];
	}
	
	
        

    if (empty($error_name)&&empty($error_email)   && 
    	empty($error_phone) && empty($error_address)) {
         $sup->update($id);
         header("location:manage-doner.php");


    }

}
?>
<div class="main-container">
	<div class="pd-20 card-box mb-30">
		<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4 text-danger">Edit doner</h4>
							
						</div>
						
					</div>
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">doner Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text"name="supporter-name" placeholder="supporter Name"value="<?php 
								echo $arr[0]['supporter_name'];
								?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Email</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" name="supporter-email"placeholder="example@example.com" type="email"value="<?php 
								echo $arr[0]['supporter_email'];
								?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Password</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control"name="supporter-password" placeholder="password" type="password"value="<?php 
								echo $arr[0]['supporter_password'];
								?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Mobile</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text"name="supporter-phone" placeholder="079-000-0000"value="<?php 
								echo $arr[0]['supporter_phone'];
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



