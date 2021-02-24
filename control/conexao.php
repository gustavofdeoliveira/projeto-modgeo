<?php
class Conexao
{
    static function conectar()
    {
        try {
           $pdo = new PDO('mysql:host=localhost;dbname=modgeo', 'root', '');
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          return $pdo;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}
