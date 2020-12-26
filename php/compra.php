<?php
echo"Endereço de cobrança";
 $Vcobranca_nome = $_POST["Nome_Sobrecobranca"];
 $cobranca_email = $_POST["email_cobranca"];
 $Vendereco_cobranca = $_POST["endereco_cobranca"];
 $Vcobranca_city = $_POST["cidade_cobranca"];
 $Vestado_cobranca = $_POST["estadoCobranca"];
 $Vcobranca_cep = $_POST["cepCobranca"];

 echo"Nome: " .$Vcobranca_Nome." <br/> senha:" .$sobreC. "<br/>  email é:" .$emailC;

 echo"pagamento forma";
$Vpg_nome = $_POST["nomeCard"];
$num_card = $_POST["numeroCard"];
$pg_vencMes = $_POST["mesVenc"];
$pg_vencAno = $_POST["anoVenc"];
$pg_codCard = $_POST["cvvCard"];

 echo"<br/>nome completo :" .$Vcobranca_nome;
 echo "<br/> email :".$cobranca_email;
 echo "<br/> endereço <br>".$Vendereco_cobranca;
 echo "<br/> cidade <br>".$Vcobranca_city ;
 echo "<br/> estado <br>".$Vestado_cobranca;
 echo "<br/> cep <br>".$Vcobranca_cep;

echo "<br/> nome pagamento:" .$Vpg_nome;
echo "<br/> numero do cartão:" .$num_card;
echo "<br/>mes vencimento cartao:" .$pg_vencMes;
echo "<br/>ano vencimento cartao:" .$pg_vencAno;
echo "<br/>cod do cartao:" .$pg_codCard;

// Conector para postgres nativo php https://www.php.net/manual/en/pgsql.examples-basic.php
// Connecting, selecting database
$dbconn = pg_connect("host=localhost dbname=BD_SportEstacio user=postgres password=nem43576757") or die('Could not connect: ' . pg_last_error());

//monta valores de incersao para enviar ao postgresql 
$cmdInsert = "INSERT INTO tb_contato_cliente (nome_client, sobrenome_client, email_cliente, msg_cliente)
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