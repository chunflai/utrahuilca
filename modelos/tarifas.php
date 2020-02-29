<?php
    //Incluimos Inicialmente la Conexión a la base de datos
    require_once '../config/conexion.php';

    class tarifas
    {
        //Implementamos el Constructor
        public function __construct()
        {
            
        }
        
        //Implementar método para insertar registros
        public function insertar($archivost,$imagent,$horat,$fecha )
        {
            $sql = "INSERT INTO tarifas (archivost,imagent,horat,fecha, estado)
                    VALUES ( '$archivost','$imagent','$horat','$fecha', '1')";
            
            return ejecutarConsulta($sql);
        }
        
        //Implementar método para editar registros
        public function editar($idtarifas,$archivost,$imagent,$horat,$fecha)
        {
         $sql = "UPDATE tarifas SET
        archivost='$archivost',
       imagent ='$imagent',
       horat ='$horat',
       fecha='$fecha'
       WHERE idtarifas = '$idtarifas'";
            
            return ejecutarConsulta($sql);
        }
        

 //ELIMINAR
 public function eliminar ($idtarifas){

    $sql=" DELETE FROM tarifas WHERE idtarifas='$idtarifas' ";
    return ejecutarConsulta($sql);
 }
 
// para desactivar la tabla 

 public function desactivar($idtarifas){

    $sql=" UPDATE tarifas SET estado='0' WHERE idtarifas='$idtarifas' ";
    return ejecutarConsulta($sql);


 }

 // para activar registros

 public function activar($idtarifas){

    $sql=" UPDATE tarifas  SET estado='1' WHERE idtarifas='$idtarifas' ";
    return ejecutarConsulta($sql);


 }

        
        //Implementar método para mostrar los datos de un registro a modificar
        public function mostrar($idtarifas)
        {
            $sql = "SELECT * FROM tarifas WHERE idtarifas = '$idtarifas'";
            
            return ejecutarConsultaSimpleFila($sql);
        }

   public function listar()
   {
    $sql="SELECT * FROM tarifas  ";
    return ejecutarConsulta($sql);
   }
        
        
    }
?>