<?php
include('includes\header.php');
include('includes\classes.php');
$con=new contact();
$user=new charity;
$arr=$con->readAll();
if (isset($_GET['charity_id'])) {
	$c_id=$_GET['charity_id'];
	$con->delete($c_id);
	header("location:manage-contact.php");
}
?>
<div class="main-container ">
	<div class="row mb-5">
		<div class="col-md-4 mt-5 "></div>
		<div class="col-md-8 mt-4 ">
			<h1 class="text-danger ">Masseges</h1>
		</div>
	</div>
		<div class="pd-20 card-box mb-30 mt-5">
					<div class="clearfix">
		<div class="table-responsive ">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">user Name</th>
									<th scope="col"> Description</th>
									<th scope="col">Delete</th>
									
								</tr>
							</thead>
							<tbody>
								<?php
								
								
								if (empty($arr)) {
									echo "<tr>";
									echo "<td>";
									 echo "<span class='text-danger'>";
                                echo "* no masseges ";
                                echo "</span>";
                                echo "</td>";
                                echo "</tr>";
								}else{
								foreach ($arr as $k => $v) {
									$u_name=$user->readByid($v['user_id']);

									echo "<tr>";
									echo "<th scope='row'>{$v['contact_id']}</th>";
									
									echo "<td>{$u_name[0]['charity_name']}</td>";
									echo "<td>{$v['contact_desc']}</td>";
									
									echo "<td>	<a href='manage-contact.php?charity_id={$v['contact_id']}'><button type='submit' class='btn btn-danger' name='delete'><i class='icon-copy fa fa-trash' aria-hidden='true'></i></button></a>";
									echo "</td>";
									
									echo "</tr>";
								}
							}
								?>				
									
								</tr>
								
							</tbody>
						</table>
					</div>
		
	</div>
	
	</div>
</div>
</div>