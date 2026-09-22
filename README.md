# Baldaque & Vieira — Website

Website institucional desenvolvido para a Baldaque & Vieira, empresa portuguesa especializada no fabrico, manutenção e assistência técnica de maquinaria industrial em aço inoxidável, com atuação nos setores corticeiro, vitivinícola e alimentar.

Stack: HTML5 · CSS3 · PHP · JavaScript <br>
Website: [baldaque-e-vieira.pt](https://www.baldaque-e-vieira.pt/)

## Screenshots

<img width="450"  alt="imagem incial" src="https://github.com/user-attachments/assets/9e34b1b5-d078-4d15-9841-8e52d1562e1e" />
<img width="450"  alt="mercado alvo - home_page" src="https://github.com/user-attachments/assets/aceef7a9-4490-4627-be44-3fdbf89f292c" />


<img width="450" alt="produtos corticeiro" src="https://github.com/user-attachments/assets/0d41b0bb-6820-4fcc-843e-c7cb0f19560c" />
<img width="450" alt="formulário de contacto" src="https://github.com/user-attachments/assets/85e2668f-7e06-4195-9ad8-d591bf8da5a7" />

## Sobre o projeto

Website institucional moderno e responsivo, criado para apresentar a empresa, os seus serviços e soluções industriais, reforçando a presença digital e facilitando o contacto com potenciais clientes. O design foi pensado para transmitir uma imagem profissional, tecnológica e industrial, mantendo uma navegação simples e intuitiva, com foco numa experiência de utilização B2B.

### Objetivos

- Apresentar a empresa e a sua experiência
- Divulgar os produtos e soluções desenvolvidos
- Apresentar os serviços disponibilizados
- Destacar os setores de atividade
- Facilitar o contacto com a empresa
- Garantir uma experiência consistente em desktop, tablet e mobile
- Criar uma presença digital adequada ao posicionamento B2B da empresa

## Funcionalidades

- Apresentação institucional da empresa
- Catálogo de produtos e soluções, com galeria de fotos e lightbox
- Secção de serviços e de mercados de atuação
- Secção dedicada aos setores de atividade
- Carrossel de logótipos de clientes
- Formulário de pedido de orçamento, com envio por email
- Design totalmente responsivo
- Navbar com efeito de scroll dinâmico
- Interface otimizada para navegação rápida

## Tecnologias

- HTML5 — estrutura semântica das páginas
- CSS3 — estilização, variáveis de design e responsividade
- PHP — templating de componentes (header, nav, footer) e páginas dinâmicas (ex.: ficha de produto por `?id=`)
- JavaScript — interatividade (scroll da navbar, galeria/lightbox de imagens)

## Estrutura do projeto

```
BALDAQUE/
├── code/                         ← raiz pública do site
│   ├── css/
│   │   ├── variables.css         # cores, espaçamentos
│   │   ├── generic.css           # reset + estilos partilhados
│   │   ├── nav.css
│   │   ├── footer.css
│   │   ├── home_page.css
│   │   ├── empresa.css
│   │   ├── produtos.css
│   │   └── maquina.css
│   ├── js/
│   │   ├── sidebar-scroll.js     # navbar que escurece ao fazer scroll
│   │   └── produto-galeria.js    # galeria + lightbox de fotos
│   ├── header.php                # <head>, meta tags, links CSS
│   ├── nav.php                   # navbar + modal de orçamento
│   ├── footer.php
│   ├── home_page.php             # página inicial
│   ├── empresa.php               # sobre a empresa
│   ├── produtos.php              # setores + perímetro de segurança
│   ├── produtos-cards.php        # cards do setor corticeiro
│   ├── maquina.php               # ficha de produto (recebe ?id=)
│   ├── maquina-data.php          # dados de cada máquina (fotos, specs)
│   ├── enviar-orcamento.php      # processa formulários e envia email
│   └── .htaccess                 # define home_page.php como homepage
│
├── fotos_organizadas/            ← imagens dos produtos, por máquina/setor
├── clientes/                     ← logótipos do carrossel "Os nossos clientes"
└── (logótipos, ícones e imagens institucionais)
```

## Design & UX

O design foi pensado para equilibrar identidade visual corporativa, apresentação clara da informação técnica, imagens de grande impacto, hierarquia visual e facilidade de navegação em diferentes tamanhos de ecrã. A experiência foi desenhada sobretudo para utilizadores B2B, onde a clareza sobre produtos, serviços e formas de contacto é essencial para gerar pedidos de orçamento.

## Execução local

```bash
git clone https://github.com/gitbaldi/Baldaque-Vieira.git
cd Baldaque-Vieira
```

Por ser um projeto em PHP, recomenda-se correr num servidor local com suporte a PHP (por exemplo `php -S localhost:8000` a partir da pasta `code/`, ou a extensão PHP Server / Live Server do VS Code).

## Licença

Este projeto foi desenvolvido para a Baldaque & Vieira, Unipessoal, Lda. O código e os restantes recursos deste repositório não devem ser reutilizados, distribuídos ou comercializados sem autorização do respetivo autor e/ou da empresa. Repositório partilhado apenas para fins de portefólio.

## Contacto

**Baldaque & Vieira, Unipessoal, Lda.**  
Paços de Brandão, Santa Maria da Feira, Portugal <br> 
geral@baldaque-e-vieira.pt  <br>
+351 220 991 303   <br>
[baldaque-e-vieira.pt](https://www.baldaque-e-vieira.pt/)

---

Desenvolvido por [Ana Baldaque](https://github.com/gitbaldi)
   
