//$(document).ready(function myFunction(){
   /* $(".remove-message").click(function(){
        $(this).closest('.card').remove();
    });*/



  
/*});
});*/

/*--------------------search from DB2 --------------------------------------*/
function showUser(str) {
  
  var xhttp;  
  if (str == "") {
    document.getElementById("result").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("result").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "../php/search-php.php?q="+str, true);
  xhttp.send();
}
/*-------------------search from DB2--------------------------------------*/








/*----------CONFIRM FOR DELEETING-----------------------------------------*/
 function confirmFunc()
	   {
	
         if(confirm("Are you sure you want to delete this user?")){ 
		  deleteUser();
		}
	   }
/*----------CONFIRM FOR DELEETING-----------------------------------------*/



/*-------------------delete from DB---------------------------------------*/

	

 function deleteUser(){
 var xhttp;  
  const str=document.getElementById("fordelete").innerText;
  if (str == "") {
    document.getElementById("result").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		alert("user Deleted!");
      document.getElementById("result").innerHTML = "";
    }
  };
  xhttp.open("GET", "../php/delete-user.php?q="+str, true);
  xhttp.send();
    }
	

/*-------------------delete from DB---------------------------------------*/



/*------------------- show contact massages----------------------*/


function showcontact() {
  
  var xhttp;  
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("cont").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "../php/show-contact.php", true);
  xhttp.send();
}
window.onload=showcontact();

 
/*------------------- show contact massages----------------------*/

/*------------------- delete massage from DB---------------------*/
function confirmDelMassage()
	   {
	
         if(confirm("Are you sure you want to delete this massage?")){ 
		  deleteMassage();
		}
	   }
	   
 function deleteMassage(){
 var xhttp;  
  const str=document.getElementById("delMassage").value;
  if (str == "") {
    document.getElementById("result").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		alert("Massage Deleted!");
		//document.getElementById("cardid").innerHTML="";
		var elem = document.getElementById('cardid');
      elem.parentNode.removeChild(elem);
    }
  };
  xhttp.open("GET", "../php/delete-massage.php?q="+str, true);
  xhttp.send();
    }
/*------------------- delete massage from DB---------------------*/
