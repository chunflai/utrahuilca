<?php
    //Incluimos Inicialmente la Conexión a la base de datos
    require_once '../config/conexion.php';

    class tasa
    {
        //Implementamos el Constructor
        public function __construct()
        {
            
        }
        
        //Implementar método para insertar registros
        public function insertar($archivost,$imagent,$horat,$fecha )
        {
            $sql = "INSERT INTO tasa (archivost,imagent,horat,fecha, estado)
                    VALUES ( '$archivost','$imagent','$horat','$fecha', '1')";
            
            return ejecutarConsulta($sql);
        }
        
        //Implementar método para editar registros
        public function editar($idtasa,$archivost,$imagent,$horat,$fecha)
        {
         $sql = "UPDATE tasa SET
        archivost='$archivost',
       imagent ='$imagent',
       horat ='$horat',
       fecha='$fecha'
       WHERE idtasa = '$idtasa'";
            
            return ejecutarConsulta($sql);
        }
        

 //ELIMINAR
 public function eliminar ($idtasa){

    $sql=" DELETE FROM tasa WHERE idtasa='$idtasa' ";
    return ejecutarConsulta($sql);
 }
 
// para desactivar la tabla 

 public function desactivar($idtasa){

    $sql=" UPDATE tasa SET estado='0' WHERE idtasa='$idtasa' ";
    return ejecutarConsulta($sql);


 }

 // para activar registros

 public function activar($idtasa){

    $sql=" UPDATE tasa  SET estado='1' WHERE idtasa='$idtasa' ";
    return ejecutarConsulta($sql);


 }

        
        //Implementar método para mostrar los datos de un registro a modificar
        public function mostrar($idtasa)
        {
            $sql = "SELECT * FROM tasa WHERE idtasa = '$idtasa'";
            
            return ejecutarConsultaSimpleFila($sql);
        }

   public function listar()
   {
    $sql="SELECT * FROM tasa  ";
    return ejecutarConsulta($sql);
   }
        
        
    }
?>