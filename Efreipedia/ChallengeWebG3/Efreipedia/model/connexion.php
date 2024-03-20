<?php

class myBDD {
    public static function connexion(){
        try{
            $dsn = 'pgsql:host=localhost;port=5432;dbname=efreipedia;';
            $username = 'postgres';
            $password = 'root';
            $pdo = new PDO($dsn, $username, $password);
            return $pdo;
            echo "Connected successfully";
            
            } catch (PDOException $e) {
                die("Connection failed: " . $e->getMessage());
            }
    }        
}