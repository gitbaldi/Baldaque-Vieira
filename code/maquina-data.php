<?php

$maquinas = [
    'cd' => [
        'titulo' => 'Câmara de Desinfeção de Cortiça',
        'subtitulo' => 'Construída integralmente em aço inoxidável — Mod. CD600K',
        'caracteristicas_sub' => 'Estrutura, aquecimento, ventilação e monitorização',
        'caracteristicas' => [
            [
                'titulo' => 'Estrutura e automação',
                'itens' => [
                    'Construída integralmente em chapa de aço inoxidável',
                    'Automação integrada e personalizada de acordo com a especificidade do processo do cliente',
                ],
            ],
            [
                'titulo' => 'Sistema de aquecimento',
                'itens' => [
                    'Baterias verticais vapor/ar em tubo de aço inoxidável, com coletores e tubos verticais alhetados',
                ],
            ],
            [
                'titulo' => 'Sistema de ventilação',
                'itens' => [
                    'Ventilação interna de alto caudal e pressão, com ventiladores axiais de aço inoxidável e turbina reversível em alumínio',
                    'Ventilação externa (exaustão) com ventilador centrífugo de média pressão em aço inoxidável, com atuadores elétricos para comutação entre exaustão e remontagem de ar interior',
                ],
            ],
            [
                'titulo' => 'Monitorização',
                'itens' => [
                    'Sondas de medição de temperatura e humidade intercambiáveis, em aço inoxidável, com transmissor multifunções',
                ],
            ],
        ],
        'fotos' => [
            ['src' => 'fotos_organizadas/Selecao_CD/Selecao_CD/Capa.jpg', 'legenda' => 'Vista frontal'],
            ['src' => 'fotos_organizadas/Selecao_CD/Selecao_CD/Interior.jpg', 'legenda' => 'Vista interior'],
            ['src' => 'fotos_organizadas/Selecao_CD/Selecao_CD/Bateria_Aquecimento.jpg', 'legenda' => 'Bateria de aquecimento'],
            ['src' => 'fotos_organizadas/Selecao_CD/Selecao_CD/Ventilacao_Interna.jpg', 'legenda' => 'Sistema de ventilação interna'],
        ],
        'modelos' => [
            'CD600K' => [
                'nome' => 'CD 600K',
                'capacidade' => '600 000 rolhas, calibre 45x24 mm (24 carros de 25 000 rolhas)',
                'spec_label' => 'Dimensões exteriores',
                'spec_valor' => '7200 x 5520 x 3080 mm',
            ],
        ],
        'modelo_ativo' => 'CD600K',
    ],

    'mdg2' => [
        'titulo' => 'Máquina de Desinfeção e Secagem de Granulado',
        'subtitulo' => 'Construída integralmente em aço inoxidável — Mod. MDG2',
        'caracteristicas_sub' => 'Estrutura, desinfeção, automação e eficiência',
        'caracteristicas' => [
            [
                'titulo' => 'Estrutura e construção',
                'itens' => [
                    'Construída integralmente em chapa de aço inoxidável',
                    'Sistema hidráulico para basculamento',
                    'Sistema de vedação perimetral de segurança integrado na automação do equipamento',
                ],
            ],
            [
                'titulo' => 'Lavagem e desinfeção',
                'itens' => [
                    'Sistema de lavagem de alta pressão para o interior da máquina',
                    'Sistema para injeção de vapor',
                    'Sistema de secagem',
                ],
            ],
            [
                'titulo' => 'Automação e controlo',
                'itens' => [
                    'Automação integrada e personalizada de acordo com a especificidade do processo do cliente',
                    'Sistema de carga e descarga totalmente automático, comandado por intermédio de HMI',
                    'Controlo da desinfeção "batch" a "batch", permitindo uma análise diferenciada aos lotes',
                ],
            ],
            [
                'titulo' => 'Eficiência e desempenho',
                'itens' => [
                    'Ciclos de desinfeção com vapor a 6 bar (160ºC) e temperatura de ar quente a 135ºC',
                    'Sistema de correção de humidade à saída do processo de desinfeção',
                    'Consumo de vapor aproximado de 600 kg/h',
                ],
            ],
        ],
        'fotos' => [
            ['src' => 'fotos_organizadas/Selecao_MDG2/Selecao_MDG2/Sistema_aquecimento_gerador.jpg', 'legenda' => 'Sistema de aquecimento — gerador'],
            ['src' => 'fotos_organizadas/Selecao_MDG2/Selecao_MDG2/Sistema_aquecimento_vapor.jpg', 'legenda' => 'Sistema de aquecimento a vapor'],
            ['src' => 'fotos_organizadas/Selecao_MDG2/Selecao_MDG2/Sistema_correcao_humidade.jpg', 'legenda' => 'Sistema de correção de humidade'],
            ['src' => 'fotos_organizadas/Selecao_MDG2/Selecao_MDG2/Sistema_exaustao_duplo.JPG', 'legenda' => 'Sistema de exaustão duplo'],
        ],
        'modelos' => [
            'MDG2' => [
                'nome' => 'MDG2',
                'capacidade' => '2 Big-Bags de granulado (aprox. 7 m³)',
                'spec_label' => 'Consumo de vapor',
                'spec_valor' => '≈ 600 kg/h de vapor',
            ],
        ],
        'modelo_ativo' => 'MDG2',
    ],

    'mlb300k' => [
        'titulo' => 'Máquina de lavar, branquear e pré-secar rolhas',
        'subtitulo' => 'Construída integralmente em aço inoxidável',
        'caracteristicas_sub' => 'Estrutura, lavagem, automação e energia',
        'caracteristicas' => [
            [
                'titulo' => 'Estrutura e construção',
                'itens' => [
                    'Construída integralmente em chapa de aço inoxidável',
                    'Sistema hidráulico para basculamento',
                    'Sistema de vedação perimetral de segurança integrado na automação',
                ],
            ],
            [
                'titulo' => 'Processo de lavagem',
                'itens' => [
                    'Sistema de pré-secagem de rolhas',
                    'Sistema de lavagem de alta pressão para o interior da máquina',
                    'Sistema para armazenagem, doseamento e injeção de reagentes',
                ],
            ],
            [
                'titulo' => 'Automação e controlo',
                'itens' => [
                    'Automação integrada e personalizada de acordo com a especificidade do processo do cliente',
                    'Sistema de carga e descarga totalmente automático, comandado por intermédio de HMI',
                ],
            ],
            [
                'titulo' => 'Eficiência energética',
                'itens' => [
                    'Sistema inteligente para otimização de energia e reagentes',
                    'Sistema de cálculo automático para doseamento de reagentes e aquecimento',
                ],
            ],
        ],
        'fotos' => [
            ['src' => 'fotos_organizadas/Selecao_MLB300K/Selecao_MLB300K/Basculamento_Carga.jpg', 'legenda' => 'Basculamento de carga'],
            ['src' => 'fotos_organizadas/Selecao_MLB300K/Selecao_MLB300K/Basculamento_Descarga.jpg', 'legenda' => 'Basculamento de descarga'],
            ['src' => 'fotos_organizadas/Selecao_MLB300K/Selecao_MLB300K/Armazenamento_Reagentes_IBC.jpg', 'legenda' => 'Armazenamento de reagentes'],
            ['src' => 'fotos_organizadas/Selecao_MLB300K/Selecao_MLB300K/Sistema_aquecimento_gas.jpg', 'legenda' => 'Sistema de aquecimento a gás'],
            ['src' => 'fotos_organizadas/Selecao_MLB300K/Selecao_MLB300K/Pesagem_Reagentes.jpg', 'legenda' => 'Pesagem de reagentes'],
            ['src' => 'fotos_organizadas/Selecao_MLB300K/Selecao_MLB300K/Sistema_Carga_Automatica.jpg', 'legenda' => 'Sistema de carga automática'],
        ],
        'modelos' => [
            '300K' => ['nome' => 'MLB 300K', 'capacidade' => '100 000 rolhas', 'spec_label' => 'Dimensão de rolha', 'spec_valor' => '38x24 mm'],
            '60K' => ['nome' => 'MLB 60K', 'capacidade' => '60 000 rolhas', 'spec_label' => 'Dimensão de rolha', 'spec_valor' => '38x24 mm'],
            '25K' => ['nome' => 'MLB 25K', 'capacidade' => '25 000 rolhas', 'spec_label' => 'Dimensão de rolha', 'spec_valor' => '38x24 mm'],
        ],
        'modelo_ativo' => '300K',
    ],
];
