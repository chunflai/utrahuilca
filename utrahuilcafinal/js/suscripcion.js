function suscribir() {
  var xhttp = new XMLHttpRequest();
  var email=document.getElementById("nlemail").value;
  xhttp.onreadystatechange = function () {
  	if(xhttp.readyState==1){
  		document.getElementById("mensaje-sub").innerHTML = "cargando...";
  	}
    if (xhttp.readyState == 4 && xhttp.status == 200) {
     document.getElementById("mensaje-sub").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "insertarcorreo.php?nlemail="+email, true);
  xhttp.send();
}

