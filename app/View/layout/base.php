<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - SufGang</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <!-- Header -->
        <header class="header">
            <nav class="nav">
                <div class="logo"><img src="https://cdn.awsli.com.br/1605/1605630/arquivos/sufgangdesktop.png"
                        alt="Camisa Brasil" class="product-image"></div>
                <div class="nav-links">
                    <a href="/">Shop</a>
                    <button class="btn dropdown-toggle fw-semibold" data-bs-toggle="dropdown" aria-expanded="false">
                        Cadastrar
                    </button>
                    <ul class="dropdown-menu dropdown-menu">
                        <li><a class="dropdown-item" href="/usuario/inserir">Usuário</a></li>
                        <li><a class="dropdown-item" href="/produto/inserir">Produto</a></li>
                    </ul>
                    </li>
                    </ul>
                    <button class="btn dropdown-toggle fw-semibold" data-bs-toggle="dropdown" aria-expanded="false">
                        Listas
                    </button>
                    <ul class="dropdown-menu dropdown-menu">
                        <li><a class="dropdown-item" href="/usuario">Usuário</a></li>
                        <li><a class="dropdown-item" href="/produto">Produto</a></li>
                    </ul>
                    </li>
                    </ul>
                    <a href="/dashboard">Dashboard</a>
                    <a href="/login">Login</a>
                </div>
            </nav>
        </header>


		<?= $content?>
</div>
     
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-info">
                <p> Footer Sufgang Shop</p>
            </div>
        </div>
    </footer>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>