<?php


//Incluir a conexao com BD
include_once("conexao.php");

//Receber os dados do formulário
//$arquivo = $_FILES['arquivo'];
//var_dump($arquivo);
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];

//ler todo o arquivo para um array
$dados = file($arquivo_tmp);
//var_dump($dados);

$wpdb->insert(
    $wpdb->prefix."log-plugin,
    array(
        'datas' => $data,
        'messagem' => $mensagem,
    ),
    array(
        '%s',
        '%d',
    )
)";
$_SESSION['msg'] = "<p style='color: green;'>Importação dos dados com sucesso!</p>";
header("Location: index.php");



