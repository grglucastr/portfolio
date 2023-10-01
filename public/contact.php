<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-H98NC9SSVK">
    </script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-H98NC9SSVK');
    </script>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/desenvolvedor.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Portfólio Ricardo Henrique Santos</title>
</head>

<body>

    <header>
        <nav class="breadcrumb is-centered" aria-label="breadcrumbs">
            <ul>
                <li><a class="navbar-item" href="index.php">Início</a></li>
                <li><a class="navbar-item" href="dashboards.php">Dashboards</a></li>
                <li><a class="navbar-item is-active" href="contact.php">Contato</a></li>
            </ul>
        </nav>
    </header>

    <section class="section">
        <div class="container">
            <div class="columns">

                <div class="column">
                    <div class="card has-text-centered">

                        <div class="card-image">
                            <figure id="perfil">
                                <img src="img/img_portfolio.jpg" alt="Placeholder image">
                            </figure>
                        </div>

                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-5">Ricardo Henrique Santos</p>
                                    <span class="tag is-dark is-medium">Desenvolvedor de Sistemas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-8">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">Contact</p>
                        </header>
                        <div class="card-content">
                            <div class="content">
                                <form action="php/mensagem.php" method="POST">
                                    <div class="field">
                                        <label class="label" for="nome">Nome</label>
                                        <div class="control has-icons-left has-icons-right">
                                            <input class="input" id="nome" name="nome" required>
                                            <span class="icon is-small is-right">
                                                <i class="fas fa-exclamation-triangle"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <label class="label" for="email">Email</label>
                                        <div class="control has-icons-left has-icons-right">
                                            <input class="input" type="email" placeholder="exemple@email.com" id="email"
                                                name="email" required>
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-envelope"></i>
                                            </span>
                                            <span class="icon is-small is-right">
                                                <i class="fas fa-exclamation-triangle"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <label class="label" for="mensagem">Mensagem</label>
                                        <div class="control">
                                            <textarea class="textarea" placeholder="Insira a sua mensagem..."
                                                id="mensagem" name="mensagem" required></textarea>
                                        </div>
                                    </div>

                                    <div class="field is-grouped">
                                        <div class="control">
                                            <button class="button is-primary" type="submit">Enviar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="content has-text-centered">
            <p>Desenvolvido por <strong>Ricardo Henrique Santos</strong></p>
        </div>
    </footer>
</body>
</html>