<?php

class ClassStatement extends ClassConexao{

private $Crud;
private $Contador;
private $Resultado;

private function preparedStatements($Query, $Tipos, $Parametros)
{
    $this->countParametros($Parametros);
    $Con=$this->conectaDB();
    $this->Crud=$Con->prepare($Query);
    if($this->Contador > 0){
       $CallParametros = array();
        foreach($Parametros as $Key => $Parametro){
            $CallParametros[$Key] = &$Parametros[$Key];
        }
        array_unshift($CallParametros, $Tipos);
        call_user_func_array(array($this->Crud,'bind_param'),$CallParametros);
    }
    $this->Crud->execute();
    $this->Resultado=$this->Crud->get_result();
}

private function countParametros($Parametros)
{
    $this->Contador=count($Parametros);
}

public function insertDB($Tabela , $Condicao , $Tipos , $Parametros){
    $this->preparedStatements("insert into {$Tabela} values ({$Condicao})" , $Tipos , $Parametros);
    return $this->Crud;
}

public function selectDB($Campos , $Tabela , $Condicao , $Tipos , $Parametros){
    $this->preparedStatements("select {$Campos} from {$Tabela} {$Condicao}",$Tipos,$Parametros);
    return $this->Resultado;
}

public function deleteDB($Tabela , $Condicao , $Tipos , $Parametros){
    $this->preparedStatements("delete from {$Tabela} where {$Condicao}", $Tipos , $Parametros);
    return $this->Crud;
}

public function updateDB($Tabela , $Set , $Condicao , $Tipos , $Parametros)
{
    $this->preparedStatements("update {$Tabela} set {$Set} where {$Condicao}", $Tipos, $Parametros);
    return $this->Crud;
}

}

?>