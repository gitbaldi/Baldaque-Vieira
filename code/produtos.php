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

  

  <h2>Setor Vitivinícola e Alimentar</h2>

<div class="viti">

    <div class="viti-conteudo">
        <div class="viti-bloco">
            <div class="viti-foto">
                <img src="../IMG_1488.jpg" alt="Equipamento personalizado para o setor vitivinícola">
            </div>
            <div class="viti-texto">
                <p>Cada empresa tem necessidades diferentes. Por isso, desenvolvemos soluções e equipamentos adaptados à realidade de cada cliente, tendo em conta os seus processos, instalações e objetivos.</p>
                <p>Cada solução é desenvolvida de acordo com as necessidades específicas de cada cliente, garantindo equipamentos funcionais, eficientes e adaptados aos seus processos de trabalho.</p>
            </div>
        </div>

        <div class="viti-bloco">
            <div class="viti-texto">
                <p>Para além do desenvolvimento de soluções personalizadas, asseguramos também serviços de reparação, manutenção e assistência técnica, contribuindo para o bom funcionamento e maior durabilidade dos equipamentos.</p>
                <p>O nosso compromisso é acompanhar cada cliente de forma próxima, encontrando soluções práticas e à medida das suas necessidades.</p>
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
            <div class="campo">
                <input name="nome" type="text" placeholder="O seu nome">
            </div>
            <div class="campo">
                <input name="empresa" type="text" placeholder="Nome da empresa">
            </div>
            <div class="campo">
                <input name="email" type="email" placeholder="nome@empresa.pt">
            </div>
            <div class="campo">
                <input name="telefone" type="tel" placeholder="+351...">
            </div>
            <div class="campo">
                <select name="setor">
                    <option value="">Setor</option>
                    <option value="corticeira">Corticeira</option>
                    <option value="vitivinicola">Vitivinícola</option>
                    <option value="alimentar">Alimentar</option>
                    <option value="outra">Outra</option>
                </select>
            </div>
            <div class="campo">
                <textarea name="mensagem" rows="3" placeholder="Descreva o pedido"></textarea>
            </div>
            <input type="submit" value="ENVIAR PEDIDO">
        </form>
    </div>

</div>
</div>

</body>
<?php include 'footer.php'; ?>
</html>