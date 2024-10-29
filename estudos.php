<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meu Portifolio</title>
    </head>
    <body>
        <h1>Meu portifolio</h1>
        <?php
            $nome = "Allyson";
            $titulo = "Desenvolvedor Web";
            $descricao = "Desenvolvedor Web com experiência em PHP, HTML, CSS e JavaScript.";
            $ano = 2024;
            // $finalizado = true;
            $projetos = [
                ["nome" => "Sistema de Gestão Escolar",
                "descricao" => "Sistema de Gestão Escolar desenvolvido em PHP.",
                "ano" => 2023,
                "finalizado" => true],
                ["nome" => "Sistema de Gestão de Vendas",
                "descricao" => "Sistema de Gestão de Vendas desenvolvido em PHP.",
                "ano" => 2022,
                "finalizado" => false],
                ["nome" => "Sistema de Gestão de Estoque",
                "descricao" => "Sistema de Gestão de Estoque desenvolvido em PHP.",
                "ano" => 2021,
                "finalizado" => true],
                ["nome" => "Sistema de Gestão de RH",
                "descricao" => "Sistema de Gestão de RH desenvolvido em PHP.",
                "ano" => 2020,
                "finalizado" => false],
                ["nome" => "Sistema de Gestão de Projetos",
                "descricao" => "Sistema de Gestão de Projetos desenvolvido em PHP.",
                "ano" => 2019,
                "finalizado" => true],
                ["nome" => "Sistema de Gestão de Loja Carros",
                "descricao" => "Sistema de Gestão de Loja Carros desenvolvido em PHP.",
                "ano" => 2019,
                "finalizado" => true],
                ["nome" => "Sistema de Gestão loja de Motos",
                "descricao" => "Sistema de Gestão loja de Motos desenvolvido em PHP.",
                "ano" => 2019,
                "finalizado" => false],
                ["nome" => "Sistema de Gestão de Tarefas",
                "descricao" => "Sistema de Gestão de Tarefas desenvolvido em PHP.",
                "ano" => 2018,
                "finalizado" => false],
                ["nome" => "Sistema de Gestão de Clientes",
                "descricao" => "Sistema de Gestão de Clientes desenvolvido em PHP.",
                "ano" => 2017,
                "finalizado" => true],
                ["nome" => "Sistema de Gestão de Fornecedores",
                "descricao" => "Sistema de Gestão de Fornecedores desenvolvido em PHP.",
                "ano" => 2016,
                "finalizado" => false],
                ["nome" => "Sistema de Gestão de Compras",
                "descricao" => "Sistema de Gestão de Compras desenvolvido em PHP.",
                "ano" => 2015,
                "finalizado" => true],
                ["nome" => "Sistema de Gestão de Vendas",
                "descricao" => "Sistema de Gestão de Vendas desenvolvido em PHP.",
                "ano" => 2014,
                "finalizado" => false]
            ];

            function verificarSeEstaFinalizado($projeto){
                return $projeto["finalizado"] ? '<span style="color: green">✅ Finalizado</span>' : '<span style="color: red">❌ Não Finalizado</span>';
            }

            $projetosFiltrados = array_filter($projetos, function($projeto){
                // return $projeto["finalizado"];
                return $projeto["ano"] == 2019 && $projeto["finalizado"] == true;
            });

        ?>

        <h4>Projeto</h4>
        <?php foreach($projetosFiltrados as $projeto): ?>
                <h3><?= $projeto["nome"]; ?></h3>
                <p><?= $projeto["descricao"]; ?></p>
                <p>Ano: <?= $projeto["ano"]; ?></p>
                <p>Finalizado: <?= verificarSeEstaFinalizado($projeto); ?></p>
                <hr/>
        <?php endforeach; ?>

        <!-- <h2><?php echo $nome; ?></h2>
        <h3><?php echo $titulo; ?></h3>
        <p><?php echo $descricao; ?></p>
        <p>Este portifolio foi criado em <?php echo $ano; ?></p>
        <p>Está finalizado: <?= $finalizado ? "finalizado" : "Não finalizado"; ?></p>
        <hr/>
        <h4>Projeto</h4>
        <?php foreach($projetos as $key => $value):?>
            <h5><?= $value["nome"]; ?></h5>
            <p><?= $value["descricao"]; ?></p>
            <p>Ano: <?= $value["ano"]; ?></p>
            <p>finalizado: <?= $value["finalizado"] ? "finalizado" : "Não finalizado"; ?></p>
            <hr/>
        <?php endforeach; ?>
        
        <ul>
            <?php foreach ($projetos as $projeto) {
                echo "<li>{$projeto["nome"]} - {$projeto["descricao"]}</li>";    
            } ?>
        </ul> -->

        <!-- <?= $ano ?> -->
    </body>
</html>