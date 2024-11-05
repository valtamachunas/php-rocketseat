<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portifólio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-800 text-white">

    <?php include('./componentes/header.php'); ?>

    <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">

        <?php include('./componentes/hero.php') ?>

        <section id="projetos" class="space-y-3 py-6">
            <h2 class="text-2xl font-bold">Meus Projetos</h2>

            <?php include('./componentes/projetos.php') ?>

        </section>
    </main>

    <footer class="mx-auto max-w-screen-lg min-h-20">
        <div class="border-t border-pink-600 pt-6 px-3 text-sm opacity-70">
            © Copyright <?php echo date('Y') ?>. Construído ♡ por mim mesmo :) .
        </div>
    </footer>

</body>

</html>