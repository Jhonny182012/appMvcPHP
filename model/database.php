<?php
class Database
{
    public static function Conectar()
    {
        $pdo = new PDO('mysql:host=mysqlpablo.mysql.database.azure.com;dbname=pdomvcalumno;charset=utf8', 'pablolandeta@mysqlpablo', 'Pablo666');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}