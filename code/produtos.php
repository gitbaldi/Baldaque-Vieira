<!DOCTYPE html>
<html>
<head>
<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/produtos.css">
</head>
<body>
<?php include 'nav.php'; ?>

<div class="equipamentos">
  <h1>PRODUTOS </h1>
  <div class="corticeiro">
  <h2 id="corticeiro"> Setor Corticeiro </h2>

<?php include 'produtos-cards.php'; ?>
</div>
  

  <h2 id="viti-alimentar">Setor Vitivinícola e Alimentar</h2>

<div class="viti">
       <svg class="viti-uvas" viewBox="0 0 200 240" xmlns="http://www.w3.org/2000/svg">
        <circle cx="100" cy="40" r="22"/>
        <circle cx="75" cy="70" r="22"/>
        <circle cx="125" cy="70" r="22"/>
        <circle cx="55" cy="100" r="22"/>
        <circle cx="100" cy="100" r="22"/>
        <circle cx="145" cy="100" r="22"/>
        <circle cx="75" cy="130" r="22"/>
        <circle cx="125" cy="130" r="22"/>
        <circle cx="100" cy="160" r="22"/>
        <path d="M100 18 Q 90 -10 70 -20" stroke="currentColor" stroke-width="4" fill="none"/>
    </svg>
    <div class="viti-conteudo">
        
        <div class="viti-bloco">
            <div class="viti-foto">
                <img src="fotos_organizadas/Vitivinicola.jpg" alt="Equipamento personalizado para o setor vitivinícola">
                <p class="viti-foto-legenda">Vitivinícola</p>
            </div>
            <div class="viti-texto">
                <p>Cada empresa tem necessidades diferentes. Por isso, desenvolvemos <strong>soluções e equipamentos adaptados </strong> à realidade de cada Cliente, tendo em conta os seus processos, instalações e objetivos.</p>
                <p>Cada solução é desenvolvida de acordo com as <strong>necessidades específicas</strong> de cada Cliente, garantindo equipamentos funcionais, eficientes e adaptados aos seus processos de trabalho.</p>
            </div>
        </div>
        <p class="viti-subtitulo">Soluções à medida</p>
        <div class="viti-bloco">
            <svg class="viti-uvas viti-uvas-2" viewBox="0 0 200 240" xmlns="http://www.w3.org/2000/svg">
        <circle cx="100" cy="40" r="22"/>
        <circle cx="75" cy="70" r="22"/>
        <circle cx="125" cy="70" r="22"/>
        <circle cx="55" cy="100" r="22"/>
        <circle cx="100" cy="100" r="22"/>
        <circle cx="145" cy="100" r="22"/>
        <circle cx="75" cy="130" r="22"/>
        <circle cx="125" cy="130" r="22"/>
        <circle cx="100" cy="160" r="22"/>
        <path d="M100 18 Q 90 -10 70 -20" stroke="currentColor" stroke-width="4" fill="none"/>
    </svg>
            <div class="viti-texto">
                <p>Para além do desenvolvimento de soluções personalizadas, asseguramos também serviços de <strong>reparação, manutenção e assistência técnica</strong>, contribuindo para o bom funcionamento e maior durabilidade dos equipamentos.</p>
                <p>O nosso compromisso é <strong>acompanhar cada Cliente</strong> de forma próxima, encontrando soluções práticas e à medida das suas necessidades.</p>
            </div>
            <div class="viti-foto">
                <img src="fotos_organizadas/Alimentar.png" alt="Equipamento em aço inoxidável, setor alimentar">
                <p class="viti-foto-legenda">Alimentar</p>
            </div>
        </div>
    </div>

    <div class="orcamento">
        <p class="linha-topo">FALE CONNOSCO</p>
        <h3>Peça o seu Orçamento</h3>
        <p class="orcamento-desc">Descreva o equipamento ou serviço do qual quer receber mais informações.</p>

        <form action="enviar-orcamento.php" method="post">
             <?php if (($_GET['orcamento'] ?? '') === 'sucesso'): ?>
                 <p class="form-msg sucesso">Pedido enviado com sucesso! Entraremos em contacto brevemente.</p>
             <?php elseif (($_GET['orcamento'] ?? '') === 'erro'): ?>
                 <p class="form-msg erro">Não foi possível enviar o pedido. Tente novamente ou contacte-nos por telefone/email.</p>
             <?php endif; ?>
             <input type="hidden" name="origem" value="produtos.php">
             <div class= "campo">NOME <input name="nome" type="text" placeholder="O seu nome" required></div>
             <div class= "campo">EMPRESA <input name="empresa" type="text" placeholder="Nome da Empresa"></div>
             <div class= "campo">EMAIL <input name="email" type="email" placeholder="Email" required></div>
             <div class= "campo">TELEFONE <input name="telefone" type="tel" placeholder="Telefone"></div>
            <div class="campo">
    SETOR
    <div class="setor">
      <label><input type="radio" name="setor" value="corticeira"><span>CORTICEIRA</span></label>
      <label><input type="radio" name="setor" value="vitivinicula"><span>VITIVINÍCOLA</span></label>
      <label><input type="radio" name="setor" value="alimentar"><span>ALIMENTAR</span></label>
      <label><input type="radio" name="setor" value="outra"><span>OUTRA</span></label>
    </div>
  </div>
            <div class="campo"> MENSAGEM
                <textarea name="mensagem" rows="3" placeholder="Descreva o equipamento ou serviço pretendido"></textarea>
            </div>
            <input type="submit" value="ENVIAR PEDIDO">
        </form>
    </div>

