<?php 
session_start();
ob_start();
include("../includes/classes.php");
$admin=new admin();
if (isset($_POST['save'])) {
  

    $admin->admin_password=$_POST['admin-password'];
    $admin->admin_email=$_POST['admin-email'];

    $t=$admin->login($_POST['admin-email'],$_POST['admin-password']);
    if ($t[0]['admin_id']) {
    $_SESSION['admin-id']=$t[0]['admin_id'];
    header("location:admin/manage-admin.php");
}
}
?>
