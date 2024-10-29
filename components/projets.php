<?php
    $projects = [
        ["name" => "Gestão Escolar",
            "description" => " Software de Gestão Escolar desenvolvido em PHP.",
            "year" => 2023,
            "completed" => true,
            "technologies" => ["PHP", "Symfony", "HTML5", "CSS3", "React"],
            "image" => "./assets/img/software-de-design.png",
        ],

        ["name" => "Gestão de Vendas",
            "description" => " Software de Gestão de Vendas desenvolvido em PHP.",
            "year" => 2022,
            "completed" => false,
            "technologies" => ["PHP", "CodeIgniter", "HTML5", "CSS3", "Vue.js"],
            "image" => "./assets/img/software-de-design.png",
        ],

        ["name" => "Gestão de Estoque",
            "description" => " Software de Gestão de Estoque desenvolvido em PHP.",
            "year" => 2021,
            "completed" => true,
            "technologies" => ["PHP", "Zend", "HTML5", "CSS3", "Angular"],
            "image" => "./assets/img/software-de-design.png",
        ],

        ["name" => "Gestão de RH",
            "description" => " Software de Gestão de RH desenvolvido em PHP.",
            "year" => 2020,
            "completed" => false,
            "technologies" => ["PHP", "Yii", "HTML5", "CSS3", "Svelte"],
            "image" => "./assets/img/software-de-design.png",
        ],

        ["name" => "Gestão de Projetos",
            "description" => " Software de Gestão de Projetos desenvolvido em PHP.",
            "year" => 2019,
            "completed" => true,
            "technologies" => ["PHP", "Laravel", "HTML5", "CSS3", "React"],
            "image" => "./assets/img/software-de-design.png",
        ],

        ["name" => "Gestão de Loja Carros",
            "description" => " Software de Gestão de Loja Carros desenvolvido em PHP.",
            "year" => 2019,
            "completed" => true,
            "technologies" => ["PHP", "Symfony", "HTML5", "CSS3", "Vue.js"],
            "image" => "./assets/img/software-de-design.png",
        ],

        ["name" => "Gestão loja de Motos",
            "description" => " Software de Gestão loja de Motos desenvolvido em PHP.",
            "year" => 2019,
            "completed" => false,
            "technologies" => ["PHP", "CodeIgniter", "HTML5", "CSS3", "Angular"],
            "image" => "./assets/img/software-de-design.png",
        ],

        ["name" => "Gestão de Tarefas",
            "description" => " Software de Gestão de Tarefas desenvolvido em PHP.",
            "year" => 2018,
            "completed" => false,
            "technologies" => ["PHP", "Zend", "HTML5", "CSS3", "Svelte"],
            "image" => "./assets/img/software-de-design.png",
        ],

        ["name" => "Gestão de Clientes",
            "description" => " Software de Gestão de Clientes desenvolvido em PHP.",
            "year" => 2017,
            "completed" => true,
            "technologies" => ["PHP", "Yii", "HTML5", "CSS3", "React"],
            "image" => "./assets/img/software-de-design.png",
        ],

        ["name" => "Gestão de Fornecedores",
            "description" => " Software de Gestão de Fornecedores desenvolvido em PHP.",
            "year" => 2016,
            "completed" => false,
            "technologies" => ["PHP", "Laravel", "HTML5", "CSS3", "Vue.js"],
            "image" => "./assets/img/software-de-design.png",
        ],

        ["name" => "Gestão de Compras",
            "description" => " Software de Gestão de Compras desenvolvido em PHP.",
            "year" => 2015,
            "completed" => true,
            "technologies" => ["PHP", "Symfony", "HTML5", "CSS3", "Angular"],
            "image" => "./assets/img/software-de-design.png",
        ],

        ["name" => "Gestão de Vendas",
            "description" => " Software de Gestão de Vendas desenvolvido em PHP.",
            "year" => 2014,
            "completed" => false,
            "technologies" => ["PHP", "CodeIgniter", "HTML5", "CSS3", "Svelte"],
            "image" => "./assets/img/software-de-design.png",
        ],
    ];
?>

<section class="gap-x-6 py-6" id="projects">
    <h2 class="text-2xl font-bold mb-6"> Meus Projetos</h2>
    <?php foreach($projects as $project): ?>
        <div class="bg-slate-800 rounded-lg p-3 flex items-center my-3">
            <div class="w-1/5 space-x-3">
                <img src="<?= $project['image']; ?>" alt="logo" class="h-42 rounded-md">
            </div>
            <div class="w-4/5 space-y-3 mx-5">
                <div class="flex gap-3 items-center justify-between">
                    <h3 class="text-xl font-semibold">
                        <?= $project['completed'] ? '✅' : '❌'; ?> 
                        <?= $project['name']; ?> 
                        <span class="text-xs text-gray-400 opacity-50 italic"> 
                            <?= $project['completed'] ? '( Concluido: '. $project['year']. ' )' : '( em Andamento )'; ?>
                        </span>
                    </h3>
                    <div class="text-amber-50">
                        <?php foreach($project['technologies'] as $technology): ?>
                            <span class="text-xs bg-slate-700 px-2 py-1 font-medium text-sm rounded"><?= $technology; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <p class="leading-6 text-sm text-justify"><?= $project['description']; ?></p>
            </div>
        </div>
    <?php endforeach; ?> 
</section>

<section class="gap-x-6 py-6" id="projects">
    <h2 class="text-2xl font-bold mb-3">Projetos</h2>
    <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach($projects as $project): ?>
            <li class="bg-slate-800 p-6 rounded-lg">
                <h3 class="text-xl font-bold"><?= $project['name']; ?></h3>
                <p class="text-sm"><?= $project['description']; ?></p>
                <p class="text-xs text-gray-400 opacity-50 italic"><?= $project['completed'] ? '( Concluido: '. $project['year']. ' )' : '( em Andamento )'; ?></p>
                <img src="<?= $project['image']; ?>" alt="<?= $project['name']; ?>" class="w-full h-48 object-cover mt-3 rounded-lg"/>
                <ul class="flex gap-x-3 mt-3">
                    <?php 
                        $colors = ['fuchsia', 'lime', 'sky', 'rose', 'indigo', 'amber', 'emerald', 'cyan', 'violet', 'orange', 'red', 'yellow', 'green', 'blue', 'teal', 'purple', 'pink', 'gray'];

                        foreach($project['technologies'] as $technology => $tech): 
                            $p = array_rand($colors);
                    ?>
                    <li>
                        <span class="text-xs text-amber-50 bg-<?= $colors[$p] ?>-400 p-1 font-medium text-sm rounded-lg">
                            <?= $tech; ?>
                        </span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </li>
        <?php endforeach; ?>
    </ul>
</section>