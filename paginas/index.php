<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Home - Lino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="estetica.css" />
</head>
<body>
    
    <?php
        include 'nav.php';
    ?>

<a href="https://wa.me/5544998740047" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <main>
        <section id="hero" class="d-flex align-items-center justify-content-center text-center text-white">
            <div class="container">
                <h1>Sua moto merece o melhor tratamento!</h1>
                <p class="lead">Lavagem e Detalhamento de Motos com excelência.</p>
            </div>
        </section>
        
    </main>

    <div style="height: 100px;"></div>

<h3 class="text-center mb-4 text-light" data-aos="fade-up">Conheça um pouco dos nossos trabalhos</h3>

<div class="d-flex justify-content-center">
  <div class="card bg-dark text-white me-5" style="width: 20rem;" data-aos="fade-right">
    <img src="../img/xrelimpa.jpeg" class="card-img-top" alt="xre">
    <div class="card-body">
      <p class="card-text">Aqui sua moto sempre recebe o melhor cuidado!</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item bg-dark text-white">Lavagem detalhada</li>
      <li class="list-group-item bg-dark text-white">Polimento</li>
      <li class="list-group-item bg-dark text-white">Revitalização de plásticos</li>
    </ul>
    <div class="card-body">
      <a href="servico.php" class="card-link">Mais imagens</a>
    </div>
  </div>

  <div class="card bg-dark text-white ms-5" style="width: 20rem;" data-aos="fade-left">
    <img src="../img/tampasuja.jpeg" class="card-img-top tampa" alt="xre">
    <div class="card-body">
      <p class="card-text">Passe o mouse para ver a magia!</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item bg-dark text-white">Remoção de sujeiras empregnadas</li>
      <li class="list-group-item bg-dark text-white">Recuperação de cor</li>
      <li class="list-group-item bg-dark text-white">Controle de desgaste natural</li>
    </ul>
    <div class="card-body">
      <a href="servico.php" class="card-link">Mais imagens</a>
    </div>
  </div>
</div>

<div style="height: 50px;"></div>
    <?php
        include 'footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>