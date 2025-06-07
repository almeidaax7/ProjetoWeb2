document.getElementById("formContato").addEventListener("submit", function (e) {
  e.preventDefault(); // Evita envio padrão

  const status = document.getElementById("mensagemStatus");
  status.textContent = "Enviando...";

  // Simulação de envio
  setTimeout(() => {
    status.textContent = "Mensagem enviada com sucesso!";
    document.getElementById("formContato").reset();
  }, 1000);
});
