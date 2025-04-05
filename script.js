document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    if (name && email && message) {
        alert(`Gracias ${name}, tu mensaje ha sido enviado.`);
    } else {
        alert('Por favor completa todos los campos.');
    }
});
