<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdministradorEstacionamiento
 *
 * @author Isrra
 */
class AdministradorEstacionamiento {
    private $numeroEmpleado;
    private $atenderIncidencia;
    private $reportarIncidencia;
    
    function __construct() {
        
    }
    
    function getNumeroEmpleado() {
        return $this->numeroEmpleado;
    }

    function getAtenderIncidencia() {
        return $this->atenderIncidencia;
    }

    function getReportarIncidencia() {
        return $this->reportarIncidencia;
    }

    function setNumeroEmpleado($numeroEmpleado) {
        $this->numeroEmpleado = $numeroEmpleado;
    }

    function setAtenderIncidencia($atenderIncidencia) {
        $this->atenderIncidencia = $atenderIncidencia;
    }

    function setReportarIncidencia($reportarIncidencia) {
        $this->reportarIncidencia = $reportarIncidencia;
    }


}
