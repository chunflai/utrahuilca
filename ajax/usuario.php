<?php 
session_start();
require_once "../modelos/usuario.php";

$Usuario=new Usuario();

$idUsuario=isset($_POST["idUsuario"])? limpiarCadena($_POST["idUsuario"]):"";
$idPerfil=isset($_POST["idPerfil"])? limpiarCadena($_POST["idPerfil"]):"";
$idArea=isset($_POST["idArea"])? limpiarCadena($_POST["idArea"]):"";
$registro=isset($_POST["registro"])? limpiarCadena($_POST["registro"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$usuario=isset($_POST["usuario"])? limpiarCadena($_POST["usuario"]):"";
$contrasenia=isset($_POST["contrasenia"])? limpiarCadena($_POST["contrasenia"]):"";
$imagen=isset($_POST["imagen"])? limpiarCadena($_POST["imagen"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':

		if (!file_exists($_FILES['imagen']['tmp_name']) || !is_uploaded_file($_FILES['imagen']['tmp_name']))
		{
			$imagen=$_POST["imagenactual"];
		}
		else 
		{
			$ext = explode(".", $_FILES["imagen"]["name"]);
			if ($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png")
			{
				$imagen = round(microtime(true)) . '.' . end($ext);
				move_uploaded_file($_FILES["imagen"]["tmp_name"], "../usuarios/" . $imagen);
			}
		}
		// hash clave 
$contraseniahash=hash("SHA256", $contrasenia);

		if (empty($idUsuario)){
			$rspta=$Usuario->insertar($idPerfil,$idArea,$registro,$nombre,$usuario,$contraseniahash,$imagen,$_POST['permiso']);
			echo $rspta ? "Usuario registrado" : "Usuario no se pudo registrar";
		}
		else {
			$rspta=$Usuario->editar($idUsuario,$idPerfil,$idArea,$registro,$nombre,$usuario,$contraseniahash,$imagen,$_POST['permiso']);
			echo $rspta ? "Usuario actualizado" : "Usuario no se pudo actualizar";
		}
	break;

	case 'eliminar':
		$rspta=$Usuario->eliminar($idUsuario);
 		echo $rspta ? "Usuario eliminado" : "Usuario no se puede eliminar";
	break;

	case 'desactivar':
		$rspta=$Usuario->desactivar($idUsuario);
 		echo $rspta ? "Usuario Desactivado" : "Usuario no se puede desactivar";
	break;

	case 'activar':
		$rspta=$Usuario->activar($idUsuario);
 		echo $rspta ? "Usuario activado" : "Usuario no se puede activar";
	break;

	case 'mostrar':
		$rspta=$Usuario->mostrar($idUsuario);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$Usuario->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->condicion)?'<button class="btn btn-danger" onclick="eliminar('.$reg->idUsuario.')"><i class="fa fa-trash"></i></button>'.
 				'<button class="btn btn-warning" onclick="mostrar('.$reg->idUsuario.')"><i class="fa fa-pencil"></i></button>'.
 				     
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idUsuario.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-danger" onclick="eliminar('.$reg->idUsuario.')"><i class="fa fa-trash"></i></button>'.

 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idUsuario.')"><i class="fa fa-pencil"></i></button>'.


 					' <button class="btn btn-primary" onclick="activar('.$reg->idUsuario.')"><i class="fa fa-check"></i></button>',

 			    "1"=>$reg->perfil,
 				"2"=>$reg->area,
 				"3"=>$reg->registro,
 				"4"=>$reg->nombre,
 				"5"=>$reg->usuario,
 				"6"=>$reg->contrasenia,
 				"7"=>"<img src='../usuarios/".$reg->imagen."' height='50px' width='50px' >",
 				"8"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
 				'<span class="label bg-red">Desactivado</span>'
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;


	case "selectperfil":
		require_once "../modelos/perfil.php";
		$Perfil = new Perfil();

		$rspta = $Perfil->select();

		while ($reg = $rspta->fetch_object())
				{
					echo '<option value=' . $reg->idPerfil . '>' . $reg->perfilUsuario . '</option>';
				}
	break;
	

	case "selectarea":
		require_once "../modelos/area.php";
		$Area = new Area();

		$rspta = $Area->select();

		while ($reg = $rspta->fetch_object())
				{
					echo '<option value=' . $reg->idArea . '>' . $reg->nombreArea . '</option>';
				}
	break;


	case "permiso":
		require_once "../modelos/permiso.php";
		$permiso = new Permiso();
		$rspta = $permiso->listar();

		//obtener los permisos asignados al usuario 
		$id=$_GET['id'];
		$marcados= $Usuario->listarmarcados($id);
		$valores=array();

		//almacenar permisos en el array 
		while ($per =$marcados->fetch_object()) {
			array_push($valores, $per->idpermiso);	
		}        
        //mostramos la lista de los permisos  en la vista  si estan marca o no estan marca
		while ($reg = $rspta->fetch_object())
				{
                   $sw=in_array($reg->idpermiso,$valores)?'checked':'';
					echo  '<li> <input  type="checkbox"  '.$sw. '  name="permiso[]" value="'.$reg->idpermiso.'">'.$reg->nombre.'</li>';
				}
	break;


	case 'verificar' :

	$usuarioa=$_POST['usuarioa'];
	$contraseniaa=$_POST['contraseniaa'];

	//hash sha256 en la contraseña 

	$contraseniahash=hash("SHA256", $contraseniaa);

	$rspta=$Usuario->verificar($usuarioa,$contraseniahash);

	$fetch=$rspta->fetch_object();

	if (isset($fetch))
	 {

       $_SESSION['idUsuario']=$fetch->idUsuario;
       $_SESSION['idperfil']=$fetch->idPerfil;
       $_SESSION['idArea']=$fetch->idArea;
       $_SESSION['nombre']=$fetch->nombre;
       $_SESSION['imagen']=$fetch->imagen;
       $_SESSION['usuario']=$fetch->usuario;

       $marcados =$Usuario->listarmarcados($fetch->idUsuario);  
// declaramos  el array  para almacenar todos  los permisos  marcad...
       $valores=array();
       while ($per =$marcados->fetch_object())
        {
       array_push($valores, $per->idpermiso);
       }
       in_array(1,$valores)?$_SESSION['admin']=1:$_SESSION['admin']=0;
       in_array(2,$valores)?$_SESSION['Talento Humano']=1:$_SESSION['Talento Humano']=0;
       in_array(3,$valores)?$_SESSION['herramientas mantenimiento']=1:$_SESSION['herramientas mantenimiento']=0;

	}

	echo json_encode($fetch);

	break;


	case 'salir':

	//limpiar las variables de sesion

	session_unset();

	// destruimos la sesion

	session_destroy();

	// redirecionar al login

	header("Location: ../index.php");
		
		break;
	
}
?>