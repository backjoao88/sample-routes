<?php

    namespace core;

    class ControllerUtil{
        

        public static function newController($controller){
            $objController = "controllers\\" . $controller;
            return new $objController;
        }

        public static function page404(){
            echo "Error 404: Page not found!";
        }


    }


?>