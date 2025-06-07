<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Estética & Lavagens de Motos</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header>
    <h1>Estética & Lavagens de Motos</h1>
    <nav>
      <a href="#servicos">Serviços</a>
      <a href="#sobre">Sobre</a>
      <a href="#contato">Contato</a>
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
</body>
</html>
