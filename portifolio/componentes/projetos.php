<?php
$projetos = [
    [
        "titulo" => "Meu portifólio",
        "finalizado" => true,
        "ano" => 2024,
        "descricao" => "Meu primeiro portifólio em php e html",
        "stack" => ["PHP", "HTML", "CSS"],
        "img" => ""

    ],
    [
        "titulo" => "Lista de Tarefas",
        "finalizado" => false,
        "ano" => 2024,
        "descricao" => "Minha lista de tarefas",
        "stack" => ["PHP", "HTML", "CSS"],
        "img" => ""


    ],
    [
        "titulo" => "Controle de livros",
        "finalizado" => true,
        "ano" => 2022,
        "descricao" => "Minha lista de controle de livros",
        "stack" => ["PHP", "HTML", "CSS"],
        "img" => ""


    ],
    [
        "titulo" => "Painel de filmes",
        "finalizado" => false,
        "ano" => 2025,
        "descricao" => "Minha lista de filmes",
        "stack" => ["PHP", "HTML", "CSS"],
        "img" => ""

    ],
];

?>

<?php foreach ($projetos as $projeto): ?>
<div class="bg-pink-500 rounded-lg flex items-center p-3">
    <div class="w-1/5 flex items-center justify-middle">
        <img src="<?php echo $projeto['img'] ?>" class="h-10">
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
                    $colors = ['purple', 'yellow', 'sky', 'green'];

                    foreach ($projeto['stack'] as $posicao => $language): ?>

                <span
                    class="bg-<?php echo $colors[$posicao] ?>-500 rounded-md px-2 py-1 font-medium"><?php echo $language ?></span>
                <!-- <span class="bg-yellow-500 rounded-md px-2 py-1 font-medium">JavaScript</span>
                <span class="bg-sky-500 rounded-md px-2 py-1 font-medium">HTML</span>
                <span class="bg-green-500 rounded-md px-2 py-1 font-medium">CSS</span> -->
                <?php endforeach; ?>
            </div>
        </div>
        <p class="leading-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quod pariatur libero atque
            veritatis cumque. Repellendus obcaecati accusantium saepe quos nam earum odit, quis magnam
            ducimus, sapiente alias quaerat praesentium.
        </p>
    </div>
</div>

<?php endforeach; ?>