<?php
class Database
{

    public static function Conectar()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=mvc_php;charset=utf8', 'root', 'mysql');
        //Filtrando posibles errores de conexión.
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}
