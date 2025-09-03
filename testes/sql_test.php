<?php 

require_once '../core/sql.php';

$id = 1;
$nome = "fernando";
$email = "fernando@gmail.com";
$senha = "1234";
$dados = ['nome' => $nome, 'email' => $email, 'senha' => $senha];

$entidade = "usuario";
$criterio = [['id', '=', $id]];
$campo = ['id', 'nome', 'email'];

print_r($dados);
echo "<br>";
print_r($campo);
echo "<br>";
print_r($criterio);
echo "<br>";

$instrucao = insert($entidade, $dados);
echo $instrucao."<br>";

$instrucao = update($entidade, $dados, $criterio);
echo $instrucao."<br>";

$instrucao = select($entidade, $dados, $criterio);
echo $instrucao."<br>";

$instrucao = delete($entidade, $criterio);
echo $instrucao."<br>";

?>