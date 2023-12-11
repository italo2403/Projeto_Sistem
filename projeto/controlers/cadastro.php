<?php
include_once ("conexao.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confSenha = $_POST['confSenha'];


$sql = "INSERT INTO  usuario(nome, email, senha, confsenha) values('$nome', '$email', '$senha', '$confSenha')";


if (mysqli_query($conexao, $sql)) {
    header("location: login.html");
} else {
    echo "Erro ao inserir o nome: " . mysqli_connect_error($conexao);
}

// $sql2 = "INSERT INTO meses (mes_insercao) VALUES ('$mesSelecionado')";

// if (mysqli_query($conexao, $sql2)) {
//     echo "Mês inserido com sucesso!";
// } else {
//     echo "Erro ao inserir o mês: " . mysqli_connect_error($conexao);
// }

mysqli_close($conexao);

?>