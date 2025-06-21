<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Lino Motors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="estetica.css">

</head>
<body>
    <?php
        include 'nav.php';
    ?>
    <section id="contato" class="py-5">
            <div class="container">
                <h2 class="text-center mb-4 text-light">Fale Conosco</h2>
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
                                <a href="https://wa.me/5544998740047" target="_blank" class="btn btn-success">
                                    <i class="fab fa-whatsapp"></i> Chamar no WhatsApp
                                </a>
                            </div>
                            <p id="mensagemStatus" class="mt-3 text-center"></p>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <?php
        include 'footer.php';
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>