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
  <h2> Setor Corticeiro </h2>

  <a href="maquina-mlb300k.html" class="caixa">
    <img src="../fotos_organizadas/Selecao_MLB300K/Selecao_MLB300K/capa_centrada.jpeg" alt="Máquina de lavar, branquear e pré-secar rolhas e discos de cortiça">
    <div class="caixa_overlay">
      <p>Corticeiro</p>
      <h4>Máquina de lavar, branquear e pré-secar rolhas e discos de cortiça</h4>
    </div>
  </a>

  <a href="maquina-mdg2.html" class="caixa">
    <img src="../fotos_organizadas/Selecao_MDG2/Selecao_MDG2/Capa2.JPG" alt="Máquina de Desinfeção de Granulado de Cortiça">
    <div class="caixa_overlay">
      <p>Corticeiro</p>
      <h4>Máquina de Desinfeção de Granulado de Cortiça</h4>
    </div>
  </a>

  <a href="maquina-cd.html" class="caixa">
    <img src="../fotos_organizadas/Selecao_CD/Selecao_CD/tentativa2.png" alt="Câmara de Desinfeção de Cortiça">
    <div class="caixa_overlay">
      <p>Corticeiro</p>
      <h4>Câmara de Desinfeção de Cortiça</h4>
    </div>
  </a>
</div>
  

  <h2>Setor Vitivinícola e Alimentar</h2>

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
                <img src="../IMG_1488.jpg" alt="Equipamento personalizado para o setor vitivinícola">
            </div>
            <div class="viti-texto">
                <p>Cada empresa tem necessidades diferentes. Por isso, desenvolvemos <strong>soluções e equipamentos adaptados </strong> à realidade de cada cliente, tendo em conta os seus processos, instalações e objetivos.</p>
                <p>Cada solução é desenvolvida de acordo com as <strong>necessidades específicas</strong> de cada cliente, garantindo equipamentos funcionais, eficientes e adaptados aos seus processos de trabalho.</p>
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
                <p>O nosso compromisso é <strong>acompanhar cada cliente</strong> de forma próxima, encontrando soluções práticas e à medida das suas necessidades.</p>
            </div>
            <div class="viti-foto">
                <img src="../OneDrive_2026-06-23/Site - BeV/Fotos Site/BOA_IMG_5767.jpg" alt="Equipamento em aço inoxidável, setor vitivinícola">
            </div>
        </div>
    </div>

    <div class="orcamento">
        <p class="linha-topo">FALE CONOSCO</p>
        <h3>Peça o seu Orçamento</h3>
        <p class="orcamento-desc">Descreva o equipamento ou serviço do qual quer receber mais informações.</p>

        <form>
             <div class= "campo">NOME <input name="nome" type="text" placeholder="O seu nome"></div>
             <div class= "campo">EMPRESA <input name="nome" type="text" placeholder="Nome da Empresa"></div>
             <div class= "campo">EMAIL <input name="nome" type="email" placeholder="Email"></div>
             <div class= "campo">TELEFONE <input name="nome" type="tel" placeholder="Telefone"></div>
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
</div>

</body>
<?php include 'footer.php'; ?>
</html>