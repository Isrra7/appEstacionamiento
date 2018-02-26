<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Alumno
 *
 * @author Isrra
 */
class Alumno {
    private $numeroControl;
    
    function __construct() {
        
    }
    
    function getNumeroControl() {
        return $this->numeroControl;
    }

    function setNumeroControl($numeroControl) {
        $this->numeroControl = $numeroControl;
    }


}
