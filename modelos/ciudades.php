<?php
    //Incluimos Inicialmente la Conexión a la base de datos
   require_once '../config/conexion.php';

    class ciudades
    {
        //Implementamos el Constructor
        public function __construct(){}

        
      
        //Implementar métodos para listar los registros y mostrar en el select
        public function select($idDepartamentosNacimiento)
        {
            $sql = "SELECT 
                        idciudadesNacimiento
                        , nombreC
                    FROM
                        ciudades
                    WHERE
                        idDepartamentosNacimiento = '$idDepartamentosNacimiento'
                    ORDER BY
                        nombreC";
            
            return ejecutarConsulta($sql);
        }


        //Implementar métodos para listar los registros y mostrar en el select
        public function select1($idDepartamentoResidencia)
        {
            $sql = "SELECT 
                        idCiudadesResidencia
                        , nombreC
                    FROM
                        ciudresidencia
                    WHERE
                        idDepartamentoResidencia = '$idDepartamentoResidencia'
                    ORDER BY
                        nombreC";
            
            return ejecutarConsulta($sql);
        }


        //Implementar métodos para listar los registros y mostrar en el select
        public function select2($idDeparmentoFormacion)
        {
            $sql = "SELECT 
                        idciudadFormacion
                        , nombreC
                    FROM
                        ciuformacion
                    WHERE
                        idDeparmentoFormacion = '$idDeparmentoFormacion'
                    ORDER BY
                        nombreC";
            
            return ejecutarConsulta($sql);
        }


        //Implementar métodos para listar los registros y mostrar en el select
        public function select3($idDepartamentoTrabajo)
        {
            $sql = "SELECT 
                        idCiudadTrabajo
                        , nombreC
                    FROM
                        ciutrabjabo
                    WHERE
                        idDepartamentoTrabajo = '$idDepartamentoTrabajo|'
                    ORDER BY
                        nombreC";
            
            return ejecutarConsulta($sql);
        }





    }
?>