<?php
    //Incluimos Inicialmente la Conexión a la base de datos
    require_once '../config/conexion.php';

    class formatos
    {
        //Implementamos el Constructor
        public function __construct()
        {  }
        
        //Implementar método para insertar registros
        public function insertar($archivost,$imagent,$descripccion,$horat,$fecha )
        {
            $sql = "INSERT INTO formatos (archivost,imagent,descripccion,horat,fecha, estado)
                    VALUES ( '$archivost','$imagent','$descripccion','$horat','$fecha', '1')";
            return ejecutarConsulta($sql);
        }
        
        //Implementar método para editar registros
        public function editar($idformatos,$archivost,$imagent,$descripccion,$horat,$fecha)
        {
         $sql = "UPDATE formatos SET
        archivost='$archivost',
       imagent ='$imagent',
       descripccion='$descripccion',
       horat ='$horat',
       fecha='$fecha'
       WHERE idformatos = '$idformatos'"; 
            return ejecutarConsulta($sql);
        }
        
 //ELIMINAR
 public function eliminar ($idformatos){

    $sql=" DELETE FROM formatos WHERE idformatos='$idformatos' ";
    return ejecutarConsulta($sql);
 }
 
// para desactivar la tabla 

 public function desactivar($idformatos){

    $sql=" UPDATE formatos SET estado='0' WHERE idformatos='$idformatos' ";
    return ejecutarConsulta($sql);


 }

 // para activar registros

 public function activar($idformatos){

    $sql=" UPDATE formatos  SET estado='1' WHERE idformatos='$idformatos' ";
    return ejecutarConsulta($sql);


 }

        
        //Implementar método para mostrar los datos de un registro a modificar
        public function mostrar($idformatos)
        {
            $sql = "SELECT * FROM formatos WHERE idformatos = '$idformatos'";
            
            return ejecutarConsultaSimpleFila($sql);
        }

   public function listar()
   {
    $sql="SELECT * FROM formatos  ";
    return ejecutarConsulta($sql);
   }
        
        
    }
?>