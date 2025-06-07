<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $mensagem = $_POST["mensagem"];

  // Exemplo: salvar em arquivo ou enviar por email
  // file_put_contents("mensagens.txt", "$nome <$email>: $mensagem\n", FILE_APPEND);

  echo "Obrigado, $nome. Entraremos em contato!";
}
?>
