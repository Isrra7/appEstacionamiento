<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Isrra
 */
class Usuario{
    protected $id;
    protected $nombreCompleto;
    protected $correoElectronico;
    protected $numTelefonoFijo;
    protected $numTelefonoMovil;
    protected $area;
    protected $numTarjetaEstacionamiento;
    protected $registroEntrada;
    protected $registroSalida;
    
    function __construct() {
        
    }
    function getId() {
        return $this->id;
    }

    function getNombreCompleto() {
        return $this->nombreCompleto;
    }

    function getCorreoElectronico() {
        return $this->correoElectronico;
    }

    function getNumTelefonoFijo() {
        return $this->numTelefonoFijo;
    }

    function getNumTelefonoMovil() {
        return $this->numTelefonoMovil;
    }

    function getArea() {
        return $this->area;
    }

    function getNumTarjetaEstacionamiento() {
        return $this->numTarjetaEstacionamiento;
    }

    function getRegistroEntrada() {
        return $this->registroEntrada;
    }

    function getRegistroSalida() {
        return $this->registroSalida;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombreCompleto($nombreCompleto) {
        $this->nombreCompleto = $nombreCompleto;
    }

    function setCorreoElectronico($correoElectronico) {
        $this->correoElectronico = $correoElectronico;
    }

    function setNumTelefonoFijo($numTelefonoFijo) {
        $this->numTelefonoFijo = $numTelefonoFijo;
    }

    function setNumTelefonoMovil($numTelefonoMovil) {
        $this->numTelefonoMovil = $numTelefonoMovil;
    }

    function setArea($area) {
        $this->area = $area;
    }

    function setNumTarjetaEstacionamiento($numTarjetaEstacionamiento) {
        $this->numTarjetaEstacionamiento = $numTarjetaEstacionamiento;
    }

    function setRegistroEntrada($registroEntrada) {
        $this->registroEntrada = $registroEntrada;
    }

    function setRegistroSalida($registroSalida) {
        $this->registroSalida = $registroSalida;
    }
  


}
class Alumno extends Usuario{
    private $numeroControl;
}
class Docentes extends Usuario{
    private $numeroEmpleado;
   
}
class Administrativo extends Usuario{
    private $numeroEmpleado;
    
}
class GuardiaEstacionamiento extends Usuario{
    private $numeroEmpleado;
    private $atenderIncidencia;
    private $reportarIncidencia;
}
class AdministradorEstacionamiento extends Usuario{
    private $numeroEmpleado;
    private $atenderIncidencia;
    private $reportarIncidencia;
}
