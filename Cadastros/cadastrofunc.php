<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Class Crud</title>
    <link rel="stylesheet" href="../Estilo/CSS.css">
</head>

<body>
    <div class="Banner">
        <img src="../Imagens/Banner.jpg" alt="Banner Crud">
    </div>

    <div class="Nav">
        <li><a href="../Cadastros/cadastrofunc.php">Cadastro</a></li>
        <li><a href="../Selecao/SelecaoFunc.php">Seleção</a></li>
        <li><a href="delete">Delete</a></li>
        <li><a href="atualizacao">Atualização</a></li>
    </div>

    <div class="content">
<?php
include("../Classes/conexao.php");
include("../Classes/statements.php");

if(isset($_GET['idf'])){
    $Acao="Editar";

    $Crud=new ClassStatement();
    $BFetch=$Crud->selectDB("*","cadastro","where Idf=?","i",array($_GET['idf']));
    $Fetch=$BFetch->fetch_all();
    foreach($Fetch as $Fetchs){
        $Idf=$Fetchs[0];
        $Nomef=$Fetchs[1];
        $Email=$Fetchs[2];
    }
}

else{
    $Acao="Cadastrar";
    $Idf=0;
    $Nomef="";
    $Email="";
}
?>

<div class="Resultado"></div>

<div class="Formulario">
<h1 class="Center">Cadastro</h1>

<form name="FormCadastro" id="FormCadastro" method="post" action="Controllers/ControllerCadastro.php">
    <input type="hidden" id="Acao" name="Acao" value="<?php echo $Acao; ?>">
    <input type="hidden" id="Idf" name="Idf" value="<?php echo $Idf; ?>">

    <div class="FormularioInput">
        Nome: <br>
        <input type="text" id="Nomef" name="Nomef" value="<?php echo $Nomef; ?>">
    </div>

    <div class="FormularioInput">
        Email: <br>
        <input type="text" id="Email" name="Email" value="<?php echo $Email; ?>">
    </div>
    
    <div class="FormularioInput FormularioInput100 Center">
        <input type="submit" value="<?php echo $Acao; ?>">
    </div>
</form>
</div>
</div>
    </div>
</div>

</body>
</html>