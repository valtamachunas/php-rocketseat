<?php
$itens = [
    ['href' => '#projetos', 'texto' => 'Projetos'],
    ['href' => 'https://www.linkedin.com/in/valeska-tamachunas-20187b167/', 'texto' => 'LinkedIn', 'target' => '_blank'],
    ['href' => 'https://github.com/valtamachunas', 'texto' => 'Github', 'target' => '_blank'],
];
?>

<header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">
    <!-- Logo -->
    <div class="text-pink-600 font-bold font-mono">Meu Portifólio</div>
    <!-- Links -->
    <div>
        <ul class="flex gap-x-3 font-medium text-gray-200">
            <?php foreach ($itens as $item): ?>
            <li><a href="<?php echo $item['href']; ?>"
                    <?php echo isset($item['target']) ? 'target="' . $item['target'] . '"' : ''; ?> class="
                        hover:underline"><?php echo $item['texto'] ?></a></li>
            <?php endforeach; ?>

            <!-- <li><a href="#projetos" class="hover:underline">Projetos</a></li>
            <li><a href="https://github.com/valtamachunas" target="_blank" class="hover:underline">Github</a></li>
            <li><a href="https://www.linkedin.com/in/valeska-tamachunas-20187b167/" target="_blank"
                    class="hover:underline">LinkedIn</a></li> -->
        </ul>
    </div>
</header>