/*-------------------------connect to posts.php-------------------------------*/
function showposts() {
  
  var xhttp;  
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("cont").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "../php/posts.php", true);
  xhttp.send();
}
window.onload=showposts();
/*-------------------------connect to posts.php-------------------------------*/
