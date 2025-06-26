<!-- contato.html (ou index.php) -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato - Lino Motors</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="estetica.css">
</head>
<body>
<?php include 'nav.php'; ?>

<section id="contato" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4 text-light">Fale Conosco</h2>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <p class="text-center mb-4">Envie uma mensagem ou, se preferir, entre em contato direto pelo WhatsApp!</p>
        <form id="formContato" method="post" action="contato.php" class="p-4 border rounded shadow-sm bg-white">
          <div class="mb-3">
            <label for="nome" class="form-label">Seu Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Seu E-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" required>
          </div>
          <div class="mb-3">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" required>
          </div>

          <!-- NOVO: Campo com array (checkboxes de serviços) -->
          <div class="mb-3">
            <label class="form-label">Serviços desejados</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="servicos[]" value="Lavagem simples" id="servico1">
              <label class="form-check-label" for="servico1">Lavagem simples</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="servicos[]" value="Lavagem detalhada" id="servico2">
              <label class="form-check-label" for="servico2">Lavagem detalhada</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="servicos[]" value="Polimento" id="servico3">
              <label class="form-check-label" for="servico3">Polimento</label>
            </div>
          </div>

          <div class="mb-3">
            <label for="mensagem" class="form-label">Mensagem</label>
            <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
          </div>

          <div class="mb-3">
            <label for="avaliacao" class="form-label">Nota para o Atendimento (0 a 10)</label>
            <input type="number" class="form-control" id="avaliacao" name="avaliacao" min="0" max="10" required>
          </div>

          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
            <a href="https://wa.me/5544998740047" target="_blank" class="btn btn-success">Chamar no WhatsApp</a>
          </div>

          <p id="mensagemStatus" class="mt-3 text-center"></p>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
