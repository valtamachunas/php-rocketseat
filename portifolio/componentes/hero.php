<?php
$itens = [
    ['href' => 'https://www.linkedin.com/in/valeska-tamachunas-20187b167/', 'src' => './img/linkedin.png', 'alt' => 'LinkedIn'],
    ['href' => 'https://github.com/valtamachunas', 'src' => './img/github-6980894_960_720.webp', 'alt' => 'Github'],
];
?>

<section class="flex gap-x-3">
    <!-- Titulo e descrição -->
    <div class="w-2/3">
        <h1 class="text-3xl font-bold">Olá, meu nome é Valeska Tamachunas.</h1>
        <p class=" leading-8 mt-6">Sou desenvolvedora frontend e, atualmente, estou me aprofundando em PHP :)</p>
        <ul class="flex gap-x-2 mt-3">
            <?php foreach ($itens as $item): ?>
                <li><a href="<?php echo $item['href'] ?>" target="_blank"><img src="<?php echo $item['src'] ?>"
                            alt="<?php echo $item['alt'] ?>" class="h-10 w-50 hover:animate-bounce"></a></li>

            <?php endforeach ?>
        </ul>
    </div>
    <!-- Imagem -->
    <div class="w-1/3 flex items-center justify-center">
        <img src="./img/1727982953378.jpg" alt="Valeska" class="rounded-lg h-60 -mt-4 hover:animate-pulse">
    </div>
</section>