<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="css/empresa.css">
<?php include 'nav.php'; ?>
        <div class="capa">
    <div class="capa-texto">
        <h4>Empresa</h4>
        <h1>Engenharia industrial com qualidade e durabilidade</h1>
        <p>Soluções personalizadas em fabrico, manutenção e assistência técnica de máquinas industriais.</p>
    </div>
    <div class="capa-retangulos">
        <div class="capa-ret capa-ret-1">
            <span class="material-symbols-outlined">build</span>
            <p>Fabrico à medida</p>
        </div>
        <div class="capa-ret capa-ret-2">
            <span class="material-symbols-outlined">settings</span>
            <p>Assistência técnica</p>
        </div>
        <div class="capa-ret capa-ret-3">
            <span class="material-symbols-outlined">Factory</span>
            <p>Soluções industriais</p>
        </div>
    </div>
</div>
          <div class ="historia">
            <img src="../fabrica.jpeg" alt="Fábrica">
            <div class="f_dir">
              <h1> A nossa história </h1>
            <p>  Fundada em 2012 por Tiago Baldaque e José Vieira, tem como principal actividade o fabrico, manutenção e assistência técnica de máquinas industriais.</p>
            <p>Desenvolve a sua actividade no concelho de Santa Maria da Feira, tendo o crescimento da carteira de encomendas despoletado a mudança para instalações de maior dimensão, transitando, no ano de 2014, de Rio Meão para a freguesia limítrofe de Paços de Brandão.</p>
            <p>Atualmente, a actividade direcciona-se maioritariamente para empresas do sector corticeiro, vitivinícola e alimentar. O principal mercado de destino é o nacional, seguindo-se o comunitário, nomeadamente o francês e o espanhol.</p>
            <a href ="produtos.php"> Conheça os nossos produtos </a>
            
          </div>
            
        </div>
        <div class="missao-visao">

  <div class="mv-bloco" id="bloco-missao" onclick="mostrar('missao')">
    <span class="material-symbols-outlined">target</span>
    <h3>A Nossa Missão</h3>
    <p class="mv-texto" id="texto-missao" style="display:none;">
      Desenvolver soluções inovadoras e personalizadas que simplifiquem processos, melhorem o desempenho e acrescentem valor aos nossos clientes.
    </p>
  </div>

  <div class="mv-bloco" id="bloco-visao" onclick="mostrar('visao')">
    <span class="material-symbols-outlined">visibility</span>
    <h3>A Nossa Visão</h3>
    <p class="mv-texto" id="texto-visao" style="display:none;">
      Ser uma referência nacional na engenharia industrial, pela qualidade,inovação e compromisso com os nossos clientes
    </p>
  </div>
  </div>
  
  <script>
    
let timerReset;

function mostrar(qual) {
    const blocoMissao = document.getElementById('bloco-missao');
    const blocoVisao = document.getElementById('bloco-visao');
    const textoMissao = document.getElementById('texto-missao');
    const textoVisao = document.getElementById('texto-visao');

    clearTimeout(timerReset);

    if (qual === 'missao') {
        blocoVisao.classList.add('escondido');
        blocoMissao.classList.remove('escondido');
        textoMissao.style.display = 'none';
        textoVisao.style.display = 'block';
    } else {
        blocoMissao.classList.add('escondido');
        blocoVisao.classList.remove('escondido');
        textoVisao.style.display = 'none';
        textoMissao.style.display = 'block';
    }

    timerReset = setTimeout(resetEstado, 30000);
}

function resetEstado() {
    const blocoMissao = document.getElementById('bloco-missao');
    const blocoVisao = document.getElementById('bloco-visao');
    const textoMissao = document.getElementById('texto-missao');
    const textoVisao = document.getElementById('texto-visao');

    blocoMissao.classList.remove('escondido');
    blocoVisao.classList.remove('escondido');
    textoMissao.style.display = 'none';
    textoVisao.style.display = 'none';
}
</script>

