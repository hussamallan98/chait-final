<?php

include('includes\header.php');
include('includes\classes.php');
$ch=new charity();

if (isset($_GET['id'])){
$id=$_GET['id'];
$ch->delete($id);
}
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
		$ch->ch_password=$_POST['charity-password'];
	}
	if(empty($_POST['charity-phone'])){
		$error_phone="mobile is requierd";
	}else{
		$ch->charity_phone=$_POST['charity-phone'];
	}
	
    if (empty($error_name)&&empty($error_email) &&empty($error_phone) && empty($error_password)) {
         $ch->create();
    }
}
?>
<div class="main-container">
		

<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4 text-danger">Add Charity</h4>
							
						</div>
						
					</div>
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Charity Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text"name="charity-name" placeholder="Customer Name">
							</div>
						</div>
						<?php 
                            if (isset($error_name)) {
                                echo "<span class='text-danger'>";
                                echo "* ".$error_name;
                                echo "</span>";
                               }
                          	?>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Email</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" name="charity-email"placeholder="example@example.com" type="email">
							</div>
						</div>
						<?php 
                            if (isset($error_email)) {
                                echo "<span class='text-danger'>";
                                echo "* ".$error_email;
                                echo "</span>";
                               }
                          	?>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Password</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control"name="charity-password" placeholder="password" type="password">
							</div>
						</div>
						<?php 
                            if (isset($error_password)) {
                                echo "<span class='text-danger'>";
                                echo "* ".$error_password;
                                echo "</span>";
                               }
                          	?>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Mobile</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text"name="charity-phone" placeholder="079-000-0000">
							</div>
						</div>
						<?php 
                            if (isset($error_phone)) {
                                echo "<span class='text-danger'>";
                                echo "* ".$error_phone;
                                echo "</span>";
                               }
                          	?>
						
						<div class="row">
							<div class="col-md-5"></div>
							<div class="col-md-7">
								<button type="submit" name="save"class="btn btn-primary btn-danger ">Save</button>
							</div>

							
						</div>
					</form>
				</div>
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4 text-danger">Charities</h4>
							
						</div>
						
					</div>
				<div class="table-responsive ">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Charity Name</th>
									<th scope="col">Charity Email</th>
									<th scope="col">Charity mobile</th>
									<th scope="col">Update</th>
									<th scope="col">Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$arr=$ch->readAll();
								foreach ($arr as $k => $v) {
									echo "<tr>";
									echo "<th scope='row'>{$v['charity_id']}</th>";
									echo "<td>{$v['charity_name']}</td>";
									echo "<td>{$v['charity_email']}</td>";
									echo "<td>{$v['charity_phone']}</td>";
									
									echo "<td>	<a href='edit-charity.php?id={$v['charity_id']}'><button type='submit' class='btn btn-primary' name='update'><i class='icon-copy fa fa-edit' aria-hidden='true'></i></button></a>";
									echo "</td>";
									echo "<td>
									<a href='manage-charity.php?id={$v['charity_id']}'><button type='submit' class='btn btn-danger' name='delete'><i class='icon-copy fa fa-trash' aria-hidden='true'></i></button></a>		
									</td>";
									echo "</tr>";
								}
								?>
								
								
							</tbody>
						</table>
					</div>
					</div>
			</div>
