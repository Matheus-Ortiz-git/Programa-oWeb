document.getElementById('loginButton').addEventListener('click', function() {
    const loginPopup = document.getElementById('loginPopup');
    loginPopup.style.display = 'block'; // Mostra o popup
});

document.getElementById('closeButton').addEventListener('click', function() {
    const loginPopup = document.getElementById('loginPopup');
    loginPopup.style.display = 'none'; // Oculta o popup
});

document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Impede o envio do formulário
    alert('Formulário enviado!'); // Aqui você pode adicionar a lógica de autenticação
    const loginPopup = document.getElementById('loginPopup');
    loginPopup.style.display = 'none'; // Fecha o popup após o envio
});
