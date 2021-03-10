<?php 
include("../Includes/VariaveisProduto.php");
include("../Classes/conexao.php");
include("../Classes/statements.php");

$Crud=new ClassStatement();
$IdUser=filter_input(INPUT_GET,'idf',FILTER_SANITIZE_SPECIAL_CHARS);

$Crud->deleteDB(
    "tbfuncionario",
    "idf=?",
    "i",
    array(
        $IdUser
    )
);
?>