</div>

  <h2 id="perimetro-seguranca">Perímetro de Segurança</h2>

  <div class="perimetro">
      <div class="perimetro-texto perimetro-texto-esquerda">
          <p>Em ambientes industriais, os sistemas de vedação perimetral de segurança são fundamentais para a proteção de operadores e transeuntes, <strong>reduzindo a exposição a riscos</strong> e salvaguardando a integridade física dos utilizadores. Constituem assim uma medida essencial para garantir <strong>condições de trabalho mais seguras</strong>.</p>
      </div>

      <div class="perimetro-imagens">
          <div class="caixa perimetro-caixa perimetro-grande">
              <img src="fotos_organizadas/Perimetro_Seguranca/Perimetro_Seguranca/IMG_2718.JPG" alt="Vedação perimetral com portas de correr e basculante">
          </div>
          <div class="caixa perimetro-caixa perimetro-pequena-cima">
              <img src="fotos_organizadas/Perimetro_Seguranca/Perimetro_Seguranca/IMG_2719.JPG" alt="Botoneira para controlo de acesso e emergência">
          </div>
          <div class="caixa perimetro-caixa perimetro-pequena-baixo">
              <img src="fotos_organizadas/Perimetro_Seguranca/Perimetro_Seguranca/IMG_4352.jpg" alt="Porta basculante com encravamento elétrico">
          </div>
      </div>

      <div class="perimetro-texto perimetro-texto-direita">
          <p>A Baldaque &amp; Vieira, Unipessoal, Lda, projeta e instala vedações perimetrais de segurança, com <strong>controlo de acessos</strong>, à medida do layout do Cliente e com possibilidade de <strong>integração do sistema</strong> com os <strong>dispositivos de comando</strong> dos equipamentos existentes.</p>
      </div>
  </div>

  <div class="lightbox-overlay" id="perimetro-lightbox">
      <button class="lightbox-fechar" onclick="fecharPerimetroLightbox()">&times;</button>
      <button class="lightbox-seta lightbox-seta-esq" onclick="perimetroLightboxMudar(-1)">&#8249;</button>
      <div class="lightbox-imagem-wrap">
          <img id="perimetro-lightbox-img" src="" alt="">
      </div>
      <button class="lightbox-seta lightbox-seta-dir" onclick="perimetroLightboxMudar(1)">&#8250;</button>
      <p class="lightbox-legenda" id="perimetro-lightbox-legenda"></p>
  </div>

  <script>
  (function() {
      const perimetroFotos = [
          { src: 'fotos_organizadas/Perimetro_Seguranca/Perimetro_Seguranca/IMG_2718.JPG', legenda: 'Vedação perimetral com portas de correr e basculante, providas de botoneiras para controlo de acesso e emergência.' },
          { src: 'fotos_organizadas/Perimetro_Seguranca/Perimetro_Seguranca/IMG_2719.JPG', legenda: 'Botoneira para controlo de acesso e emergência.' },
          { src: 'fotos_organizadas/Perimetro_Seguranca/Perimetro_Seguranca/IMG_4352.jpg', legenda: 'Porta basculante com encravamento elétrico.' },
      ];
      let perimetroIndice = 0;

      function atualizarPerimetroLightbox() {
          document.getElementById('perimetro-lightbox-img').src = perimetroFotos[perimetroIndice].src;
          document.getElementById('perimetro-lightbox-img').alt = perimetroFotos[perimetroIndice].legenda;
          document.getElementById('perimetro-lightbox-legenda').textContent = perimetroFotos[perimetroIndice].legenda;
      }

      window.fecharPerimetroLightbox = function() {
          document.getElementById('perimetro-lightbox').classList.remove('aberto');
          document.body.style.overflow = '';
      };

      window.perimetroLightboxMudar = function(direcao) {
          perimetroIndice = (perimetroIndice + direcao + perimetroFotos.length) % perimetroFotos.length;
          atualizarPerimetroLightbox();
      };

      document.querySelectorAll('.perimetro-caixa').forEach(function(caixa, i) {
          caixa.addEventListener('click', function() {
              perimetroIndice = i;
              atualizarPerimetroLightbox();
              document.getElementById('perimetro-lightbox').classList.add('aberto');
              document.body.style.overflow = 'hidden';
          });
      });

      document.getElementById('perimetro-lightbox').addEventListener('click', function(e) {
          if (e.target === this) fecharPerimetroLightbox();
      });

      document.addEventListener('keydown', function(e) {
          if (!document.getElementById('perimetro-lightbox').classList.contains('aberto')) return;
          if (e.key === 'Escape') fecharPerimetroLightbox();
          if (e.key === 'ArrowLeft') perimetroLightboxMudar(-1);
          if (e.key === 'ArrowRight') perimetroLightboxMudar(1);
      });
  })();
  </script>

</div>

</body>
<?php include 'footer.php'; ?>
</html>