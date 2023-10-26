<?php
    $select = $_POST['select'];
    $filmes = [
        [
            "genero" => 'terror',
            "nome" => 'Morto não fala', 
            "capa" => "./img/morto.jpg",
            "ano" => 2018,
            "brasileiro" => true;
        ],
        [
            "genero" => 'comedia',
            "nome" => 'O alto da Compadecida', 
            "capa" => "./img/compadecida.jpg",
            "ano" => 2004,
            "brasileiro" => true;
        ],
        [
            "genero" => 'acao',
            "nome" => 'Tropa de Elite', 
            "capa" => "./img/tropa.jpg",
            "ano" => 2007,
            "brasileiro" => true;
        ],
        [
            "genero" => 'drama',
            "nome" => 'Central do Brasil', 
            "capa" => "./img/central.jpg",
            "ano" => 1998,
            "brasileiro" => true;
        ],
        [
            "genero" => 'documentarios',
            "nome" => 'Senna', 
            "capa" => "./img/senna.jpg",
            "ano" => 2014,
            "brasileiro" => true;
        ],
        [
            "genero" => 'romance',
            "nome" => 'Esposa de Aluguel', 
            "capa" => "./img/caio.jpg",
            "ano" => 2022,
            "brasileiro" => true;
        ],
        [
            "genero" => 'suspense',
            "nome" => 'Quando Eu Era Vivo', 
            "capa" => "./img/drama.jpg",
            "ano" => 2003,
            "brasileiro" => true;
        ],
        [
            "genero" => 'ficcao',
            "nome" => 'Acquaria', 
            "capa" => "./img/acquaria.jpg",
            "ano" => 2003,
            "brasileiro" => true;
        ],
        /*------------*/
        [
            "genero" => 'terror',
            "nome" => 'Annabelle', 
            "capa" => "./img/annabelle.jpg",
            "ano" => 2014,
            "brasileiro" => false;
        ],
        [
            "genero" => 'comedia',
            "nome" => 'As Branquelas', 
            "capa" => "./img/branquelas.jpg",
            "ano" => 2004,
            "brasileiro" => false;
        ],
        [
            "genero" => 'acao',
            "nome" => 'Cavelheiros do Zodíaco', 
            "capa" => "./img/cavalheiros.jpg",
            "ano" => 2023,
            "brasileiro" => false;
        ],
        [
            "genero" => 'drama',
            "nome" => 'Scarface', 
            "capa" => "./img/scarface.jpg",
            "ano" => 1983,
            "brasileiro" => false;

        ],
        [
            "genero" => 'documentarios',
            "nome" => 'One child Nation', 
            "capa" => "./img/onechild.jpg",
            "ano" => 2019,
            "brasileiro" => false;
        ],
        [
            "genero" => 'suspense',
            "nome" => 'Scarface', 
            "capa" => "./img/scarface.jpg",
            "ano" => 1983,
            "brasileiro" => false;
        ],
        [
            "genero" => 'romance',
            "nome" => 'Elementos', 
            "capa" => "./img/elementos.webp",
            "ano" => 2023,
            "brasileiro" => false;
        ],
        [
            "genero" => 'ficcao',
            "nome" => 'Castlevania', 
            "capa" => "./img/castlevania.jpg",
            "ano" => 2023,
            "brasileiro" => false;
        ],
    ];

        foreach($filmes as $filme){
            if($filme['genero'] == $select){
                echo `<div>`;
                echo $filme['nome'];
                echo "<br/>";
                echo "<img src=\"{$filme['capa']}\">";
                echo "<br/>";
                echo $filme['ano'];
                echo "<br/>";
                echo `</div>`;
            }
        }
