<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso de PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 01</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">Olá PHP</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=html">Integração HTML</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=css">Integração CSS</a>
                        </li>
                    </ul>
                </div>
            </nav>
            
        </div>
    </main>
    <footer class="rodape">
        CURSO DE PHP - COD3R <?= date('Y'); ?>
    </footer>
</body>
</html>