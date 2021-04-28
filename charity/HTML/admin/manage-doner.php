<?php
include('includes\header.php');
include('includes\classes.php');
$sup=new supporter();

if (isset($_GET['id'])){
$id=$_GET['id'];
$sup->delete($id);
header("location:manage-doner.php");
}

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
	
    if (empty($error_name)&&empty($error_email) &&empty($error_phone) && empty($error_password)) {
         $sup->create();
    }
}

?>
<div class="main-container">
		

<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4 text-danger">Add Doner</h4>
							
						</div>
						
					</div>
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Doner Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text"name="supporter-name" placeholder="supporter Name">
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
								<input class="form-control" name="supporter-email"placeholder="example@example.com" type="email">
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
								<input class="form-control"name="supporter-password" placeholde="********" type="password">
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
								<input class="form-control" type="text"name="supporter-phone" placeholder="079-000-0000">
							</div>
						</div>
						<?php 
                            if (isset($error_mobile)) {
                                echo "<span class='text-danger'>";
                                echo "* ".$error_mobile;
                                echo "</span>";
                               }
                          	?>
						
						<div class="row">
							<div class="col-md-5"></div>
							<div class="col-md-7">
								<button type="submit" name="save"class="btn btn-danger ">Save</button>
							</div>

							
						</div>
					</form>
				</div>
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4 text-danger"> Doners</h4>
							
						</div>
						
					</div>
				<div class="table-responsive ">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Doner Name</th>
									<th scope="col">Doner Email</th>
									<th scope="col">Doner mobile</th>
									<th scope="col">Update</th>
									<th scope="col">Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$arr=$sup->readAll();
								foreach ($arr as $k => $v) {
									echo "<tr>";
									echo "<th scope='row'>{$v['supporter_id']}</th>";
									echo "<td>{$v['supporter_name']}</td>";
									echo "<td>{$v['supporter_email']}</td>";
									echo "<td>{$v['supporter_phone']}</td>";
									echo "<td>	<a href='edit-Doner.php?id={$v['supporter_id']}'><button type='submit' class='btn btn-primary' name='update'><i class='icon-copy fa fa-edit' aria-hidden='true'></i></button></a>";
									echo "</td>";
									echo "<td>
									<a href='manage-Doner.php?id={$v['supporter_id']}'><button type='submit' class='btn btn-danger' name='delete'><i class='icon-copy fa fa-trash' aria-hidden='true'></i></button></a>		
									</td>";
									echo "</tr>";
								}
								?>
								
							</tbody>
						</table>
					</div>
					</div>
			</div>
