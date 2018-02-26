<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Moto
 *
 * @author Isrra
 */
class Moto {
   private $tarjetaCirculacion;
   
   function __construct() {
       
   }
   function getTarjetaCirculacion() {
       return $this->tarjetaCirculacion;
   }

   function setTarjetaCirculacion($tarjetaCirculacion) {
       $this->tarjetaCirculacion = $tarjetaCirculacion;
   }


}
