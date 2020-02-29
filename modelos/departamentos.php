<?php
    //Incluimos Inicialmente la Conexión a la base de datos
   require_once '../config/conexion.php';

    class departamentos
    {

         //Implementamos el Constructor
        public function __construct()
        {
            
        }

        
        //Implementar métodos para listar los registros y mostrar en el select
        public function select()
        {
            $sql = "SELECT * FROM departamentos" ;
            
            return ejecutarConsulta($sql);
        }


        //Implementar métodos para listar los registros y mostrar en el select
        public function select1()
        {
            $sql = "SELECT * FROM depresidencia" ;
            
            return ejecutarConsulta($sql);
        }

         //Implementar métodos para listar los registros y mostrar en el select
        public function select2()
        {
            $sql = "SELECT * FROM deformacion" ;
            
            return ejecutarConsulta($sql);
        }

 //Implementar métodos para listar los registros y mostrar en el select
        public function select3()
        {
            $sql = "SELECT * FROM detrabajo" ;
            
            return ejecutarConsulta($sql);
        }

      
    }
?>