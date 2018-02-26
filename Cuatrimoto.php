<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cuatrimoto
 *
 * @author Isrra
 */
class Cuatrimoto {
   private $licenciaConducir;
   private $tarjetaCirculacion;
   
   function __construct() {
       
   }
   function getLicenciaConducir() {
       return $this->licenciaConducir;
   }

   function getTarjetaCirculacion() {
       return $this->tarjetaCirculacion;
   }

   function setLicenciaConducir($licenciaConducir) {
       $this->licenciaConducir = $licenciaConducir;
   }

   function setTarjetaCirculacion($tarjetaCirculacion) {
       $this->tarjetaCirculacion = $tarjetaCirculacion;
   }


}
