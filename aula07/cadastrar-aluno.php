<?php

include_once("conexao.php");

$query = "INSERT INTO tbl_alunos(`nome`, `sobrenome`, `data_nascimento`, `genero`, `situacao`)
VALUE('Fulano', 'Silva', '12/08/1986', 'M', 'A')";
$inserir = mysqli_query($conexao, $query);

if($inserir){
    echo "Cadastro efetuado com sucesso";
}else{
    echo "Ops, não foi possivel cadastrar o aluno";
}

?>