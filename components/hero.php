<?php
    $items = [
        ["href" => "#", "src" => "./assets/icons/facebook_preto.png", "alt" => "Facebook logo"],
        ["href" => "#", "src" => "./assets/icons/youtube_preto.png", "alt" => "Youtube logo"],
        ["href" => "#", "src" => "./assets/icons/linkedin_preto.png", "alt" => "LinkedIn logo"],
        ["href" => "#", "src" => "./assets/icons/twitter_preto.png", "alt" => "Twitter logo"],
        ["href" => "#", "src" => "./assets/icons/github_preto.png", "alt" => "Github logo"],
        ["href" => "#", "src" => "./assets/icons/pinterest_preto.png", "alt" => "Pinterest logo"],
    ];
?>

<section class="flex items-center justify-between">
    <div class="w-2/3 m-6">
        <h1 class="text-3xl font-bold mb-3">Olá, Testando</h1>
        <p class="text-x leading-8">Falando um pouco sobre mim, sou um desenvolvedor web que adora criar coisas novas e aprender novas tecnologias.
            Especializado em PHP e HTML, mas também tenho conhecimento em outras linguagens como Python e Java.</p>

        <ul class="flex gap-x-3 mt-3">

            <?php foreach($items as $item): ?>
                <li>
                    <a href="<?= $item['href']; ?>" target="_blank">
                        <img class="w-8 hover:animate-bounce" src="<?= $item['src']; ?>" alt="<?= $item['alt']; ?>"/>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <figure class="w-1/3 flex items-center justify-center">
        <img src="./assets/icons/avatar.svg" alt="logo" class="h-60 -mt-6 hover:animate-pulse">
    </figure>
</section>