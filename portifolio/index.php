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
            "ano" => 2025,
            "descricao" => "Meu primeiro portifólio em php e html",
        ],
        [
            "titulo" => "Lista de Tarefas",
            "finalizado" => false,
            "ano" => 2024,
            "descricao" => "Minha lista de tarefas",
        ],
        [
            "titulo" => "Controle de livros",
            "finalizado" => true,
            "ano" => 2024,
            "descricao" => "Minha lista de controle de livros",
        ],
        [
            "titulo" => "Painel de filmes",
            "finalizado" => false,
            "ano" => 2025,
            "descricao" => "Minha lista de filmes",
        ],
    ];

    function verificarSeEstaFinalizado($projeto)
    {
        if ($projeto['finalizado']) {
            return '<span style="color:green"> ✅ Finalizado</span>';
        } else {
            return '<span style="color:red"> 🛑 Não Finalizado</span>';
        }
    }


    function filtro($itens, $funcao)
    {
        $filtros = [];

        foreach ($itens as $item) {
            if ($funcao($item)) {
                $filtros[] = $item;
            }
        }
        return $filtros;
    };

    $projetosFiltrados = filtro($projetos, function ($projeto) {
        return $projeto['ano'] > 2024;
    });

    ?>

    <h1><?php echo $titulo ?></h1>
    <p><?php echo $subtitulo ?></p>
    <p><?php echo $ano ?></p>
    <hr>
    </hr>

    <ul>
        <?php foreach ($projetosFiltrados as $projeto): ?>

        <div>
            <h2><?php echo $projeto['titulo'] ?></h2>
            <p><?php echo $projeto['descricao'] ?></p>
            <div>
                <div><?php echo $projeto['ano'] ?></div>
                <div>Projeto:

                    <?php echo verificarSeEstaFinalizado($projeto) ?>
                </div>
            </div>
        </div>

        <?php endforeach; ?>



    </ul>


</body>

</html>