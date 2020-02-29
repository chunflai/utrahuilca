<?php 
    require_once "../modelos/departamentos.php";

    $departamentos = new departamentos();

    $idDepartamentos = isset($_POST["idDepartamentos"])? limpiarCadena($_POST["idDepartamentos"]):"";
    $nombre = isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
   

    switch ($_GET["op"]){
        //Guardar el registro de la departamentos
    	case 'guardaryeditar':
            if (empty($idDepartamentos))
            {
                $rspta = $departamentos->insertar($nombre);
                echo $rspta ? "departamentos registrada" : "departamentos no se pudo registrar";
            }
            else
            {
                $rspta = $departamentos->editar($idDepartamentos,$nombre);
                echo $rspta ? "departamentos actualizada" : "departamentos no se pudo actualizar";
            }
    	break;

        //Desactivar la departamentos
    	case 'desactivar':
            $rspta = $departamentos->desactivar($idDepartamentos);
            echo $rspta ? "departamentos Desactivada" : "departamentos no se puede desactivar";
    	break;

        //Activar la departamentos
    	case 'activar':
            $rspta = $departamentos->activar($idDepartamentos);
            echo $rspta ? "departamentos activada" : "departamentos no se puede activar";
    	break;

        //Mostrar las departamentos
    	case 'mostrar':
            $rspta = $departamentos->mostrar($idDepartamentos);
            //Codificar el resultado utilizando json
            echo json_encode($rspta);
    	break;

        //Listar las departamentos
    	case 'listar':
            $rspta = $departamentos->listar();
            //Vamos a declarar un array
            $data = Array();

            while($reg = $rspta->fetch_object())
                {
                    $data[] = array(
                            "0"=>($reg->estado)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idDepartamentos.')"><i class="fa fa-pencil"></i></button>'.
                                    ' <button class="btn btn-danger" onclick="desactivar('.$reg->idDepartamentos.')"><i class="fa fa-close"></i></button>':
                                    '<button class="btn btn-warning" onclick="mostrar('.$reg->idDepartamentos.')"><i class="fa fa-pencil"></i></button>'.
                                    ' <button class="btn btn-primary" onclick="activar('.$reg->idDepartamentos.')"><i class="fa fa-check"></i></button>',
                            "1"=>$reg->nombre,
                            "2"=>($reg->estado)?'<span class="label bg-green">Activado</span>':
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
    }
?>