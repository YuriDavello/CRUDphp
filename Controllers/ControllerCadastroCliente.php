<?php 
include("../Includes/VariaveisCliente.php");
include("../Classes/conexao.php");
include("../Classes/statements.php");

$Crud=new ClassStatement();

if($Acao=='Cadastrar'){
    $Crud->insertDB(
        "tbcliente",
        "?,?,?",
        "iss",
        array(
            $Id,
            $Nome,
            $Telefone
        )
    );
    echo "Cadastro Realizado com Sucesso!";
}else{
    $Crud->updateDB(
        "tbcliente",
        "Nome=?, Telefone=?",
        "Id=?",
        "ssi",
        array(
            $Nome,
            $Telefone,
            $Id
        )
    );
    echo "Cadastro Editado com Sucesso!";
}
?>
