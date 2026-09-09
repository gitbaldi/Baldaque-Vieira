<!DOCTYPE html>
<html>
<head>
<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/maquina.css">
</head>
<body>
<?php
require 'maquina-data.php';
$id = $_GET['id'] ?? '';
$maquina = $maquinas[$id] ?? null;
if (!$maquina) {
    header('Location: produtos.php');
    exit;
}
$darkSections = '.produto-topo';
include 'nav.php';
?>

<div class="produto">

    <div class="produto-topo">

        <div class="produto-galeria">
            <div class="galeria-principal">
                <button class="seta seta-esquerda" onclick="mudarFoto(-1)" aria-label="Foto anterior">&#8249;</button>
                <img id="foto-ativa" src="" alt="">
                <button class="seta seta-direita" onclick="mudarFoto(1)" aria-label="Foto seguinte">&#8250;</button>
            </div>
            <p id="legenda-foto"></p>

            <div class="miniaturas" id="lista-miniaturas"></div>
        </div>

        <div class="produto-info">
            <p class="linha-topo">Setor corticeiro</p>
            <h1><?= htmlspecialchars($maquina['titulo']) ?></h1>
            <p class="produto-subtitulo"><?= htmlspecialchars($maquina['subtitulo']) ?></p>

            <div class="produto-modelos" id="lista-modelos"></div>

            <div class="produto-specs" id="lista-specs"></div>

            <button class="btn-orcamento" onclick="abrirModal(event)">Pedir orçamento</button>
        </div>

    </div>

    <div class="produto-caracteristicas">
        <p class="caracteristicas-eyebrow"><span class="eyebrow-linha"></span>Especificação</p>
        <h2>Características técnicas</h2>
        <p class="caracteristicas-sub"><?= htmlspecialchars($maquina['caracteristicas_sub']) ?></p>

        <div class="caracteristicas-grid">
<?php foreach ($maquina['caracteristicas'] as $i => $secao): ?>

            <div class="caracteristica-secao">
                <span class="caracteristica-numero"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
                <p class="caracteristica-titulo"><?= htmlspecialchars($secao['titulo']) ?></p>
                <ul class="caracteristica-lista">
<?php foreach ($secao['itens'] as $item): ?>
                    <li><?= htmlspecialchars($item) ?></li>
<?php endforeach; ?>
                </ul>
            </div>
<?php endforeach; ?>

        </div>
    </div>

</div>

<div class="lightbox-overlay" id="lightbox">
    <button class="lightbox-fechar" onclick="fecharLightbox()">&times;</button>
    <button class="lightbox-seta lightbox-seta-esq" onclick="lightboxMudar(-1)">&#8249;</button>

    <div class="lightbox-imagem-wrap">
        <img id="lightbox-img" src="" alt="">
    </div>

    <button class="lightbox-seta lightbox-seta-dir" onclick="lightboxMudar(1)">&#8250;</button>

    <p class="lightbox-legenda" id="lightbox-legenda"></p>
    <p class="lightbox-contador" id="lightbox-contador"></p>

    <div class="lightbox-miniaturas" id="lightbox-miniaturas"></div>
</div>

<script>
const fotos = <?= json_encode($maquina['fotos'], JSON_UNESCAPED_UNICODE) ?>;
const modelos = <?= json_encode($maquina['modelos'], JSON_UNESCAPED_UNICODE) ?>;
let modeloAtivo = <?= json_encode($maquina['modelo_ativo']) ?>;
</script>
<script src="js/produto-galeria.js"></script>
<script src="js/sidebar-scroll.js"></script>

</body>
<?php include 'footer.php'; ?>
</html>
