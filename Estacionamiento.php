<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Estacionamiento
 *
 * @author Isrra
 */
class Estacionamiento {
   private $nombre;
   private $ubicacion;
   private $capacidad;
   private $vehiculo = array();
   private $usuario = array();


   public function __construct() {
       
   }
   
   function getNombre() {
       return $this->nombre;
   }

   function getUbicacion() {
       return $this->ubicacion;
   }

   function getCapacidad() {
       return $this->capacidad;
   }

   function setNombre($nombre) {
       $this->nombre = $nombre;
   }

   function setUbicacion($ubicacion) {
       $this->ubicacion = $ubicacion;
   }

   function setCapacidad($capacidad) {
       $this->capacidad = $capacidad;
   }

   
      
   function add (Vehiculo $vehi){
       array_push($this->vehiculo, $vehi);
   }
   
   function add1 (Usuario $usu){
       array_push($this->usuario, $usu);
   }


}


