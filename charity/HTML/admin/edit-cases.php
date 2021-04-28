<?php
ob_start();
include('includes\header.php');
include('includes\classes.php');
$case= new cases();
$id=$_GET['id'];
$id2=$_GET['id2'];
$arr=$case->profile($id);


$cat=new category();
$c_name=$cat->readName($id2);

if(isset($_POST['save'])){
	
	if(empty($_POST['case-name'])){
		$error_name="name is requierd";
	}else{
		$case->case_name=$_POST['case-name'];
	}
	if(empty($_POST['case-desc'])){
		$error_desc="Description is requierd";
	}else{
		$case->case_desc=$_POST['case-desc'];
	}
	if(empty($_POST['case-age'])){
		$error_age="age is requierd";
	}else{
		$case->case_age=$_POST['case-age'];
	}
	if(empty($_POST['case-cat'])){
		$error_cat="category is requierd";
	}else{
		$case->case_cat=$_POST['case-cat'];
	}
	
      $case->case_image= $_FILES['case-image']['name'];
    $tmp = $_FILES['case-image']['tmp_name'];
    $path="img/case/";
    move_uploaded_file($tmp, $path . $case->case_image);  
    
    if (empty($error_name)&&empty($error_desc)&&empty($error_age)&&empty($error_cat) ) {
         $case->update($id);
         header("location:manage-cases.php");
    }
}
?>
<div class="main-container">
		

<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-danger h4">Edit cases</h4>
							
						</div>
						
					</div>
					<form action="" method="post"enctype="multipart/form-data">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">case Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text"name="case-name" placeholder="product Name"value="<?php 
								echo $arr[0]['case_name'];
								?>">
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
								<input class="form-control" name="case-desc"placeholder="Description" type="text"value="<?php 
								echo $arr[0]['case_desc'];
								?>">
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
							<label class="col-sm-12 col-md-2 col-form-label">age</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" name="case-age"placeholder="age" type="text"value="<?php 
								echo $arr[0]['case_age'];
								?>">
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
									
									<?php 
									foreach ($c_name as $k => $v) {
										
									if ($v['cat_id']==$_GET['id2']) {
										echo "<option value='{$v['cat_id']}' selected>{$v['cat_name']}</option>";
									}else{
									echo "<option value='{$v['cat_id']}'>{$v['cat_name']}</option>";
									}
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

