    $(document).ready(function(){
    
    
        /*--------- Post-------*/
        
        $("#flip").click(function(){
        $("#panel").slideToggle("slow");
      });

        /*--------- Post-------*/
		/*-----------add Post------------------*/
		$("#add").click(function(){ 
		const newheading= document.createElement('h3')
		const newParagraph = document.createElement('p')
		const newdiv = document.createElement('div')
		const newdatediv = document.createElement('div')
	    newheading.textContent=document.getElementById("title").value;
        newParagraph.textContent = document.getElementById("post").value;
		newParagraph.className="card-text";/*gives class for new Element*/
	    newheading.className="card-header";
		newdiv.className="card text-center";
		newdatediv.className="card-footer";
		document.querySelector('div').appendChild(newdiv);
        newdiv.appendChild(newheading);
	    newdiv.appendChild(newParagraph);
	    newdiv.appendChild(newdatediv);



	   });
	 /*-----------add Post------------------*/


    });
	/*---------postsDate js---------*/
	
	
   
 var dateString = "2016-08-25";//take the date of post from DB

    var d = new Date();
    var elems = document.getElementsByClassName("card-footer");
    for(var i = 0; i < elems.length; i++) {
         elems[i].innerHTML =  d.toDateString();
}

    


	/*---------postsDate js---------*/
/*-------------------- show Posts in profile from DB ------------------------*/	
function showPost(str) {
  
  var xhttp;  
  if (str == "") {
    document.getElementById("cont").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("cont").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "../php/user-posts.php?q="+str, true);
  xhttp.send();
}
window.onload=showPost(document.getElementById("uname").value);
/*-------------------- show Posts in profile from DB ------------------------*/	

	
	
	
   