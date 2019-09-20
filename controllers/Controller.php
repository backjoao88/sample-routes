<?php

    namespace controllers;

    class Controller{

        public function index(){
            echo "Esse é o Index do Controller";
        }

        public function salvar(){
            echo "Esse é o Salvar do Controller";
        }

        public function bolinhas(){
            echo "Essa é a tela Bolinhas";
        }

        public function bolinha($id, $request){
            echo "Essa é a bolinha de número -> " . $id;
        }

    }

?>