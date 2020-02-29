
$("#frmAcceso").on('submit',function(e)

{

  e.preventDefault();
  usuarioa=$("#usuarioa").val();
  contraseniaa=$("#contraseniaa").val();

$.post("../ajax/usuario.php?op=verificar",

	{"usuarioa":usuarioa ,"contraseniaa":contraseniaa},

	function(data)

{
	if (data!="null") {

		$(location).attr("href","datos.php")
	} else {

		bootbox.alert("UsuarioY/o contraseña es incorrectos ")
	}

     
});




})