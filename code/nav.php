<?php include 'header.php'; ?>
    <nav<?php if (!empty($darkSections)) echo ' data-dark-sections="' . htmlspecialchars($darkSections) . '"'; ?>>
        <a href="home_page.php"><img src="BeV_logo_preto.png"alt="logo_preto"></a>
        <button class="nav-toggle" onclick="toggleNav()" aria-label="Abrir menu">
            <span></span><span></span><span></span>
        </button>
        <div class="direita">
            <a href="home_page.php"> INÍCIO </a>
            <a href="empresa.php"> EMPRESA </a>
            <a href="produtos.php"> PRODUTOS </a>
            <a href="home_page.php#fale-conosco"> CONTACTOS </a>
            <a href="#" onclick="abrirModal(event)"> ORÇAMENTO </a>

        </div>
</nav>
<div class="modal-overlay" id="modal-orcamento">
    <div class="modal-conteudo">
        <button class="modal-fechar" onclick="fecharModal()">&times;</button>
        <p class="linha-topo">FALE CONNOSCO</p>
        <h3>Peça o seu Orçamento</h3>
        <p class="orcamento-desc">Descreva o equipamento ou serviço do qual quer receber mais informações.</p>
        <form action="enviar-orcamento.php" method="post">
            <?php if (($_GET['orcamento'] ?? '') === 'sucesso'): ?>
                <p class="form-msg sucesso">Pedido enviado com sucesso! Entraremos em contacto brevemente.</p>
            <?php elseif (($_GET['orcamento'] ?? '') === 'erro'): ?>
                <p class="form-msg erro">Não foi possível enviar o pedido. Tente novamente ou contacte-nos por telefone/email.</p>
            <?php endif; ?>
            <input type="hidden" name="origem" value="<?= htmlspecialchars(basename($_SERVER['SCRIPT_NAME'])) ?>">
            <div class="campo">NOME <input name="nome" type="text" placeholder="O seu nome" required></div>
            <div class="campo">EMPRESA <input name="empresa" type="text" placeholder="Nome da Empresa"></div>
            <div class="campo">EMAIL <input name="email" type="email" placeholder="Email" required></div>
            <div class="campo">TELEFONE <input name="telefone" type="tel" placeholder="Telefone"></div>
            <div class="campo">
                SETOR
                <div class="setor">
                    <label><input type="radio" name="setor" value="corticeira"><span>CORTICEIRA</span></label>
                    <label><input type="radio" name="setor" value="vitivinicola"><span>VITIVINÍCOLA</span></label>
                    <label><input type="radio" name="setor" value="alimentar"><span>ALIMENTAR</span></label>
                    <label><input type="radio" name="setor" value="outra"><span>OUTRA</span></label>
                </div>
            </div>
            <div class="campo">MENSAGEM
                <textarea name="mensagem" rows="3" placeholder="Descreva o equipamento ou serviço pretendido"></textarea>
            </div>
            <input type="submit" value="ENVIAR PEDIDO">
        </form>
    </div>
</div>

<script>
function abrirModal(event) {
    event.preventDefault();
    document.getElementById('modal-orcamento').classList.add('aberto');
    document.body.style.overflow = 'hidden';
}
function fecharModal() {
    document.getElementById('modal-orcamento').classList.remove('aberto');
    document.body.style.overflow = '';
}
document.getElementById('modal-orcamento').addEventListener('click', function(e) {
    if (e.target === this) fecharModal();
});
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') fecharModal();
});

if (new URLSearchParams(window.location.search).has('orcamento')) {
    document.getElementById('modal-orcamento').classList.add('aberto');
    document.body.style.overflow = 'hidden';
}

function toggleNav() {
    document.querySelector('nav').classList.toggle('menu-aberto');
}
document.querySelectorAll('.direita a').forEach(function(link) {
    link.addEventListener('click', function() {
        document.querySelector('nav').classList.remove('menu-aberto');
    });
});
</script>