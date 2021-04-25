<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "root";
	$dbname = "modgeo";
	
	//Criar a conexao
	$con = mysqli_connect($servidor, $usuario, $senha, $dbname);
class Conexao
{
    static function conectar()
    {
        try {
           $pdo = new PDO('mysql:host=localhost;dbname=modgeo', 'root', 'root');
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          return $pdo;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}
