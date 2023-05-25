<?php

namespace App\Controllers;

class Controllers{
    public function view($route){

        $route = str_replace('.', '/', $route);
        
        if(file_exists("../resourcers/views/{$route}.php")){

            ob_start();
            include "../resourcers/views/{$route}.php";
            $content = ob_get_clean();

            return $content;

        }else{
            return "El archivo no existe";
        }

    }
}