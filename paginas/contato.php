<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome      = htmlspecialchars(trim($_POST['nome']));
    $email     = htmlspecialchars(trim($_POST['email']));
    $telefone  = htmlspecialchars(trim($_POST['telefone']));
    $cidade    = htmlspecialchars(trim($_POST['cidade']));
    $mensagem  = htmlspecialchars(trim($_POST['mensagem']));
    $avaliacao = htmlspecialchars(trim($_POST['avaliacao']));

    // Corpo do e-mail
    $destinatario = "ghab07122004@gmail.com";
    $assunto = "Nova mensagem do site Lino Estética Motors";

    $corpo_email  = "Nome: $nome\n";
    $corpo_email .= "Email: $email\n";
    $corpo_email .= "Telefone: $telefone\n";
    $corpo_email .= "Cidade: $cidade\n";
    $corpo_email .= "Nota de Atendimento: $avaliacao\n\n";
    $corpo_email .= "Mensagem:\n$mensagem\n\n";

    // Serviços selecionados (array)
    if (isset($_POST['servicos']) && is_array($_POST['servicos'])) {
        $corpo_email .= "Serviços Selecionados:\n";
        foreach ($_POST['servicos'] as $servico) {
            $corpo_email .= "- " . htmlspecialchars($servico) . "\n";
        }
    } else {
        $corpo_email .= "Nenhum serviço foi selecionado.\n";
    }

    // Cabeçalhos
    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Envio
    if (mail($destinatario, $assunto, $corpo_email, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem. Tente novamente mais tarde.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
