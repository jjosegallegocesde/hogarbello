<?php

namespace App\Controllers;

class Productos extends BaseController{
    
    public function index(){
        return view('registroProductos');
    }

    public function registrar(){
       

        //SE RECIBEN LOS DATOS DEL FORMULARIO
        $producto=$this->request->getPost("producto");
        $foto=$this->request->getPost("foto");
        $precio=$this->request->getPost("precio");
        $descripcion=$this->request->getPost("descripcion");
        $tipoAnimal=$this->request->getPost("tipoAnimal");

        //se crea un arreglo con los datos recibidos

        $datos=array(
            "producto"=>$producto,
            "foto"=>$foto,
            "precio"=>$precio,
            "descripcion"=>$descripcion,
            "tipoAnimal"=>$tipoAnimal
        );


    }

}
