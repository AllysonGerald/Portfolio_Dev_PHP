<?php
    $items = [
        ["href" => "#projects", "text" => "Projetos"],
        ["href" => "#", "text" => "Github"],
        ["href" => "#", "text" => "LinkedIn"],
        ["href" => "#", "text" => "Twitter"],
        ["href" => "#", "text" => "Facebook"],
        ["href" => "#", "text" => "Youtube"],
        ["href" => "#", "text" => "Pinterest"],
    ];
?>

<header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">
    <figure class="flex items-center">
        <img class='w-16 h-16 mr-4' src="./assets/img/prisma.png" alt="logo">
        <span class="text-lg font-medium">Prism Tecnology</span>
    </figure>
    <nav>
        <ul class="flex gap-x-3 items-center justify-between">
            <?php foreach($items as $item): ?>
                <li class="hover:underline">
                    <a href="<?= $item['href']; ?>">
                        <?= $item['text']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>