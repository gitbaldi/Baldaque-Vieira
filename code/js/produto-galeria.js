let indiceFoto = 0;

function montarGaleria() {
    const container = document.getElementById('lista-miniaturas');
    container.innerHTML = '';
    fotos.forEach((foto, i) => {
        const img = document.createElement('img');
        img.src = foto.src;
        img.alt = foto.legenda;
        img.className = i === indiceFoto ? 'ativa' : '';
        img.addEventListener('click', () => {
            indiceFoto = i;
            atualizarFoto();
        });
        container.appendChild(img);
    });
}

function atualizarFoto() {
    document.getElementById('foto-ativa').src = fotos[indiceFoto].src;
    document.getElementById('foto-ativa').alt = fotos[indiceFoto].legenda;
    document.getElementById('legenda-foto').textContent = fotos[indiceFoto].legenda;

    document.querySelectorAll('.miniaturas img').forEach((img, i) => {
        img.classList.toggle('ativa', i === indiceFoto);
    });
}

function mudarFoto(direcao) {
    indiceFoto = (indiceFoto + direcao + fotos.length) % fotos.length;
    atualizarFoto();
}

function montarModelos() {
    const container = document.getElementById('lista-modelos');
    container.innerHTML = '';
    Object.keys(modelos).forEach(chave => {
        const span = document.createElement('span');
        span.className = 'modelo' + (chave === modeloAtivo ? ' modelo-ativo' : '');
        span.textContent = modelos[chave].nome;
        span.addEventListener('click', () => {
            modeloAtivo = chave;
            montarModelos();
            atualizarSpecs();
        });
        container.appendChild(span);
    });
}

function atualizarSpecs() {
    const m = modelos[modeloAtivo];
    document.getElementById('lista-specs').innerHTML = `
        <div class="spec-linha">
            <span>Capacidade nominal</span>
            <span>${m.capacidade}</span>
        </div>
        <div class="spec-linha">
            <span>${m.spec_label}</span>
            <span>${m.spec_valor}</span>
        </div>
        <div class="spec-linha">
            <span>Material</span>
            <span>Aço inoxidável</span>
        </div>
    `;
}

function abrirLightbox() {
    document.getElementById('lightbox').classList.add('aberto');
    document.body.style.overflow = 'hidden';
    montarLightboxMiniaturas();
    atualizarLightbox();
}

function fecharLightbox() {
    document.getElementById('lightbox').classList.remove('aberto');
    document.body.style.overflow = '';
}

function lightboxMudar(direcao) {
    indiceFoto = (indiceFoto + direcao + fotos.length) % fotos.length;
    atualizarFoto();
    atualizarLightbox();
}

function atualizarLightbox() {
    document.getElementById('lightbox-img').src = fotos[indiceFoto].src;
    document.getElementById('lightbox-img').alt = fotos[indiceFoto].legenda;
    document.getElementById('lightbox-legenda').textContent = fotos[indiceFoto].legenda;
    document.getElementById('lightbox-contador').textContent = `${indiceFoto + 1} / ${fotos.length}`;

    document.querySelectorAll('.lightbox-miniaturas img').forEach((img, i) => {
        img.classList.toggle('ativa', i === indiceFoto);
    });
}

function montarLightboxMiniaturas() {
    const container = document.getElementById('lightbox-miniaturas');
    container.innerHTML = '';
    fotos.forEach((foto, i) => {
        const img = document.createElement('img');
        img.src = foto.src;
        img.alt = foto.legenda;
        img.className = i === indiceFoto ? 'ativa' : '';
        img.addEventListener('click', () => {
            indiceFoto = i;
            atualizarFoto();
            atualizarLightbox();
        });
        container.appendChild(img);
    });
}

document.addEventListener('keydown', function(e) {
    if (!document.getElementById('lightbox').classList.contains('aberto')) return;
    if (e.key === 'Escape') fecharLightbox();
    if (e.key === 'ArrowLeft') lightboxMudar(-1);
    if (e.key === 'ArrowRight') lightboxMudar(1);
});

document.addEventListener('DOMContentLoaded', function() {
    montarGaleria();
    atualizarFoto();
    montarModelos();
    atualizarSpecs();
    document.getElementById('foto-ativa').addEventListener('click', abrirLightbox);
});