<div class="premio">
   
    <div class="premio-texto">
        <h2>O que nos diferencia</h2>
        <p>A Baldaque & Vieira aposta na personalização de serviços, objetivando que cada máquina não encontre um padrão de produção, mas sim uma adaptação a cada necessidade especifica dos clientes, de forma que o resultado final seja único e intransmissível.</p>
    </div>
    <div class="premio-barra"></div>
    <img src="../OneDrive_2026-06-23/Site - BeV/Logos/PME_Excelencia_2024/Logos-PME-Excelencia-2024/Imagens/logo_PME Excelencia_2024_cores_CMYK.png" alt="PME 2024">
</div>
      

<div class="clientes">
    <h2>Os nossos clientes</h2>
    <div class="clientes_carrossel">
        <img src="../clientes/1_cork_suply_e.png" alt="Cliente 1">
        <img src="../clientes/2_amorim_cork.png" alt="Cliente 2">
        <img src="../clientes/3_diam.png" alt="Cliente 3">
        <img src="../clientes/4_frulact.png" alt="Cliente 4">
        <img src="../clientes/5_rozes_e.png" alt="Cliente 5">
        <img src="../clientes/6_jps_e.png" alt="Cliente 6">
        <img src="../clientes/7_unicor_e.png" alt="Cliente 7">
        <img src="../clientes/8_socori_e.png" alt="Cliente 8">
        <img src="../clientes/9_amorim_top_series.png" alt="Cliente 9">
        <img src="../clientes/10_ma_silva.png" alt="Cliente 10">
        <img src="../clientes/11_lafitte.webp" alt="Cliente 11">
        <img src="../clientes/12_ja_e.png" alt="Cliente 12">
    </div>
    <div class="clientes_dots"></div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const carrossel = document.querySelector('.clientes_carrossel');
    const dotsContainer = document.querySelector('.clientes_dots');

    if (!carrossel || !dotsContainer) return;

    function montarDots(){
        const paginas = Math.ceil(carrossel.scrollWidth / carrossel.clientWidth);
        dotsContainer.innerHTML = '';
        for(let i = 0; i < paginas; i++){
            const dot = document.createElement('span');
            dot.addEventListener('click', () => {
                carrossel.scrollTo({ left: i * carrossel.clientWidth, behavior: 'smooth' });
            });
            dotsContainer.appendChild(dot);
        }
        atualizarDotAtivo();
    }

    function atualizarDotAtivo(){
        const maxScroll = carrossel.scrollWidth - carrossel.clientWidth;
        let pagina;
        if (carrossel.scrollLeft >= maxScroll - 2) {
            pagina = dotsContainer.children.length - 1; // chegou ao fim: pinta sempre a última
        } else {
            pagina = Math.round(carrossel.scrollLeft / carrossel.clientWidth);
        }
        [...dotsContainer.children].forEach((dot, i) => dot.classList.toggle('ativo', i === pagina));
    }

    carrossel.addEventListener('scroll', atualizarDotAtivo);
    window.addEventListener('resize', montarDots);
    window.addEventListener('load', montarDots);
    montarDots();
});
</script>
<script>
const sidebar = document.querySelector('nav');
const logo = document.querySelector('nav img');

const logoNormal = '../BeV_logo_preto.png';           
const logoScrolled = '../BeV_logo_branco_incompleto.png'; 


const darkSections = document.querySelectorAll('.capa');


const ANTECIPACAO = 60;

function updateSidebar() {
  const navHeight = sidebar.offsetHeight;
  const checkPoint = navHeight + ANTECIPACAO;

  let overDark = false;
  darkSections.forEach(section => {
    const rect = section.getBoundingClientRect();
    if (rect.top <= checkPoint && rect.bottom >= checkPoint) {
      overDark = true;
    }
  });

  if (overDark) {
    
    sidebar.classList.remove('scrolled');
    logo.src = logoNormal;
  } else {
    
    sidebar.classList.add('scrolled');
    logo.src = logoScrolled;
  }
}

window.addEventListener('scroll', updateSidebar);
window.addEventListener('load', updateSidebar);
window.addEventListener('resize', updateSidebar);
</script>
    </body>

    <?php include 'footer.php'; ?>