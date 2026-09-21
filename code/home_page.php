
<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="css/home_page.css">
<?php $darkSections = '.introducao, .mercado_alvo, .equipamentos'; include 'nav.php'; ?>
<div class="introducao">
        <img src="OneDrive_2026-06-23/Site - BeV/Fotos Site/BOA_IMG_5769.jpg"alt="maquina">
        <div class="conteudo">

        <h2> BALDAQUE & VIEIRA </h2>
        <p>Especialistas em fabrico, manutenção e assistência técnica de maquinaria industrial em aço inoxidável, desenvolvendo soluções adaptadas às necessidades de cada cliente. </p>
        <button onclick="window.location.href='empresa.php'"> Saiba Mais</button>
        <button onclick="abrirModal(event)"> Solicitar Orçamento</button>
        </div>
    </div>
    <main class="conteudo_pagina"> 
    <div class ="mercado_alvo">
        <h1> Mercado Alvo </h1>
        <p>Desenvolvemos soluções personalizadas e adaptadas com forte presença no mercado nacional e comunitário, nomeadamente em Espanha e França.</p>
        <div class="mercados">
            <a class ="corticeiro" href="produtos.php#corticeiro">
                <img src="IMG_0817.jpg" alt="imagem_corticeiro">
                <div class="mercado_texto">
                    <h4>CORTICEIRO</h4>
                    <p>Soluções industriais para o processamento e transformação da cortiça </p>
                </div>
                <div class="mercado_hover">
                    <span>Saber mais <span class="seta">&rarr;</span></span>
                </div>
            </a>
            <a class="viti_alimentar" href="produtos.php#viti-alimentar">
                <img src="IMG_2143_viti.jpg" alt="imagem_vitivinicula">
                <div class="mercado_texto">
                    <h4>VITIVINÍCOLA & ALIMENTAR</h4>
                    <p>Máquinas e soluções à medida para processos vitivinícolas e alimentares</p>
                </div>

                <div class="mercado_hover">
                    <span>Saber mais <span class="seta">&rarr;</span></span>
                </div>
            </a>
        </div>
    </div>
    <div class = "about_us">
        <h4> SOBRE NÓS </h4>
        <h1> Os nossos valores </h1>
        <div class="caixas">
        <div class="card">
            
            <span class="material-symbols-outlined">handshake</span>
            <h4>Reconhecimento  e Valorização dos parceiros comerciais</h4>
            
            <p> Acreditamos em relações sólidas e de confiança</p>
        </div>
        <div class="card">
            
            <span class="material-symbols-outlined">diversity_3</span>
            <h4>Espírito de equipa e Reconhecimento de Identidade</h4>
            
            <p> Trabalhamos juntos com orgulho e sentido de pertença.</p>
        </div>
        <div class="card">
            
            <span class="material-symbols-outlined">eco </span>
            <h4>Responsabilidade Social e do meio ambiente</h4>
            
            <p> Comprometemo-nos com práticas sustentáveis e responsáveis.</p>
        </div>
        <div class="card">
            
            <span class="material-symbols-outlined">verified_user</span>
            <h4>Segurança, saúde e higiene no trabalho</h4>
            
            <p>Garantimos um ambiente de trabalho seguro e saudável.</p>
        </div>
        </div>
    </div>
    <div class="equipamentos">
  <h1>PRODUTOS </h1>

<?php include 'produtos-cards.php'; ?>

</div>

    <div class = "location">
        <div class = "texto">
        <h1> Localização </h1>
        <p>A <strong>Baldaque & Vieira</strong>, Unipessoal, Lda encontra-se estrategicamente localizada na freguesia de <strong>Paços de Brandão</strong>, no concelho de Santa Maria da Feira, integrando uma região industrial de excelência no <strong>norte de Portugal</strong>.
        <br>Situada junto à Avenida do Portelo e Avenida Matoso, a fábrica possui excelentes ligações rodoviárias às principais vias do eixo Porto-Aveiro.</p>
    </div>
        <div class="mapa" id="mapaLocalizacao">
    <div class="mapa-consent" id="mapaConsent">
        <p>Ao carregar o mapa, aceitas a utilização de cookies do Google Maps para mostrar a nossa localização.</p>
        <button type="button" id="mapaAceitar">Ver mapa</button>
    </div>
</div>

<script>
document.getElementById('mapaAceitar').addEventListener('click', function () {
    document.getElementById('mapaLocalizacao').innerHTML =
        '<iframe src="https://www.google.com/maps?q=Baldaque+%26+Vieira%2C+Pa%C3%A7os+de+Brand%C3%A3o&output=embed" allowfullscreen loading="lazy"></iframe>';
});
</script>
    </div>
    <div class ="orcamento"id="fale-conosco">
        <div class= "esquerda">
        <p class="linha-topo">FALE CONNOSCO</p>
        <h3> Peça o seu Orçamento</h3>
        <p> Descreva o equipamento ou serviço do qual quer receber mais informações<br>Responderemos o mais brevemente possível</p>
        <div class = "infos">
        <div class="phone">
            <p>TELEFONE</p>
            <p>22 099 1303</p>
        </div>
        <div class="phone2">
            <p>TELEMÓVEL</p>
            <p>+351 918 228 054</p>
        </div>
        <div class="email">
            <p>EMAIL</p>
            <p>geral@baldaque-e-vieira.pt</p>
        </div>
        <div class="localizacao">
            <p>INSTALAÇÕES</p>
            <p>Zona Industrial - Santa Maria da Feira</p>
        </div>
</div>
</div>

        <form action="enviar-orcamento.php" method="post">
            <?php if (($_GET['orcamento'] ?? '') === 'sucesso'): ?>
                <p class="form-msg sucesso">Pedido enviado com sucesso! Entraremos em contacto brevemente.</p>
            <?php elseif (($_GET['orcamento'] ?? '') === 'erro'): ?>
                <p class="form-msg erro">Não foi possível enviar o pedido. Tente novamente ou contacte-nos por telefone/email.</p>
            <?php endif; ?>
            <input type="hidden" name="origem" value="home_page.php">
            <div class = "linha">
            <div class= "campo">NOME <input name="nome" type="text" placeholder="O seu nome" required></div>
            <div class= "campo">EMPRESA <input name="empresa" type="text" placeholder="Nome da Empresa"></div>
            </div>
            <div class = "linha">
            <div class= "campo">EMAIL <input name="email" type="email" placeholder="nome@empresa.pt" required></div>
            <div class= "campo">TELEFONE <input name="telefone" type="tel" placeholder="+351..."> </div>
            </div>
            <div class="linha">
  <div class="campo">
    SETOR
    <div class="setor">
      <label><input type="radio" name="setor" value="corticeira"><span>CORTICEIRA</span></label>
      <label><input type="radio" name="setor" value="vitivinicula"><span>VITIVINÍCOLA</span></label>
      <label><input type="radio" name="setor" value="alimentar"><span>ALIMENTAR</span></label>
      <label><input type="radio" name="setor" value="outra"><span>OUTRA</span></label>
    </div>
  </div>
</div>
        <div class = "linha"> 
            <div class= "campo">MENSAGEM <textarea name="mensagem" rows="5" cols="60" placeholder="Descreva o equipamento ou o serviço pretendido"></textarea>
</div></div>            
            <input type="submit" value="ENVIAR PEDIDO">
        </form>

        </main>
        
<?php include 'footer.php'; ?>  
     

<script src="js/sidebar-scroll.js"></script>
  </body>
</html>