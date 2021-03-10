<?php
    
    SESSION_START();
    $login = isset($_POST["cxlogin"])?strtolower($_POST["cxlogin"]):"";
    $senha = isset($_POST["cxsenha"])?md5($_POST["cxsenha"]):"";

    include_once 'conexaologin.php';
 
    $log = mysqli_query($conn,
    "select *from usuarios where usuario='$login' 
    and senha = '$senha' ") or die(mysql_error());
    
   
    $linha = mysqli_fetch_array($log);


    if($login == "" || $senha == "")
    {echo "TENTE NOVAMENTE";}
    
    if($login!=$linha["usuario"] && $senha != $linha["senha"])
    { echo "TENTE NOVAMENTE"; }
     
    if($login == $linha["usuario"] && $senha == $linha["senha"])
    {
        $_SESSION["usuario"]=$linha["nomeusuario"];
        echo "
            <script>
                window.location.href = '../telamenu.php';
            </script>
        ";
    }
    
    else
    {
        echo "<script>
                alert('ACESSO NEGADO!');
                window.location.href = '../../index.php';
            </script>";
    }


?>