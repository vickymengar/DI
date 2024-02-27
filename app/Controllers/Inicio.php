<?php

namespace App\Controllers;

class Inicio extends BaseController
{
    private $view = 'inicio';

    private function cargar_datos(){
   
    $datos = array();
//---Informacion General---
$datos ['nombre_pagina'] ='El Arca | Inicio';

//---Breadcrums----

//---Queries---


    return $datos; 
    } //end cargar datos

    private function crear_vista($nombre_vista= '', $contenido = array()){
        return view($nombre_vista, $contenido);
    }//end crear_vista

//funcion principal
    public function index()
    {
        return $this->crear_vista($this->view, $this->cargar_datos());
    } //end index



}