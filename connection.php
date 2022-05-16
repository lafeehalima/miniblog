<?php

function dbconnect(){
    try{
        $db = new PDO("mysql:host=localhost;dbname=miniblog;charset=utf8", "root", "",[PDO::ATTR_ERRMODE=> PDO:: ERRMODE_EXCEPTION]);
        //echo "vous êtes connecté <br>";
        return $db ;
        }catch(EXCEPTION $e){
            die("Erreur :". $e->getMessage());
        }
}