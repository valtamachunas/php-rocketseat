<?php
$projetos = [

    [
        "titulo" => "Portfólio",
        "finalizado" => true,
        "ano" => 2024,
        "descricao" => "Meu portfólio criado para mostrar um pouco dos meus projetos",
        "stack" => ["HTML", "Tailwindcss", "PHP"],
        "img" => "../img/portfolio.png"
    ],
    [
        "titulo" => "Catálogo Interativo de Filmes",
        "finalizado" => false,
        "ano" => 2025,
        "descricao" => "Organizador de lista de filmes com ferramentas para adicionar, remover e editar conforme a preferência.",
        "stack" => ["PHP", "HTML", "Tailwindcss"],
        "img" => "../img/cinema.png"
    ],
    [
        "titulo" => "Gerenciador de Livros",
        "finalizado" => false,
        "ano" => 2025,
        "descricao" => "Uma aplicação para criar e personalizar uma lista de livros, com funções completas de gerenciamento e edição.",
        "stack" => ["PHP", "HTML", "Tailwindcss"],
        "img" => "../img/5078755.png"
    ],
    [
        "titulo" => "Gerador de Conselhos",
        "finalizado" => true,
        "ano" => 2023,
        "descricao" => "Gerador de conselhos para alegrar o dia!",
        "stack" => ["HTML", "CSS", "JavaScript"],
        "img" => "../img/advice.png"
    ],
    [
        "titulo" => "Studio Essência",
        "finalizado" => true,
        "ano" => 2020,
        "descricao" => "Página informativa sobre o Studio Essência, um salão de beleza que fornece serviços de maquiagem.",
        "stack" => ["HTML", "CSS"],
        "img" => "../img/makeup.png"
    ],

];

?>

<?php foreach ($projetos as $projeto): ?>
    <div class="bg-pink-600 rounded-lg flex items-center p-3">
        <div class="w-1/5 flex items-center justify-middle">
            <img src="<?php echo $projeto['img'] ?>" class="h-20 rounded-lg">
        </div>
        <div class="w-4/5 space-y-3">
            <div class="flex gap-3 justify-between">
                <h3 class="text-xl font-bold">
                    <?php if ($projeto['finalizado']): ?>✅<?php endif; ?>
                    <?php echo $projeto['titulo'] ?>
                    <?php if ($projeto['finalizado']): ?>
                        <span class="text-xs italic opacity-50">(Finalizado em <?php echo $projeto['ano'] ?>)</span>
                    <?php else: ?>
                        <span class="text-xs italic opacity-50">(Em desenvolvimento)</span>
                    <?php endif; ?>
                </h3>
                <div class="space-x-1">
                    <?php

                    $colors = ['green', 'sky', 'yellow', 'purple'];

                    foreach ($projeto['stack'] as $posicao => $language): ?>
                        <span
                            class="bg-<?php echo $colors[$posicao] ?>-500 rounded-md px-2 py-1 font-medium"><?php echo $language ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <p class="leading-6">
                <?php echo $projeto['descricao'] ?>
            </p>
        </div>
    </div>
<?php endforeach; ?>