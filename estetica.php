<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Lino Estética Motors</title>
    <link rel="stylesheet" href="estetica.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-white shadow-sm py-3">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="img/logo.png" alt="Logotipo do site" class="logo me-2" />
                    
                    <span class="nome-empresa">Lino Estética Motors</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#servicos">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sobre">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contato">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section id="hero" class="d-flex align-items-center justify-content-center text-center text-white">
            <div class="container">
                <h1>Sua moto merece o melhor tratamento!</h1>
                <p class="lead">Lavagem e Detalhamento de Motos com excelência.</p>
                <a href="https://wa.me/SEUNUMERO?text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20os%20serviços%20de%20lavagem%20e%20detalhamento%20de%20motos." target="_blank" class="btn btn-whatsapp-hero mt-3">
                    <i class="fab fa-whatsapp"></i> Agende seu Horário!
                </a>
            </div>
        </section>

        <section id="servicos" class="py-5">
            <div class="container">
                <h2 class="text-center mb-4">Nossos Serviços</h2>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    <div class="col">
                        <div class="card h-100 text-center">
                            <div class="card-body">
                                <i class="fas fa-motorcycle service-icon mb-3"></i>
                                <h5 class="card-title">Lavagem Completa</h5>
                                <p class="card-text">Limpeza profunda e detalhada para sua moto, da roda ao guidão.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center">
                            <div class="card-body">
                                <i class="fas fa-spray-can service-icon mb-3"></i>
                                <h5 class="card-title">Polimento de Pintura</h5>
                                <p class="card-text">Remove riscos superficiais e restaura o brilho original da pintura.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center">
                            <div class="card-body">
                                <i class="fas fa-chair service-icon mb-3"></i>
                                <h5 class="card-title">Higienização de Bancos</h5>
                                <p class="card-text">Limpeza e hidratação para manter seu banco sempre novo e confortável.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center">
                            <div class="card-body">
                                <i class="fas fa-brush service-icon mb-3"></i>
                                <h5 class="card-title">Revitalização de Plásticos</h5>
                                <p class="card-text">Recupera a cor e o brilho dos plásticos, protegendo contra o ressecamento.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="https://wa.me/SEUNUMERO?text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20os%20serviços%20de%20lavagem%20e%20detalhamento%20de%20motos." target="_blank" class="btn btn-whatsapp-section">
                        <i class="fab fa-whatsapp"></i> Converse Conosco no WhatsApp
                    </a>
                </div>
            </div>
        </section>

        <section id="sobre" class="bg-light py-5">
            <div class="container">
                <h2 class="text-center mb-4">Sobre Nós</h2>
                <div class="row align-items-center">
                    <div class="col-md-6 text-center mb-3 mb-md-0">
                        <img src="https://via.placeholder.com/400" alt="Equipe Lino Estética Motors" class="img-fluid rounded shadow">
                    </div>
                    <div class="col-md-6">
                        <p class="lead">Somos especialistas em cuidar da sua moto como ela merece! Na **Lino Estética Motors**, utilizamos apenas produtos de alta qualidade e técnicas avançadas para garantir brilho, proteção e uma limpeza impecável.</p>
                        <p>Nosso compromisso é com a satisfação do cliente e a longevidade da sua motocicleta. Confie em quem entende do assunto para deixar sua moto com aspecto de nova!</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="contato" class="py-5">
            <div class="container">
                <h2 class="text-center mb-4">Fale Conosco</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <p class="text-center mb-4">Envie uma mensagem ou, se preferir, entre em contato direto pelo WhatsApp!</p>
                        <form id="formContato" method="post" action="contato.php" class="p-4 border rounded shadow-sm bg-white">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Seu Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome" required />
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Seu E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Seu e-mail" required />
                            </div>
                            <div class="mb-3">
                                <label for="mensagem" class="form-label">Mensagem</label>
                                <textarea class="form-control" id="mensagem" name="mensagem" rows="5" placeholder="Sua mensagem..." required></textarea>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                                <a href="https://wa.me/SEUNUMERO?text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20os%20serviços%20de%20lavagem%20e%20detalhamento%20de%20motos." target="_blank" class="btn btn-success">
                                    <i class="fab fa-whatsapp"></i> Chamar no WhatsApp
                                </a>
                            </div>
                            <p id="mensagemStatus" class="mt-3 text-center"></p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <a href="https://wa.me/SEUNUMERO?text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20os%20serviços%20de%20lavagem%20e%20detalhamento%20de%20motos." class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <footer>
        <div class="container text-center py-3">
            <p>&copy; <?php echo date("Y"); ?> Lino Estética Motors. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>