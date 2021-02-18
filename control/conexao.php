<?php
class Conexao {
    private $con;

    function conectar(){
        try {
        $usuario="root";
        $senha = "root";
        $con = new PDO('mysql:host=localhost;dbname=modegeo1', $usuario, $senha);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "conexão pronta";
            } catch(PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
                return $con;
            }
    }
}

$cone = new Conexao();
$cone -> conectar();
?>