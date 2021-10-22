<?php


class Dividas
{
    private $pdo;
    public $error;

    public function __construct(){
        // nome do banco

        $nome = 'sistema_contas';
        $user = 'root';
        $senha = '';
        $host = 'localhost';
        try {

            $this->pdo = new PDO("mysql1:dbname=".$nome.";host=".$host,$user,$senha);
            echo "Sucesso!!";


        }catch (PDOException $e){
            // se der error mostra menssagem
          $this->error = $e->getMessage();
        }
    }

    public function getMeses()
    {
        $sql = $this->pdo->query("select id_mes, descricao from mes");
        if ($sql->rowCount() >0) {
            $sql->fetch();
        }
    }

}