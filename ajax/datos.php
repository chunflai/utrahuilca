<?php 
require_once "../modelos/datos.php";

$Datos=new Datos();

$iddatos=isset($_POST["iddatos"])? limpiarCadena($_POST["iddatos"]):"";

$idvacante=isset($_POST["idvacante"])? limpiarCadena($_POST["idvacante"]):"";
$idDepartamentosNacimiento=isset($_POST["idDepartamentosNacimiento"])? limpiarCadena($_POST["idDepartamentosNacimiento"]):"";
$idciudadesNacimiento=isset($_POST["idciudadesNacimiento"])? limpiarCadena($_POST["idciudadesNacimiento"]):"";
$idescolaridad=isset($_POST["idescolaridad"])? limpiarCadena($_POST["idescolaridad"]):"";
$idtitulacion=isset($_POST["idtitulacion"])? limpiarCadena($_POST["idtitulacion"]):"";
$idDepartamentoResidencia=isset($_POST["idDepartamentoResidencia"])? limpiarCadena($_POST["idDepartamentoResidencia"]):"";
$idCiudadesResidencia=isset($_POST["idCiudadesResidencia"])? limpiarCadena($_POST["idCiudadesResidencia"]):"";
$idDeparmentoFormacion=isset($_POST["idDeparmentoFormacion"])? limpiarCadena($_POST["idDeparmentoFormacion"]):"";
$idciudadFormacion=isset($_POST["idciudadFormacion"])? limpiarCadena($_POST["idciudadFormacion"]):"";
$idDepartamentoTrabajo=isset($_POST["idDepartamentoTrabajo"])? limpiarCadena($_POST["idDepartamentoTrabajo"]):"";
$idCiudadTrabajo=isset($_POST["idCiudadTrabajo"])? limpiarCadena($_POST["idCiudadTrabajo"]):"";
$politicas_Aceptacion=isset($_POST["politicas_Aceptacion"])? limpiarCadena($_POST["politicas_Aceptacion"]):"";
$Nombres=isset($_POST["Nombres"])? limpiarCadena($_POST["Nombres"]):"";
$Apellidos=isset($_POST["Apellidos"])? limpiarCadena($_POST["Apellidos"]):"";
$TipoIdentificacion=isset($_POST["TipoIdentificacion"])? limpiarCadena($_POST["TipoIdentificacion"]):"";
$NumeroIdentificacion=isset($_POST["NumeroIdentificacion"])? limpiarCadena($_POST["NumeroIdentificacion"]):"";
$genero=isset($_POST["genero"])? limpiarCadena($_POST["genero"]):"";
$estadoCivil=isset($_POST["estadoCivil"])? limpiarCadena($_POST["estadoCivil"]):"";
$FechaNacimiento=isset($_POST["FechaNacimiento"])? limpiarCadena($_POST["FechaNacimiento"]):"";
$Direccion=isset($_POST["Direccion"])? limpiarCadena($_POST["Direccion"]):"";
$barrio=isset($_POST["barrio"])? limpiarCadena($_POST["barrio"]):"";
$Telefono=isset($_POST["Telefono"])? limpiarCadena($_POST["Telefono"]):"";
$Celular=isset($_POST["Celular"])? limpiarCadena($_POST["Celular"]):"";
$CorreoElectronico=isset($_POST["CorreoElectronico"])? limpiarCadena($_POST["CorreoElectronico"]):"";
$estadoEstudio=isset($_POST["estadoEstudio"])? limpiarCadena($_POST["estadoEstudio"]):"";
$FechaInicio=isset($_POST["FechaInicio"])? limpiarCadena($_POST["FechaInicio"]):"";
$FechaFin=isset($_POST["FechaFin"])? limpiarCadena($_POST["FechaFin"]):"";
$TituloOtorgado=isset($_POST["TituloOtorgado"])? limpiarCadena($_POST["TituloOtorgado"]):"";
$NombreInstitucion=isset($_POST["NombreInstitucion"])? limpiarCadena($_POST["NombreInstitucion"]):"";
$cursoNombTitulo=isset($_POST["cursoNombTitulo"])? limpiarCadena($_POST["cursoNombTitulo"]):"";
$NomIntitu=isset($_POST["NomIntitu"])? limpiarCadena($_POST["NomIntitu"]):"";
$fechainc=isset($_POST["fechainc"])? limpiarCadena($_POST["fechainc"]):"";
$fechafi=isset($_POST["fechafi"])? limpiarCadena($_POST["fechafi"]):"";
$Empresa=isset($_POST["Empresa"])? limpiarCadena($_POST["Empresa"]):"";
$FechaIni=isset($_POST["FechaIni"])? limpiarCadena($_POST["FechaIni"]):"";
$Telefo=isset($_POST["Telefo"])? limpiarCadena($_POST["Telefo"]):"";
$EstadoTrabajo=isset($_POST["EstadoTrabajo"])? limpiarCadena($_POST["EstadoTrabajo"]):"";
$FechaFinalizacion=isset($_POST["FechaFinalizacion"])? limpiarCadena($_POST["FechaFinalizacion"]):"";
$jefeInmediato=isset($_POST["jefeInmediato"])? limpiarCadena($_POST["jefeInmediato"]):"";
$NombreCargo=isset($_POST["NombreCargo"])? limpiarCadena($_POST["NombreCargo"]):"";
$FuncionesPrincipales=isset($_POST["FuncionesPrincipales"])? limpiarCadena($_POST["FuncionesPrincipales"]):"";
$empresa2=isset($_POST["empresa2"])? limpiarCadena($_POST["empresa2"]):"";
$jefeInmediato2=isset($_POST["jefeInmediato2"])? limpiarCadena($_POST["jefeInmediato2"]):"";
$fechaini2=isset($_POST["fechaini2"])? limpiarCadena($_POST["fechaini2"]):"";
$fechater2=isset($_POST["fechater2"])? limpiarCadena($_POST["fechater2"]):"";
$telefon2=isset($_POST["telefon2"])? limpiarCadena($_POST["telefon2"]):"";
$FuncionesPrin2=isset($_POST["FuncionesPrin2"])? limpiarCadena($_POST["FuncionesPrin2"]):"";
$nombrecargo2=isset($_POST["nombrecargo2"])? limpiarCadena($_POST["nombrecargo2"]):"";
$NombreFa=isset($_POST["NombreFa"])? limpiarCadena($_POST["NombreFa"]):"";
$TelefonoFa=isset($_POST["TelefonoFa"])? limpiarCadena($_POST["TelefonoFa"]):"";
$celufa=isset($_POST["celufa"])? limpiarCadena($_POST["celufa"]):"";
$Parentesco=isset($_POST["Parentesco"])? limpiarCadena($_POST["Parentesco"]):"";
$NombrePersonal1=isset($_POST["NombrePersonal1"])? limpiarCadena($_POST["NombrePersonal1"]):"";
$Telefono1=isset($_POST["Telefono1"])? limpiarCadena($_POST["Telefono1"]):"";
$Celul=isset($_POST["Celul"])? limpiarCadena($_POST["Celul"]):"";
$NombrePersonal2=isset($_POST["NombrePersonal2"])? limpiarCadena($_POST["NombrePersonal2"]):"";
$Telefono2=isset($_POST["Telefono2"])? limpiarCadena($_POST["Telefono2"]):"";
$cel=isset($_POST["cel"])? limpiarCadena($_POST["cel"]):"";





switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($iddatos)){
			$rspta=$Datos->insertar($idvacante,$idDepartamentosNacimiento,$idciudadesNacimiento,$idescolaridad,$idtitulacion,$idDepartamentoResidencia,$idCiudadesResidencia,$idDeparmentoFormacion,$idciudadFormacion,$idDepartamentoTrabajo,$idCiudadTrabajo,$politicas_Aceptacion,$Nombres,$Apellidos,$TipoIdentificacion,$NumeroIdentificacion,$genero,$estadoCivil,$FechaNacimiento,$Direccion,$barrio,$Telefono,$Celular,$CorreoElectronico,$estadoEstudio,$FechaInicio,$FechaFin,$TituloOtorgado,$NombreInstitucion,$cursoNombTitulo,$NomIntitu,$fechainc,$fechafi,$Empresa,$FechaIni,$Telefo,$EstadoTrabajo,$jefeInmediato,$NombreCargo,$FuncionesPrincipales,$empresa2,$jefeInmediato2,$fechaini2,$fechater2,$telefon2,$FuncionesPrin2,$nombrecargo2,$NombreFa,$TelefonoFa,$celufa,$Parentesco,$NombrePersonal1,$Telefono1,$Celul,$NombrePersonal2,$Telefono2,$cel);
			echo $rspta ? "Gracias Su Registro Fue exitoso si quedas seleccionado mas adelante nos pondremos en contacto!!!!!!!!!!!!!!!! " : "Datos no se pudo registrar";
		}
		else {
			$rspta=$Datos->editar($iddatos,$idvacante,$idDepartamentosNacimiento,$idciudadesNacimiento,$idescolaridad,$idtitulacion,$idDepartamentoResidencia,$idCiudadesResidencia,$idDeparmentoFormacion,$idciudadFormacion,$idDepartamentoTrabajo,$idCiudadTrabajo,$politicas_Aceptacion,$Nombres,$Apellidos,$TipoIdentificacion,$NumeroIdentificacion,$genero,$estadoCivil,$FechaNacimiento,$Direccion,$barrio,$Telefono,$Celular,$CorreoElectronico,$estadoEstudio,$FechaInicio,$FechaFin,$TituloOtorgado,$NombreInstitucion,$cursoNombTitulo,$NomIntitu,$fechainc,$fechafi,$Empresa,$FechaIni,$Telefo,$EstadoTrabajo,$jefeInmediato,$NombreCargo,$FuncionesPrincipales,$empresa2,$jefeInmediato2,$fechaini2,$fechater2,$telefon2,$FuncionesPrin2,$nombrecargo2,$NombreFa,$TelefonoFa,$celufa,$Parentesco,$NombrePersonal1,$Telefono1,$Celul,$NombrePersonal2,$Telefono2,$cel);
			echo $rspta ? "Datos actualizada" : "Datos no se pudo actualizar";
		}
	break;

	case 'eliminar':
		$rspta=$Datos->eliminar($iddatos);
 		echo $rspta ? "Artículo eliminado" : "Artículo no se puede eliminar";
	break;

	case 'desactivar':
		$rspta=$Datos->desactivar($iddatos);
 		echo $rspta ? "Datos Desactivada" : "Datos no se puede desactivar";
 		break;


	case 'activar':
		$rspta=$Datos->activar($iddatos);
 		echo $rspta ? "Datos activada" : "Datos no se puede activar";
 		break;


	case 'mostrar':
		$rspta=$Datos->mostrar($iddatos);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
 		break;


	case 'listar':
		$rspta=$Datos->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->estado)?'<button class="btn btn-danger" onclick="eliminar('.$reg->iddatos.')"><i class="fa fa-trash"></i></button>'.
 				    '<button class="btn btn-warning" onclick="mostrar('.$reg->iddatos.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->iddatos.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-danger" onclick="eliminar('.$reg->iddatos.')"><i class="fa fa-trash"></i></button>'.
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->iddatos.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->iddatos.')"><i class="fa fa-check"></i></button>',


 				"1"=>$reg->idvacante,
 				"2"=>$reg->politicas_Aceptacion,
 				"3"=>$reg->Nombres,
 				"4"=>$reg->Apellidos,
 				"5"=>$reg->TipoIdentificacion,
 				"6"=>$reg->NumeroIdentificacion,
 				"7"=>$reg->genero,
 				"8"=>$reg->estadoCivil,
 				"9"=>$reg->FechaNacimiento,
 				"10"=>$reg->idDepartamentosNacimiento,
                "11"=>$reg->idciudadesNacimiento,
 				"12"=>$reg->Direccion,
 				"13"=>$reg->barrio,
 				"14"=>$reg->idDepartamentoResidencia,
                "15"=>$reg->idCiudadesResidencia, 
 				"16"=>$reg->Telefono,
 				"17"=>$reg->Celular,
 				"18"=>$reg->CorreoElectronico,                
                "19"=>$reg->idescolaridad,
                "20"=>$reg->idtitulacion,
 				"21"=>$reg->estadoEstudio,
 				"22"=>$reg->FechaInicio,
 				"23"=>$reg->FechaFin,
 				"24"=>$reg->TituloOtorgado,
 				"25"=>$reg->NombreInstitucion,
 			    "26"=>$reg->idDeparmentoFormacion,
                "27"=>$reg->idciudadFormacion,
 				"28"=>$reg->cursoNombTitulo,
 				"29"=>$reg->NomIntitu,
 				"30"=>$reg->fechainc,
 				"31"=>$reg->fechafi,
 				"32"=>$reg->Empresa,
                "33"=>$reg->FechaIni,
 				"34"=>$reg->Telefo,
 				"35"=>$reg->EstadoTrabajo,
 				"36"=>$reg->FechaFinalizacion,
 				"37"=>$reg->idDepartamentoTrabajo,
                "38"=>$reg->idCiudadTrabajo,
 				"39"=>$reg->jefeInmediato,
 				"40"=>$reg->NombreCargo,
 				"41"=>$reg->FuncionesPrincipales,
 				"42"=>$reg->empresa2,
 				"43"=>$reg->jefeInmediato2,
 				"44"=>$reg->fechaini2,
 				"45"=>$reg->fechater2,
 				"46"=>$reg->telefon2,			
 				"47"=>$reg->FuncionesPrin2,
 				"48"=>$reg->nombrecargo2,
 				"49"=>$reg->NombreFa,
 				"50"=>$reg->TelefonoFa,
 				"51"=>$reg->celufa,
 				"52"=>$reg->Parentesco,
 				"53"=>$reg->NombrePersonal1,
 				"54"=>$reg->Telefono1,				
 				"55"=>$reg->Celul,
 				"56"=>$reg->NombrePersonal2,
 				"57"=>$reg->Telefono2,
 				"58"=>$reg->cel,
 				"59"=>($reg->estado)?'<span class="label bg-green">Activado</span>':
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

	//Case para listar en el Select
        case 'selectDepartamentosNacimiento':
            require_once "../modelos/departamentos.php";
            $departamentos = new departamentos();
            $rspta = $departamentos->select();
            $html = "<option value=''>---SELECCIONE---</option>";
            while($reg = $rspta->fetch_object())
            {
                $html .= '<option value='.$reg->idDepartamentosNacimiento.'>'. $reg->nombre.'</option>';
            }

            echo $html;
        break;

          //Case para listar en el Select
        case 'SelectCiudadesNacimiento':
            require_once "../modelos/ciudades.php";
            $idDepartamentosR = $_POST['idDepartamentosNacimiento'];
            //Casu
            $ciudades = new ciudades();
            $rspta = $ciudades->select($idDepartamentosR);
            $html = "<option value=''>---SELECCIONE---</option>";
            while($reg = $rspta->fetch_assoc())
            {
                $html .= '<option value='.$reg[ idciudadesNacimiento].'>'.$reg[nombreC].'</option>';
            }
            
            echo $html;
        break;


         //Case para listar en el Select
        case 'selectDepartamentosResidencia':

            require_once "../modelos/departamentos.php";
            $departamentos = new departamentos();
            $rspta = $departamentos->select1();
            $html = "<option value=''>---SELECCIONE---</option>";

            while($reg = $rspta->fetch_object())
            {
                $html .= '<option value='.$reg->idDepartamentoResidencia.'>'. $reg->nombre.'</option>';
            }

            echo $html;
        break;


        //Case para listar en el Select
        case 'SelectCiudadesResidencia':
            require_once "../modelos/ciudades.php";
            $idDepartamentosR = $_POST['idDepartamentoResidencia'];
            //Casu
            $ciudades = new ciudades();
            $rspta = $ciudades->select1($idDepartamentosR);
            $html = "<option value=''>---SELECCIONE---</option>";
            while($reg = $rspta->fetch_assoc())
            {
                $html .= '<option value='.$reg[ idCiudadesResidencia].'>'.$reg[nombreC].'</option>';
            }
            
            echo $html;
        break;


         //Case para listar en el Select
        case 'selectDepartamentosFormacion':
            require_once "../modelos/departamentos.php";
            $departamentos = new departamentos();
            $rspta = $departamentos->select2();
            $html = "<option value=''>---SELECCIONE---</option>";
            while($reg = $rspta->fetch_object())
            {

             $html .= '<option value='.$reg->idDeparmentoFormacion.'>'. $reg->nombre.'</option>';

            }

            echo $html;
        break;

          //Case para listar en el Select
        case 'SelectCiudadesFormacion':
            require_once "../modelos/ciudades.php";
            $idDepartamentosR = $_POST['idDeparmentoFormacion'];
            //Casu
            $ciudades = new ciudades();
            $rspta = $ciudades->select2($idDepartamentosR);
            $html = "<option value=''>---SELECCIONE---</option>";

            while($reg = $rspta->fetch_assoc())
            {
                $html .= '<option value='.$reg[ idciudadFormacion].'>'.$reg[nombreC].'</option>';
            }
            
            echo $html;
        break;
        
        //Case para listar en el Select
        case 'selectDepartamentosTrabajo':
            require_once "../modelos/departamentos.php";

            $departamentos = new departamentos();

            $rspta = $departamentos->select3();

            $html = "<option value=''>---SELECCIONE---</option>";

            while($reg = $rspta->fetch_object())
            {
                $html .= '<option value='.$reg->idDepartamentoTrabajo.'>'. $reg->nombre.'</option>';
            }

            echo $html;
        break;

      //Case para listar en el Select
        case 'SelectCiudadesTrabajo':
            require_once "../modelos/ciudades.php";

            $idDepartamentosR = $_POST['idDepartamentoTrabajo'];

            //Casu
            $ciudades = new ciudades();
            $rspta = $ciudades->select3($idDepartamentosR);
            
            $html = "<option value=''>---SELECCIONE---</option>";
            
            while($reg = $rspta->fetch_assoc())
            {
                $html .= '<option value='.$reg[idCiudadTrabajo].'>'.$reg[nombreC].'</option>';
            }
            
            echo $html;
        break;

        //Case para listar en el Select
        case 'selectVacantes':
            require_once "../modelos/vacante.php";

            $vacante = new vacante();
            $rspta = $vacante->select();
            $html = "<option value=''>---SELECCIONE---</option>";
            while($reg = $rspta->fetch_object())
            {
                $html .= '<option value='.$reg->idvacante.'>'. $reg->nombreV.'</option>';
            }
            echo $html;
        break;

        //Case para listar en el Select
        case 'selectescolaridad':
            require_once "../modelos/escolaridad.php";
            $escolaridad = new escolaridad();
            $rspta = $escolaridad->select();
            $html = "<option value=''>---SELECCIONE---</option>";

            while($reg = $rspta->fetch_object())
            {
                $html .= '<option value='.$reg->idescolaridad.'>'. $reg->nombreEsc.'</option>';
            }

            echo $html;
        break;
        

     case 'SelectTitulacion':
            require_once "../modelos/titulacion.php";
            $idescolaridadR = $_POST['idescolaridad'];
            //Casu
            $titulacion = new titulacion();
            $rspta = $titulacion->select($idescolaridadR);
            $html = "<option value=''>---SELECCIONE---</option>";
            
            while($reg = $rspta->fetch_assoc())
            {
                $html .= '<option value='.$reg[idtitulacion].'>'.$reg[nombreTitu].'</option>';
            }
            
            echo $html;
        break;
}
?>