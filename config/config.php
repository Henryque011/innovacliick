<?php
// Define url base da aplicação
// define("BASE_URL","https://innovaclick.smpsistema.com.br/");
// Define URl local
define("BASE_URL","http://localhost/innovaclick/public/");

//configuração do Databases
define("DB_HOST", "smpsistema.com.br");
define("DB_NAME", "u283879542_henryque");
define("DB_USER", "u283879542_henryque");
define("DB_PASS", "Henryque@tipi02");

// EMAIL
define('HOST_EMAIL','smtp.hostinger.com');
define('PORT_EMAIL','465');
define('USER_EMAIL','innovaclicktipi02@smpsistema.com.br');
define('PASS_EMAIL','Senac@tipi02');

// Sistema de autoload das class
spl_autoload_register(function ($classe){

    if(file_exists('../app/controllers/'. $classe . '.php')){
        // ../app/controllers/HomeController.php
        require_once '../app/controllers/'. $classe .'.php';
        //var_dump('../app/controllers/'. $classe .'.php');
    
    }

    if (file_exists('../app/models/'. $classe . '.php')){
        require_once '../app/models/'. $classe . '.php';
    }

    if(file_exists('../core/'. $classe .'.php')){
        require_once '../core/' . $classe .'.php';
    }
});