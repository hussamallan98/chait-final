<?php
include('includes\header.php');
include('includes\classes.php');
$cat=new category();
$c_name=$cat->readName();

$case=new cases();
$ac=new accept();

if (isset($_GET['id'])){
$id=$_GET['id'];

$case->delete($id);
}
if (isset($_GET['ac_delete'])){
$id=$_GET['ac_delete'];

$ac->delete($id);
}
if(isset($_GET['ac_id']) ){
	
	$ac_id=$_GET['ac_id'];
	$array=$ac->readByid($ac_id);	
	$case->case_name=$array[0]['case_name'];
	$case->case_desc=$array[0]['case_desc'];
	$case->case_age=$array[0]['case_age'];
	$case->case_cat=$array[0]['case_cat'];
	$case->charity_id=$array[0]['charity_id'];
	$case->case_image=$array[0]['case_image'];
	$case->create();
	$ac->delete($ac_id);
	
}
if(isset($_POST['save']) ){
	
	if(empty($_POST['case-name'])){
		$error_name='Name is required';
	}else{
		$case->case_name=$_POST['case-name'];
	}
	if(empty($_POST['case-desc'])){
		$error_desc='Description is required';
	}else{
		$case->case_desc=$_POST['case-desc'];
	}
	if(empty($_POST['case-age'])){
		$error_age='age is required';
	}else{
		$case->case_age=$_POST['case-age'];
	}
	
	if(empty($_POST['case-cat'])){
		$error_cat='Category is required';
	}else{
		$case->case_cat=$_POST['case-cat'];
	}
	if (empty($_FILES['case-image']['name'])) {
        $error_image="image is requierd";
    }else
    {
      $case->case_image= $_FILES['case-image']['name'];
    $tmp = $_FILES['case-image']['tmp_name'];
    $path="img/case/";
    move_uploaded_file($tmp, $path . $case->case_image);  
    }
    if (empty($error_name)&&empty($error_desc) &&empty($error_image) &&empty($error_age)&&empty($error_cat)) {
    	
         $case->create();
    }
}
?>
<div class="main-container">
		

<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-danger h4">Add cases</h4>
							
						</div>
						
					</div>
					<form action="" method="post"enctype="multipart/form-data">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">case Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text"name="case-name" placeholder="case Name">
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
							<label class="col-sm-12 col-md-2 col-form-label">Description</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" name="case-desc"placeholder="Description" type="text">
							</div>
						</div>
						<?php 
                            if (isset($error_desc)) {
                                echo "<span class='text-danger'>";
                                echo "* ".$error_desc;
                                echo "</span>";
                               }
                          	?>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">case age</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" name="case-age"type="number">
							</div>
						</div>
						<?php 
                            if (isset($error_price)) {
                                echo "<span class='text-danger'>";
                                echo "* ".$error_age;
                                echo "</span>";
                               }
                          	?>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Category</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" name="case-cat">
									<option selected="" disabled="">Choose...</option>
									<?php 
									foreach ($c_name as $k => $v) {
										
									
									echo "<option value='{$v['cat_id']}'>{$v['cat_name']}</option>";
									}
									?>
									
									
								</select>
							</div>
						</div>
						<?php 
                            if (isset($error_cat)) {
                                echo "<span class='text-danger'>";
                                echo "* ".$error_cat;
                                echo "</span>";
                               }
                          	?>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Image</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="file" name="case-image">
							</div>
						</div>
						<?php 
                            if (isset($error_image)) {
                                echo "<span class='text-danger'>";
                                echo "* ".$error_image;
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
									<h4 class="text-danger  h4"> Accept Case</h4>	
						</div>
						
					</div>
				<div class="table-responsive ">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">case Name</th>
									<th scope="col">case Description</th>
									<th scope="col">case age</th>
									<th scope="col">category</th>
									<th scope="col">Image</th>
									<th scope="col">charity Id</th>
									<th scope="col">accept</th>
									<th scope="col">Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php
								
								$ac_case=$ac->readAll();
								if (empty($ac_case)) {
									echo "<tr>";
									echo "<td>";
									 echo "<span class='text-danger'>";
                                echo "* no cases need accept";
                                echo "</span>";
                                echo "</td>";
                                echo "</tr>";
								}else{
								foreach ($ac_case as $k => $v) {
									$c_name=$cat->readByid($v['case_cat']);

									echo "<tr>";
									echo "<th scope='row'>{$v['case_id']}</th>";
									echo "<td>{$v['case_name']}</td>";
									echo "<td>{$v['case_desc']}</td>";
									echo "<td>{$v['case_age']}</td>";
									echo "<td>{$c_name['0']['cat_name']}</td>";
									echo "<td><img src='img/case/{$v['case_image']}'width=70px height=70px></td>";
									echo "<td>{$v['charity_id']}</td>";
									echo "<td>	<a href='manage-cases.php?ac_id={$v['case_id']}'><button type='submit' class='btn btn-primary' name='ac'><i class='far fa-check-circle'></i></button></a>";
									echo "</td>";
									echo "<td>
									<a href='manage-cases.php?ac_delete={$v['case_id']}'><button type='submit' class='btn btn-danger' name='delete'><i class='icon-copy fa fa-trash' aria-hidden='true'></i></button></a>		
									</td>";
									echo "</tr>";
								}
							}
								?>				
									
								</tr>
								
							</tbody>
						</table>
					</div>

					</div>
					<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-danger h4">  Cases</h4>
							
						</div>
						
					</div>
				<div class="table-responsive ">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">case Name</th>
									<th scope="col">case Description</th>
									<th scope="col">case age</th>
									<th scope="col">category</th>
									<th scope="col">Image</th>
									<th scope="col">charity Id</th>
									<th scope="col">Update</th>
									<th scope="col">Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$arr=$case->readAll();
								foreach ($arr as $k => $v) {
									$c_name=$cat->readByid($v['case_cat']);

									echo "<tr>";
									echo "<th scope='row'>{$v['case_id']}</th>";
									echo "<td>{$v['case_name']}</td>";
									echo "<td>{$v['case_desc']}</td>";
									echo "<td>{$v['case_age']}</td>";
									echo "<td>{$c_name['0']['cat_name']}</td>";
									echo "<td><img src='img/case/{$v['case_image']}'width=70px height=70px></td>";
									echo "<td>{$v['charity_id']}</td>";

									echo "<td>	<a href='edit-cases.php?id={$v['case_id']}&id2={$v['case_cat']}'><button type='submit' class='btn btn-primary' name='update'><i class='icon-copy fa fa-edit' aria-hidden='true'></i></button></a>";
									echo "</td>";
									echo "<td>
									<a href='manage-cases.php?id={$v['case_id']}'><button type='submit' class='btn btn-danger' name='delete'><i class='icon-copy fa fa-trash' aria-hidden='true'></i></button></a>		
									</td>";
									echo "</tr>";
								}
								?>				
									
								</tr>
								
							</tbody>
						</table>
					</div>
					
					</div>
			</div>
