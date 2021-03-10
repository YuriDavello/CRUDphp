<?php 
include("../Includes/VariaveisFunc.php");
include("../Classes/conexao.php");
include("../Classes/statements.php");

$Crud=new ClassStatement();

if($Acao=='Cadastrar'){
    $Crud->insertDB(
        "tbfuncionario",
        "?,?,?",
        "iss",
        array(
            $Idf,
            $Nomef,
            $Email
        )
    );
    echo "Cadastro Realizado com Sucesso!";
}else{
    $Crud->updateDB(
        "tbfuncionario",
        "Nomef=?, Email=?",
        "Idf=?",
        "ssi",
        array(
            $Nomef,
            $Email,
            $Idf
        )
    );
    echo "Cadastro Editado com Sucesso!";
}
?>