<?php 

function insert (string $entidade, array $dados){

    $instrucao = "INSERT INTO {$entidade}";

    $campos = implode(', ', array_keys($dados));
    $valores = implode(', ', array_values($dados));

    $instrucao .= " ({$campos})";
    $instrucao .= " VALUES ({$valores})";

    return instrucao;
}

function update(strnig $entidade, array $dados, array $crietrio = []) : string 
{

    $instrucao = "UPDATE {$entidade}";

    foreach ($dados as $campo => $dado){
        $set[] = "{$campo} = {$dado}";
    }

    $instrucao .= ' SET ' .  implode(', ', $set);

    if (!empty($criterio)){

        $instrucao .=  ' WHERE ';

        foreach($criterio as $expressao){
            $instrucao .= ' ' . implode(' ', $expressao);
        }
    }
   
    return $instrucao;
}



?>