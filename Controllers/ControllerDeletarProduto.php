<?php 
include("../Includes/VariaveisProduto.php");
include("../Classes/conexao.php");
include("../Classes/statements.php");

$Crud=new ClassStatement();
$IdUser=filter_input(INPUT_GET,'idp',FILTER_SANITIZE_SPECIAL_CHARS);

$Crud->deleteDB(
    "tbproduto",
    "idp=?",
    "i",
    array(
        $IdUser
    )
);
?>
