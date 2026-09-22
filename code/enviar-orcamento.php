<?php
$destino = 'geral@baldaque-e-vieira.pt';

$paginasPermitidas = ['home_page.php', 'produtos.php', 'empresa.php', 'maquina.php'];
$origem = $_POST['origem'] ?? 'home_page.php';
if (!in_array($origem, $paginasPermitidas, true)) {
    $origem = 'home_page.php';
}

function campo(string $nome): string {
    $valor = trim($_POST[$nome] ?? '');
    return str_replace(["\r", "\n"], ' ', $valor);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . $origem);
    exit;
}

$nome = campo('nome');
$empresa = campo('empresa');
$email = campo('email');
$telefone = campo('telefone');
$setor = campo('setor');
$mensagem = trim($_POST['mensagem'] ?? '');

$emailValido = filter_var($email, FILTER_VALIDATE_EMAIL);

$setorLabels = [
    'corticeira' => 'Corticeira',
    'vitivinicola' => 'Vitivinícola',
    'alimentar' => 'Alimentar',
    'outra' => 'Outra',
];

if ($nome === '' || !$emailValido || $empresa === '' || $telefone === '' || $mensagem === '' || !isset($setorLabels[$setor])) {
    header('Location: ' . $origem . '?orcamento=erro#fale-conosco');
    exit;
}

$setorTexto = $setorLabels[$setor];

$assunto = 'Novo pedido de orçamento - ' . $nome;

$corpo = "Novo pedido de orçamento através do site:\n\n"
    . "Nome: {$nome}\n"
    . "Empresa: " . ($empresa !== '' ? $empresa : '-') . "\n"
    . "Email: {$email}\n"
    . "Telefone: " . ($telefone !== '' ? $telefone : '-') . "\n"
    . "Setor: {$setorTexto}\n\n"
    . "Mensagem:\n{$mensagem}\n";

$headers = "From: Site Baldaque & Vieira <no-reply@baldaque-e-vieira.pt>\r\n"
    . "Reply-To: {$nome} <{$email}>\r\n"
    . "Content-Type: text/plain; charset=UTF-8";

$enviado = mail($destino, $assunto, $corpo, $headers);

header('Location: ' . $origem . '?orcamento=' . ($enviado ? 'sucesso' : 'erro') . '#fale-conosco');
exit;
