<?php
if(isset($_POST['Acao'])){ $Acao=filter_input(INPUT_POST,'Acao',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Acao'])){ $Acao=filter_input(INPUT_GET,'Acao',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Acao=""; }
if(isset($_POST['Idp'])){ $Id=filter_input(INPUT_POST,'Idp',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Idp'])){ $Idp=filter_input(INPUT_GET,'Idp',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Idp=0; }
if(isset($_POST['Nomep'])){ $Nomep=filter_input(INPUT_POST,'Nomep',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Nomep'])){ $Nomep=filter_input(INPUT_GET,'Nomep',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Nomep=""; }
?>