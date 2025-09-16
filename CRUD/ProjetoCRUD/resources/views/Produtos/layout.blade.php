<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield ('title', Festival de Música 2024)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @stark ('head') 

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-music me-2"></i>MusicFest 2024</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#inicio">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#programacao">Programação</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ingressos">Ingressos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#galeria">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Conteudo Principal-->
    <main style=margin-top: 56px;'>
       @yeld('content')
    </main>
      
    <!-- Footer -->
    <footer id="contato" class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Contato</h5>
                    <p><i class="fas fa-envelope me-2"></i>contato@musicfest2024.com</p>
                    <p><i class="fas fa-phone me-2"></i>(11) 9999-8888</p>
                    <p><i class="fas fa-map-marker-alt me-2"></i>Parque Ibirapuera - São Paulo, SP</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <h5>Siga-nos</h5>
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-youtube fa-2x"></i></a>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p>&copy; 2024 MusicFest. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>