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
	public function update($id)
	{

	$query = "UPDATE charity SET   charity_name    ='$this->charity_name',
								   charity_email   ='$this->charity_email',
								   charity_password='$this->charity_password',
								   charity_phone  ='$this->charity_phone'
								   
								   WHERE charity_id = $id";
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
	public function readById($id){
		$query  = "SELECT * FROM supporter WHERE supporter_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}

}


class admin extends dbconnection
{
	public $admin_id;
	public $admin_email;
	public $admin_password;

	
	public function login($email,$pass)
    {
    	$query="SELECT * from admin
                where admin_email='$email' AND admin_password='$pass' ";
                $result=$this->performQuery($query);
                return $this->fetchAll($result);
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
	public $charity_id ;


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
}
?>
