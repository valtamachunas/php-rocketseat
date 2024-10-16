<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portifólio</title>
</head>

<body>
    <?php
    $nome = "Valeska";
    $saudacao = "Olá";
    $titulo = $saudacao . " Portifólio da " . $nome;
    $subtitulo = "Meu portifólio";
    $ano = 2024;
    $projeto = "Meu Portifólio";
    $finalizado = true;
    $dataDoProjeto = "2024-10-16";
    $descricao = "Meu primeiro portifólio em php e html";
    $projetos = [
        [
            "titulo" => "Meu portifólio",
            "finalizado" => false,
            "data" => "2024-10-16",
            "descricao" => "Meu primeiro portifólio em php e html",
        ],
        [
            "titulo" => "Lista de Tarefas",
            "finalizado" => true,
            "data" => "2024-05-16",
            "descricao" => "Minha lista de tarefas",
        ]
    ];
    ?>

    <h1><?php echo $titulo ?></h1>
    <p><?php echo $subtitulo ?></p>
    <p><?php echo $ano ?></p>
    <hr>
    </hr>

    <ul>
        <?php foreach ($projetos as $projeto): ?>

            <div>
                <h2><?php echo $projeto['titulo'] ?></h2>
                <p><?php echo $projeto['descricao'] ?></p>
                <div>
                    <div><?php echo $projeto['data'] ?></div>
                    <div>Projeto:
                        <?php if ($projeto['finalizado']): ?>
                            <span style="color:green"> ✅ Finalizado</span>
                        <?php else: ?>
                            <span style="color:red"> 🛑 Não Finalizado</span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>



    </ul>


</body>

</html>