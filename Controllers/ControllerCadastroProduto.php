<?php 
include("../Includes/VariaveisProduto.php");
include("../Classes/conexao.php");
include("../Classes/statements.php");

$Crud=new ClassStatement();

if($Acao=='Cadastrar'){
    $Crud->insertDB(
        "tbproduto",
        "?,?",
        "is",
        array(
            $Idp,
            $Nomep
        )
    );
    echo "Cadastro Realizado com Sucesso!";
}else{
    $Crud->updateDB(
        "tbproduto",
        "Nomep=?",
        "Idp=?",
        "si",
        array(
            $Nomep,
            $Idp
        )
    );
    echo "Cadastro Editado com Sucesso!";
}
?>
