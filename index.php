<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700">
    <link rel="shortcut icon" href="img/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição de sistema PHP">
    <title>Protótipo - PHP</title>
</head>

<body>
    <header>
        <div class="center">
            <div class="logo left"><a href="/">Emilly Guedes</a></div>
            <nav class="desktop right">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu-mobile"><i class="fas fa-bars"></i></div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </header>
    <section class="banner-principal">
        <div class="overlay"></div>
        <div class="center">
            <form>
                <h2>Qual seu melhor e-mail?</h2>
                <input type="email" name="email" required>
                <input type="submit" name="acao" value="Cadastrar!" required>
            </form>
        </div>
    </section>
    <section class="descricao-autor">
        <div class="center">
            <div class="w50 left">
                <h2>Emilly Guedes</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
        <div class="w50 left">
            <img class="right" src="img/perfil.jpg" alt="André Luiz">
        </div>
        <div class="clear"></div>
    </section>
    <section class="especialidades">
        <div class="center">
            <h2 class="title">Minhas especialidades</h2>
            <div class="w33 left box-especialidade">
                <h3><i class="fab fa-css3-alt"></i></h3>
                <h4>CSS3</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="w33 left box-especialidade">
                <h3><i class="fab fa-html5"></i></h3>
                <h4>HTML5</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="w33 left box-especialidade">
                <h3><i class="fab fa-js-square"></i></h3>
                <h4>JavaScript</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="clear"></div>
        </div>
    </section>
    <section class="extras">
        <div class="center">
            <div class="w50 left depoimentos-container">
                <h2 class="title">Depoimentos dos nossos clientes</h2>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p class="nome-autor">Nome do autor</p>
                </div>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p class="nome-autor">Nome do autor</p>
                </div>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p class="nome-autor">Nome do autor</p>
                </div>
            </div>
            <div class="w50 left servicos-container">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>
                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>
                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </section>
    <footer>
        <div class="center">
            <p>AleSYS - Todos os direitos reservados</p>
        </div>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>