function suscribir() {
  var xhttp = new XMLHttpRequest();
  var email=document.getElementById("nlemail").value;
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("mensaje-sub").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "suscribe.php?nlemail="+email, true);
  xhttp.send();
}