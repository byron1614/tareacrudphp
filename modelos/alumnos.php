<?php
require 'Conexion.php';

class alumnos extends Conexion{
    public $alum_id;
    public $alum_nombre;
    public $alum_apellido;
    public $alum_fecha_de_nacimiento;
    public $alum_telefono;
    public $alum_correo;
    

    public function __construct($args = [] )
    {
        $this->alum_id = $args['alum_id'] ?? null;
        $this->alum_nombre = $args['alum_nombre'] ?? '';
        $this->alum_apellido = $args['alum_apellido'] ?? '';
        $this->alum_fecha_de_nacimiento = $args['alum_fecha_de_nacimiento'] ?? '';
        $this->alum_telefono = $args['alum_telefono'] ?? '';
        $this->alum_correo = $args['alum_correo'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO alumnos(alum_nombre, alum_apellido, alum_fecha_de_nacimiento, alum_telefono, alum_correo) values('$this->alum_nombre','$this->alum_apellido','$this->alum_fecha_de_nacimiento','$this->alum_telefono','$this->alum_correo')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}