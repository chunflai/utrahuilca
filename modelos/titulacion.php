<?php
    //Incluimos Inicialmente la Conexión a la base de datos
    require_once '../config/conexion.php';

    class titulacion
    {
        //Implementamos el Constructor
        public function __construct()
        {
            
        }
        
        //Implementar método para insertar registros
        public function insertar($idescolaridad, $nombreTitu)
        {
            $sql = "INSERT INTO titulacion (idescolaridad,nombreTitu, estado)
                    VALUES ('$idescolaridad', '$nombreTitu', '1')";
            
            return ejecutarConsulta($sql);
        }
        
        //Implementar método para editar registros
        public function editar($idtitulacion,$idescolaridad, $nombreTitu)
        {
            $sql = "UPDATE titulacion SET idescolaridad = '$idescolaridad', nombreTitu = '$nombreTitu'
                    WHERE idtitulacion = '$idtitulacion'";
            
            return ejecutarConsulta($sql);
        }
        
        //Implementar método para eliminar registros
        public function desactivar($idtitulacion)
        {
            $sql = "UPDATE titulacion SET estado = '0'
                    WHERE idtitulacion = '$idtitulacion'";
            
            return ejecutarConsulta($sql);
        }
        
        //Implementar método para activar registros
        public function activar($idtitulacion)
        {
            $sql = "UPDATE titulacion SET estado = '1'
                    WHERE idtitulacion = '$idtitulacion'";
            
            return ejecutarConsulta($sql);
        }
        
        //Implementar método para mostrar los datos de un registro a modificar
        public function mostrar($idtitulacion)
        {
            $sql = "SELECT * FROM titulacion WHERE idtitulacion = '$idtitulacion'";
            
            return ejecutarConsultaSimpleFila($sql);
        }
        
        //Implementar métodos para listar los registros
        public function listar()
        {
            $sql = "SELECT c.*, a.nombreEsc	 AS idescolaridad
                    FROM titulacion AS c
                    INNER JOIN escolaridad AS a ON c.idescolaridad = a.idescolaridad";
            
            return ejecutarConsulta($sql);
        }

        //Implementar métodos para listar los registros y mostrar en el select
        public function select($idescolaridad)
        {
            $sql = "SELECT 
                        idtitulacion
                        , nombreTitu
                    FROM
                        titulacion
                    WHERE
                        idescolaridad = '$idescolaridad'
                    ORDER BY
                        nombreTitu";
            
            return ejecutarConsulta($sql);
        }
    }
?>