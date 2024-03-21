<?php
// Configuracoes da base de dados (BD)
$servidor = "localhost";
$utilizador = "root";
$senha = "";
$bd = "codepro_dondzaacademy";

//Criar a conexao e Verificar a conexao com a BD
$conexao = new mysqli($servidor, $utilizador, $senha, $bd);
if ($conexao->connect_error) {
    die("Falha na conexao: " . $conexao->connect_error);
}

//Exectuar o comando de insercao
 //a. receber info do FOrmulario
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
 }

 //b. proceder
 $sql = "INSERT INTO contactos (nome, email, mensagem) VALUES('$nome', '$email', '$mensagem')";


//Verificar a execucao do comando de insercao e apresentar o feedback
if($conexao->query($sql) === TRUE) {
    $_SESSION['succeso'] = 'A mensagem foi recebida com sucesso';
}else {
    echo "error";
}