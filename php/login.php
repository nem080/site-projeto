<?php
 $nome_usuario = $_POST["log_name"];
 $senha_usuario = $_POST["log_senha"];

//listar todos os registros no banco de dados e editar dados pelo php possibilitando a exclusão do mesmo
//dica-usar chave primaria para fazer as modificações
//
//echo "$nome <br>";
 //echo "$sobrenome <br>";
 //echo "$cep <br>";
 //echo "$cidade <br>";
 //echo "$estado <br>";
 //echo "$bairro <br>";
 //echo "$logradouro<br>";
 //echo "$numero <br>";
 //echo "$complemento <br>";

// Conector para postgres nativo php https://www.php.net/manual/en/pgsql.examples-basic.php
// Connecting, selecting database
$dbconn = pg_connect("host=localhost dbname=formulario user=postgres password=RickSchneider1") or die('Could not connect: ' . pg_last_error());

//monta valores de incersao para enviar ao postgresql
$cmdInsert = "INSERT INTO tb_login (nome, sobrenome, cep, cidade, estado, bairro, logadouro, numero, complemento)
VALUES ('$nome','$sobrenome','$cep','$cidade','$estado','$bairro','$logradouro','$numero','$complemento');";

echo $cmdInsert;

$result = pg_query($dbconn, $cmdInsert);

//seria o href
header("Location: ../html/cadastro-sucesso.html");


pg_close($dbconn);

//valor colocado no postgresql para inserir dados
// $cmdInsert = "INSERT INTO usuarios (nome, sobrenome, cep, cidade, estado, logadouro, bairro, numero, complemento)
// VALUES ('$nome','$sobrenome','8805000','Flonox','SC','Rua 000','Centro','200','pqp');"
?>  
