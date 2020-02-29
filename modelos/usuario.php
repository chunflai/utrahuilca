<?php
// incluimos inicial mente la conecxion a la base de datos 
require_once '../config/conexion.php';

 Class Usuario
 {

 	//implementamos nuestro constrcutor
 public function __construct()
 	{

 	}

 	// insertar registros
 	public function insertar($idPerfil,$idArea,$registro,$nombre,$usuario,$contrasenia,$imagen,$permiso ){

 		$sql="INSERT INTO usuario(idPerfil,idArea,registro,nombre,usuario,contrasenia,imagen,condicion) VALUES('$idPerfil','$idArea','$registro','$nombre','$usuario','$contrasenia','$imagen','1' )";
 		
 		//return ejecutarConsulta($sql);

 		$idUsuarionew=ejecutarConsulta_retornarID($sql);
        
        $num_elementos=0;

        $sw=true;

        while ($num_elementos < count($permiso))
         {
         	$sql_detalle = "INSERT INTO usuario_permiso(idUsuario,idpermiso)VALUES('$idUsuarionew', '$permiso[$num_elementos]')";

         	ejecutarConsulta($sql_detalle) or $sw = false ;

         	$num_elementos=$num_elementos + 1;
        	
        }

        return $sw;

 	}




 	//editar registro de la tbla usuario

 public function editar($idUsuario,$idPerfil,$idArea,$registro,$nombre,$usuario,$contrasenia,$imagen,$permiso){
$sql="UPDATE  usuario SET idPerfil='$idPerfil',idArea='$idArea',registro='$registro',nombre='$nombre',usuario='$usuario' ,contrasenia='$contrasenia',imagen='$imagen'WHERE idUsuario='$idUsuario'";

   ejecutarConsulta($sql);



// eliminar todos los permisos  del usuarios para volverlos a registrar 
 $sqldel="DELETE FROM usuario_permiso WHERE idUsuario='$idUsuario'";
 ejecutarConsulta($sqldel);

$num_elementos=0;

        $sw=true;

        while ($num_elementos < count($permiso))
         {
                $sql_detalle = "INSERT INTO usuario_permiso(idUsuario,idpermiso)VALUES('$idUsuario', '$permiso[$num_elementos]')";

                ejecutarConsulta($sql_detalle) or $sw = false ;

                $num_elementos=$num_elementos + 1;
                
        }

        return $sw;
       


 }

 
public function eliminar ($idUsuario){

 	$sql=" DELETE FROM usuario WHERE idUsuario='$idUsuario' ";
 	return ejecutarConsulta($sql);


 }

// para desactivar la tabla 

 public function desactivar($idUsuario){

 	$sql=" UPDATE usuario SET condicion='0' WHERE idUsuario='$idUsuario' ";
 	return ejecutarConsulta($sql);


 }

 // para activar registros

 public function activar($idUsuario){

 	$sql=" UPDATE usuario SET condicion='1' WHERE idUsuario='$idUsuario' ";
 	return ejecutarConsulta($sql);


 }

 //mostrar 

 public function mostrar($idUsuario){

 	$sql="SELECT *  FROM usuario WHERE idUsuario='$idUsuario' ";
return ejecutarConsultaSimpleFila($sql);

 }

 // metodo para elistar registros 

 public function listar(){

 	$sql="SELECT  u.idUsuario,u.idPerfil,u.idArea,p.perfilUsuario AS perfil,a.nombreArea AS area ,u.registro,u.nombre,u.usuario,u.contrasenia,u.imagen,u.condicion  FROM usuario u INNER JOIN area a ON u.idArea=a.idArea INNER JOIN perfil p ON u.idPerfil=p.idPerfil ";
return ejecutarConsulta($sql);

 }


 // implementar un me todo para listar los permisos 


 public function listarmarcados($idUsuario)
{
 
 $sql =" SELECT * FROM usuario_permiso WHERE idUsuario='$idUsuario'";
return ejecutarConsulta($sql);


}


public function select()
	{
		$sql="SELECT * FROM usuario where condicion=1 ";
		return ejecutarConsulta($sql);		
	}


        //funcion verificar 

        public function verificar($usuario,$contrasenia)

        {
             
         $sql="SELECT idUsuario,idPerfil,idArea,registro,nombre,usuario,contrasenia,imagen,condicion FROM usuario WHERE usuario='$usuario' AND contrasenia='$contrasenia'AND condicion='1'";

         return ejecutarConsulta($sql);

        }
 


 }
?>