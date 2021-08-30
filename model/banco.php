<?php

require_once("../init.php");
class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setDevedor($nome,$cpf_cnpj,$data_nascimento,$endereco,$descricao_titulo,$valor,$data_vencimento,$updated){
        $stmt = $this->mysqli->prepare("INSERT INTO devedores (`nome`, `cpf_cnpj`, `data_nascimento`, `endereco`, `descricao_titulo`, `valor`, `data_vencimento`, `updated`) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssss",$nome,$cpf_cnpj,$data_nascimento,$endereco,$descricao_titulo,$valor,$data_vencimento,$updated);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function getDevedor(){
        $result = $this->mysqli->query("SELECT * FROM devedores");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deleteDevedor($id){
        if($this->mysqli->query("DELETE FROM `devedores` WHERE `id` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }
    public function pesquisaDevedor($id){
        $result = $this->mysqli->query("SELECT * FROM devedor WHERE id='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updateDevedor($id,$nome,$cpf_cnpj,$data_nascimento,$endereco,$descricao_titulo,$valor,$data_vencimento,$updated){
        $stmt = $this->mysqli->prepare("UPDATE `devedores` SET `nome` = ?, `cpf_cnpj`=?, `data_nascimento`=?, `endereco`=?, `descricao_titulo`=?, `valor` = ?, `data_vencimento`=?, `updated`=? WHERE `id` = ?");
        $stmt->bind_param("ssssssss",$nome,$$cpf_cnpj,$data_nascimento,$endereco,$descricao_titulo,$valor,$data_vencimento,$updated);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>
