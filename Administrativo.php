<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Administrativo
 *
 * @author Isrra
 */
class Administrativo {
   private $numeroEmpleado;
   
   function __construct(){
       
   }
   
   function getNumeroEmpleado() {
       return $this->numeroEmpleado;
   }

   function setNumeroEmpleado($numeroEmpleado) {
       $this->numeroEmpleado = $numeroEmpleado;
   }


}
