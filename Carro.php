<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Carro
 *
 * @author Isrra
 */
class Carro {
    private $licenciaConducir;
    private $tarjetaCirculacion;
    private $tipo;
    
    function __construct() {
        
    }
    function getLicenciaConducir() {
        return $this->licenciaConducir;
    }

    function getTarjetaCirculacion() {
        return $this->tarjetaCirculacion;
    }

    function getTipo() {
        return $this->tipo;
    }

    function setLicenciaConducir($licenciaConducir) {
        $this->licenciaConducir = $licenciaConducir;
    }

    function setTarjetaCirculacion($tarjetaCirculacion) {
        $this->tarjetaCirculacion = $tarjetaCirculacion;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }


}
