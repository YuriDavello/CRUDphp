<?php
if(isset($_POST['Acao'])){ $Acao=filter_input(INPUT_POST,'Acao',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Acao'])){ $Acao=filter_input(INPUT_GET,'Acao',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Acao=""; }
if(isset($_POST['Idc'])){ $Id=filter_input(INPUT_POST,'Idc',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Idc'])){ $Id=filter_input(INPUT_GET,'Idc',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Idc=0; }
if(isset($_POST['Nome'])){ $Nome=filter_input(INPUT_POST,'Nome',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Nome'])){ $Nome=filter_input(INPUT_GET,'Nome',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Nome=""; }
if(isset($_POST['Telefone'])){ $Telefone=filter_input(INPUT_POST,'Sexo',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Telefone'])){ $Telefone=filter_input(INPUT_GET,'Telefone',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Telefone=""; }
?>