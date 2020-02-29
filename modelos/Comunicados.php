<?php
    //Incluimos Inicialmente la Conexión a la base de datos
    require_once '../config/conexion.php';

    class comunicados
    {
        //Implementamos el Constructor
        public function __construct()
        {
            
        }
        
        //Implementar método para insertar registros
        public function insertar($archivost,$Titulo,$horat,$fecha )
        {
            $sql = "INSERT INTO comunicados (archivost,Titulo,horat,fecha, estado)
                    VALUES ( '$archivost','$Titulo','$horat','$fecha', '1')";
            
            return ejecutarConsulta($sql);
        }
        
        //Implementar método para editar registros
        public function editar($idcomunicados,$archivost,$Titulo,$horat,$fecha)
        {
         $sql = "UPDATE comunicados SET
        archivost='$archivost',
       Titulo ='$Titulo',
       horat ='$horat',
       fecha='$fecha'
       WHERE idcomunicados = '$idcomunicados'";
            
            return ejecutarConsulta($sql);
        }
        

 //ELIMINAR
 public function eliminar ($idcomunicados){

    $sql=" DELETE FROM comunicados WHERE idcomunicados='$idcomunicados' ";
    return ejecutarConsulta($sql);
 }
 
// para desactivar la tabla 

 public function desactivar($idcomunicados){

    $sql=" UPDATE comunicados SET estado='0' WHERE idcomunicados='$idcomunicados' ";
    return ejecutarConsulta($sql);


 }

 // para activar registros

 public function activar($idcomunicados){

    $sql=" UPDATE comunicados  SET estado='1' WHERE idcomunicados='$idcomunicados' ";
    return ejecutarConsulta($sql);


 }

        
        //Implementar método para mostrar los datos de un registro a modificar
        public function mostrar($idcomunicados)
        {
            $sql = "SELECT * FROM comunicados WHERE idcomunicados = '$idcomunicados'";
            
            return ejecutarConsultaSimpleFila($sql);
        }

   public function listar()
   {
    $sql="SELECT * FROM comunicados  ";
    return ejecutarConsulta($sql);
   }
        
        
    }
?>