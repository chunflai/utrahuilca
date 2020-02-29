<?php
    //Incluimos Inicialmente la Conexión a la base de datos
  require_once '../config/conexion.php';

    class escolaridad
    {
        //Implementamos el Constructor
        public function __construct()
        {
            
        }
        
        //Implementar método para insertar registros
        public function insertar($nombreEsc)
        {
            $sql = "INSERT INTO escolaridad (nombreEsc, estado)
                    VALUES ( '$nombreEsc', '1')";
            
            return ejecutarConsulta($sql);
        }
        
        //Implementar método para editar registros
        public function editar($idescolaridad,$nombreEsc)
        {
            $sql = "UPDATE escolaridad SET
            nombreEsc = '$nombreEsc'
          WHERE idescolaridad = '$idescolaridad'";
            
            return ejecutarConsulta($sql);
        }
        
 public function eliminar ($idescolaridad)
 {
    $sql=" DELETE FROM escolaridad WHERE idescolaridad='$idescolaridad'";
    return ejecutarConsulta($sql);
 }


// para desactivar la tabla 

 public function desactivar($idescolaridad){

    $sql=" UPDATE escolaridad SET estado='0' WHERE idescolaridad='$idescolaridad' ";
    return ejecutarConsulta($sql);


 }

 // para activar registros

 public function activar($idescolaridad){

    $sql=" UPDATE escolaridad  SET estado='1' WHERE idescolaridad='$idescolaridad' ";
    return ejecutarConsulta($sql);


 }

        
        //Implementar método para mostrar los datos de un registro a modificar
        public function mostrar($idescolaridad)
        {
            $sql = "SELECT * FROM escolaridad WHERE idescolaridad = '$idescolaridad'";
            
            return ejecutarConsultaSimpleFila($sql);
        }
        
        //Implementar métodos para listar los registros
        public function listar()
        {
            $sql = " SELECT * FROM escolaridad";
            
            return ejecutarConsulta($sql);
        }

        //Implementar métodos para listar los registros y mostrar en el select
        public function select()
        {
            $sql = "SELECT * FROM escolaridad WHERE estado = 1" ;
            
            return ejecutarConsulta($sql);
        }
    }
?>