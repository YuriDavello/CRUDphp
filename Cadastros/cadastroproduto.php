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
        <li><a href="../Cadastros/cadastroproduto.php">Cadastro</a></li>
        <li><a href="../Selecao/SelecaoProduto.php">Seleção</a></li>
        <li><a href="delete">Delete</a></li>
        <li><a href="atualizacao">Atualização</a></li>
    </div>

    <div class="content">
<?php
    include("../Classes/conexao.php");
    include("../Classes/statements.php");
    
    if(isset($_GET['idp'])){
        $Acao="Editar";

        $Crud=new ClassStatement();
        $BFetch=$Crud->selectDB("*","cadastro","where Idp=?","i",array($_GET['idp']));
        $Fetch=$BFetch->fetch_all();
        foreach($Fetch as $Fetchs){
            $Idp=$Fetchs[0];
            $Nomep=$Fetchs[1];
        }
    }

    else{
        $Acao="Cadastrar";
        $Idp=0;
        $Nomep="";
    }
?>

<div class="Resultado"></div>

<div class="Formulario">
    <h1 class="Center">Cadastro</h1>

    <form name="FormCadastro" id="FormCadastro" method="post" action="Controllers/ControllerCadastro.php">
        <input type="hidden" id="Acao" name="Acao" value="<?php echo $Acao; ?>">
        <input type="hidden" id="Idp" name="Idp" value="<?php echo $Idp; ?>">

        <div class="FormularioInput">
            Nome do Produto: <br>
            <input type="text" id="Nomep" name="Nomep" value="<?php echo $Nome; ?>">
        </div>
        
        <div class="FormularioInput FormularioInput100 Center">
            <input type="submit" value="<?php echo $Acao; ?>">
        </div>
    </form>
</div>
</div>

<div class="Content">

    <div class="Formulariop">
        <h1 class="Center">Cadastro Produto</h1>

        <form name="FormCadastro" id="FormCadastro" method="post" action="../Controllers/ControllerCadastroProduto.php">
            <div class="FormularioInput">
                Nome do Produto: <br>
                <input type="text" id="Nomep" name="Nomep">
            </div>

            <div class="FormularioInput">
                Tamanho do Produto: <br>
                <input type="text" id="" name="">
            </div>

             <div class="FormularioInput FormularioInput100 Center">
                <input type="submit" value="Cadastrar">
            </div>

        </form>
    </div>
</div>

</body>
</html>