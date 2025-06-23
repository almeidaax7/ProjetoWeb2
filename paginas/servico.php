<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços - Lino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="estetica.css">
</head>
<body>
    <?php
        include 'nav.php';
    ?>
    <section id="servicos" class="py-5">
            <div class="container">
                <h2 class="text-center mb-4 text-light">Nossos Serviços</h2>
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
                    <a href="https://wa.me/5544998740047" target="_blank" class="btn btn-whatsapp-section">
                        <i class="fab fa-whatsapp"></i>Faça seu orçamento e agende um horário conosco
                    </a>
                </div>
            </div>
        </section>
        
    <div style="height: 100px;"></div>

        <h3 class="text-center text-light">Veja o antes e depois</h3>
       <div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-12 col-md-10 col-lg-6"> 
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../img/160azulsuja.jpeg" class="d-block w-100" alt="Antes de lavar a 160" style="max-height: 500px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
              <h3>Antes de lavar a 160</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/160azullimpa.jpeg" class="d-block w-100" alt="Depois da lavagem Lino's" style="max-height: 500px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
              <h3>Depois da lavagem Lino's</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/motor160sujo.jpeg" class="d-block w-100" alt="Antes da lavagem do motor" style="max-height: 500px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
              <h3>Antes da lavagem do motor</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/motor160limpo.jpeg" class="d-block w-100" alt="Após a lavagem completa" style="max-height: 500px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
              <h3>Após a lavagem completa</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/160pretasuja.jpeg" class="d-block w-100" alt="Antes" style="max-height: 500px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
              <h3>Antes</h3>
            </div>  
          </div>
          <div class="carousel-item">
            <img src="../img/160pretalimpa.jpeg" class="d-block w-100" alt="Depois" style="max-height: 400px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
              <h3>Depois</h3>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Próximo</span>
        </button>
      </div>
    </div>
  </div>
</div>



        <?php
        include 'footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>