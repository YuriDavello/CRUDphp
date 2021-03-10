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
?>
</div>

<div class="Content">
<table class="TabelaCrud">
    <tr>
        <td>ID funcionario</td>
        <td>Nome</td>
        <td>Email</td>
        <td>Acoes</td>
    </tr>

    <?php
        $Crud=new ClassStatement();
        $BFetch=$Crud->selectDB(
            "*",
            "tbfuncionario",
            "",
            "",
            array()
        );

        while($Result=$BFetch->fetch_all()){
            foreach($Result as $Fetch) {
                ?>
                <tr>
                    <td><?php echo $Fetch[0]; ?></td>
                    <td><?php echo $Fetch[1]; ?></td>
                    <td><?php echo $Fetch[2]; ?></td>
                    <td>
                    <a href="<?php echo "../Cadastros/cadastrofunc.php?idp={$Fetch[0]}";?>">Editar</a>
                        <a class="Deletar" href="<?php echo "../Controllers/ControllerDeletarFunc.php?idf={$Fetch[0]}"; ?>">Deletar</a>
                    </td>
                </tr>
    <?php
            }
        }
    ?>
</table>
</div>