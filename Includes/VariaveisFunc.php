<?php
if(isset($_POST['Acao'])){ $Acao=filter_input(INPUT_POST,'Acao',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Acao'])){ $Acao=filter_input(INPUT_GET,'Acao',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Acao=""; }
if(isset($_POST['Idf'])){ $Id=filter_input(INPUT_POST,'Idf',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Idf'])){ $Idf=filter_input(INPUT_GET,'Idf',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Idf=0; }
if(isset($_POST['Nomef'])){ $Nomef=filter_input(INPUT_POST,'Nomef',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Nomef'])){ $Nomef=filter_input(INPUT_GET,'Nomef',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Nomef=""; }
if(isset($_POST['Email'])){ $Email=filter_input(INPUT_POST,'Email',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Email'])){ $Email=filter_input(INPUT_GET,'Email',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Email=""; }
?>