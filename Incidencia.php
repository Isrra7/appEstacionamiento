<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Incidencia
 *
 * @author Isrra
 */
class Incidencia {
    private $numIncidencia;
    private $descripcion;
    private $tipo;
    private $usuario;
    private $vehiculo;
    
    function __construct() {
        
     
    }
    function getTipo() {
        return $this->tipo;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

        function getNumIncidencia() {
        return $this->numIncidencia;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setNumIncidencia($numIncidencia) {
        $this->numIncidencia = $numIncidencia;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getVehiculo() {
        return $this->vehiculo;
    }

    function setUsuario(Usuario $usuario) {
        $this->usuario = $usuario;
    }

    function setVehiculo(Vehiculo $vehiculo) {
        $this->vehiculo = $vehiculo;
    }


}
