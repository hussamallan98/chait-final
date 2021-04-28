<?php 

require('dbclass.php');


class charity extends dbconnection{
	public $charity_id;
	public $charity_name;
	public $charity_email;
	public $charity_password;
	public $charity_phone;
	public $err;

	
 public function login($email,$pass)
    {
    	$query="SELECT * from charity
                where charity_email='$email' AND charity_password='$pass' ";
                $result=$this->performQuery($query);
                return $this->fetchAll($result);
    }

     
	public function create(){




		$query = "INSERT INTO charity(charity_name,charity_email,charity_password,charity_phone)
				 VALUES('$this->charity_name','$this->charity_email','$this->charity_password',
				 		'$this->charity_phone')";
		$this->performQuery($query);

		
	}
	public function readById($id){
		$query  = "SELECT * FROM charity WHERE charity_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}
	public function readAll(){
		$query="SELECT * FROM charity";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	public function update($id)
	{

	$query = "UPDATE charity SET   charity_name    ='$this->charity_name',
								   charity_email   ='$this->charity_email',
								   charity_password='$this->charity_password',
								   charity_phone  ='$this->charity_phone'
								   
								   WHERE charity_id = $id";
								   $this->performQuery($query);
								}



public function delete($id){

		//$id=$_GET['delete_id'];
		$query = "DELETE FROM charity WHERE charity_id =$id ";
		$this->performQuery($query);
	
	}
}

class supporter extends dbconnection{
	public $supporter_id;
	public $supporter_name;
	public $supporter_email;
	public $supporter_password;
	public $supporter_phone;
	public $err;

	
 public function login($email,$pass)
    {
    	$query="SELECT * from supporter
                where supporter_email='$email' AND supporter_password='$pass' ";
                $result=$this->performQuery($query);
                return $this->fetchAll($result);
    }

     
	public function create(){




		$query = "INSERT INTO supporter(supporter_name,supporter_email,supporter_password,supporter_phone)
				 VALUES('$this->supporter_name','$this->supporter_email',
				 		'$this->supporter_password','$this->supporter_phone')";
		$this->performQuery($query);

		
	}
	public function readAll(){
		$query="SELECT * FROM supporter";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	public function readById($id){
		$query  = "SELECT * FROM supporter WHERE supporter_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}
	public function update($id)
	{

	$query = "UPDATE supporter SET   supporter_name    ='$this->supporter_name',
								   supporter_email   ='$this->supporter_email',
								   supporter_password='$this->supporter_password',
								   supporter_phone  ='$this->supporter_phone'
								   
								   WHERE supporter_id = $id";
								   $this->performQuery($query);
								}
	public function delete($id){

		//$id=$_GET['delete_id'];
		$query = "DELETE FROM supporter WHERE supporter_id =$id ";
		$this->performQuery($query);
	
	}

}


class admin extends dbconnection
{
	public $admin_id;
	public $admin_email;
	public $admin_name;
	public $admin_password;

	
	public function login($email,$pass)
    {
    	$query="SELECT * from admin
                where admin_email='$email' AND admin_password='$pass' ";
                $result=$this->performQuery($query);
                return $this->fetchAll($result);
    }
    public function readAll(){
		$query="SELECT * FROM admin";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	public function readById($id){
		$query  = "SELECT * FROM admin WHERE admin_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}
	public function create(){

		$query = "INSERT INTO admin(admin_name,admin_email,admin_password)
				 VALUES('$this->admin_name','$this->admin_email',
				 		'$this->admin_password')";
		$this->performQuery($query);

		
	}
	public function update($id)
	{

	$query = "UPDATE admin SET   admin_name    ='$this->admin_name',
								   admin_email   ='$this->admin_email',
								   admin_password='$this->admin_password'
								   
								   
								   WHERE admin_id = $id";
								   $this->performQuery($query);
								}
	public function delete($id){

		//$id=$_GET['delete_id'];
		$query = "DELETE FROM admin WHERE admin_id =$id ";
		$this->performQuery($query);
	
	}


}
class accept extends dbconnection
{
	public $case_id ;
	public $case_name ;
	public $case_age ;
	public $case_desc ;
	public $case_cat ;
	public $case_image;
	public $charity_id=0 ;

	public function readById($id){
		$query  = "SELECT * FROM accept WHERE case_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}
	public function readAll(){
		$query="SELECT * FROM accept";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	public function delete($id){

		//$id=$_GET['delete_id'];
		$query = "DELETE FROM accept WHERE case_id =$id ";
		$this->performQuery($query);
	
	}
}

class cases extends dbconnection
{
	public $case_id ;
	public $case_name ;
	public $case_age ;
	public $case_desc ;
	public $case_cat ;
	public $case_image;
	public $charity_id=0 ;


	public function create(){

		$query = "INSERT INTO cases(case_name,case_age,case_desc,case_image,case_cat,charity_id)
				 VALUES('$this->case_name','$this->case_age',
				 		'$this->case_desc','$this->case_image','$this->case_cat','$this->charity_id')";
		$this->performQuery($query);	
	}
	public function accept(){

		$query = "INSERT INTO accept(case_name,case_age,case_desc,case_image,case_cat,charity_id)
				 VALUES('$this->case_name','$this->case_age',
				 		'$this->case_desc','$this->case_image','$this->case_cat','$this->charity_id')";
		$this->performQuery($query);	
	}
	public function readById($id){
		$query  = "SELECT * FROM cases WHERE charity_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}
	public function readAll(){
		$query="SELECT * FROM cases";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
public function readCatID($id){
		$query  = "SELECT * FROM cases WHERE case_cat = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}
 public function profile($id){
 	$query  = "SELECT * FROM cases WHERE case_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
 }
 public function delete($id){

		//$id=$_GET['delete_id'];
		$query = "DELETE FROM cases WHERE case_id =$id ";
		$this->performQuery($query);
	
	}
	public function update($id)
	{
		if(empty($this->case_image)) {

	$query = "UPDATE cases SET   case_name    ='$this->case_name',
								   case_desc   ='$this->case_desc',
								   case_age='$this->case_age',
								   case_cat='$this->case_cat'
								   
								   
								   
								   WHERE case_id = $id";
								}else{
									$query = "UPDATE cases SET   case_name    ='$this->case_name',
								   case_desc   ='$this->case_desc',
								   case_age='$this->case_age',
								   case_cat='$this->case_cat',
								   case_image='$this->case_image'
								   
								   
								   
								   WHERE case_id = $id";
								   
								}
				$this->performQuery($query);
								}

}
class contact extends dbconnection
{
	public $contact_id ;
	public $user_name ;
	public $contact_desc ;

	public function create(){

		$query = "INSERT INTO contact(user_id,contact_desc)
				 VALUES('$this->user_id','$this->contact_desc')";
		$this->performQuery($query);	
	}
	public function readAll(){
		$query="SELECT * FROM contact";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	public function delete($id){

		//$id=$_GET['delete_id'];
		$query = "DELETE FROM contact WHERE contact_id =$id ";
		$this->performQuery($query);
	
	}
}
class category extends dbconnection
{
	public $cat_id;
	public $cat_name;
	public $cat_desc;
	public $cat_image;


	public function create(){

		$query = "INSERT INTO category(cat_name,cat_desc,cat_image)
				 VALUES('$this->cat_name','$this->cat_desc','$this->cat_image')";
		$this->performQuery($query);	
	}

	public function readAll(){
		$query="SELECT * FROM category";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	public function readById($id){
		$query  = "SELECT * FROM category WHERE cat_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}
	public function readName(){
		$query  = "SELECT * FROM category ";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}
	public function update($id)
	{
		if(empty($this->cat_image)) {

	$query = "UPDATE category SET   cat_name    ='$this->cat_name',
								   cat_desc   ='$this->cat_desc'
								   WHERE cat_id = $id";
								   $this->performQuery($query);
								}else{
								$query = "UPDATE category SET  
									cat_name    ='$this->cat_name',
									cat_desc   ='$this->cat_desc',
									cat_image='$this->cat_image'
								   
								   
								     WHERE cat_id = $id";
								   $this->performQuery($query);

								}
							}
	public function delete($id){

		//$id=$_GET['delete_id'];
		$query = "DELETE FROM category WHERE cat_id =$id ";
		$this->performQuery($query);
	
	}
}
?>
