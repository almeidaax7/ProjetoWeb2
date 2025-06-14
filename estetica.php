<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Lino Estética Motors</title>
  <link rel="stylesheet" href="estetica.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

</head>
<body>
    <header>
  <nav class="navbar navbar-expand-lg bg-white shadow-sm py-3">
    <div class="container">

      <!-- Logo à esquerda -->
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="img/logo.png" alt="Logo do site" class="logo me-2" />
        <span class="nome-empresa">Lino Estética Motors</span>
      </a>

      <!-- Botão mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Itens de navegação -->
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


  
  <section id="servicos">
    <h2>Nossos Serviços</h2>
    <ul>
      <li>Lavagem completa</li>
      <li>Polimento de pintura</li>
      <li>Higienização de bancos</li>
      <li>Revitalização de plásticos</li>
    </ul>
  </section>

  <section id="sobre">
    <h2>Sobre Nós</h2>
    <p>Somos especialistas em cuidar da sua moto como ela merece! Utilizamos produtos de alta qualidade para garantir brilho, proteção e limpeza.</p>
  </section>

  <section id="contato">
    <h2>Fale Conosco</h2>
    <form id="formContato" method="post" action="contato.php">
      <input type="text" name="nome" placeholder="Seu nome" required />
      <input type="email" name="email" placeholder="Seu email" required />
      <textarea name="mensagem" placeholder="Mensagem" required></textarea>
      <button type="submit">Enviar</button>
    </form>
    <p id="mensagemStatus"></p>
  </section>

  <footer>
    <p>&copy; <?= date("Y") ?> Estética & Lavagens de Motos</p>
  </footer>

  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
