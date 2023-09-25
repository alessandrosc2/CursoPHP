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
                    <h3>Módulo 01 - Básico</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">Olá PHP.</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=html">Integração HTML.</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=css">Integração CSS.</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP.</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=desafio">Desafio.</a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Módulo 02 - Tipos</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro.</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=float">Tipo Float.</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=aritimeticas">Op. Aritiméticas.</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=precedencia">Desafio Precedência.</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=string">Tipo String.</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio_string">Desafio String.</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=boleano">Tipo Boleano.</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=conversoes">Conversões em PHP.</a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Módulo 03 - Variáveis</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=basico">Variáveis.</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio_equacao">Desafio Equação.</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=atribuicoes">Atribuições.</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação.</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">Variáveis.</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor vs Referência.</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=constantes">Constantes.</a>
                        </li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>Módulo 04 - Controle</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=controle&file=if_else">If e Else.</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=operadores_relacionais">Operadores Relacionais.</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=operadores_logicos">Operadores Lógicos.</a>
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