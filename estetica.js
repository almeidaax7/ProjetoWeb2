document.addEventListener('DOMContentLoaded', function() {
    const formContato = document.getElementById('formContato');
    const mensagemStatus = document.getElementById('mensagemStatus');

    if (formContato) {
        formContato.addEventListener('submit', function(event) {
            event.preventDefault(); 

            // Para este exemplo, apenas simula o envio e mostra uma mensagem de sucesso
            mensagemStatus.textContent = 'Mensagem enviada com sucesso! Entraremos em contato em breve.';
            mensagemStatus.style.color = 'green';
            formContato.reset(); // Limpa o formulário

            
            setTimeout(() => {
                mensagemStatus.textContent = '';
            }, 5000);
        });
    }
});