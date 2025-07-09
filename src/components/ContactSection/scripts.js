function validateForm() {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const telCelular = document.getElementById('telCelular').value;
    const service = document.getElementById('service').value;
    const message = document.getElementById('message').value;
    const contactMethod = document.getElementById('contactMethod').value;

    if (name === '' || email === '' || telCelular === '' || service === '' || message === '' || contactMethod === '') {
        alert('Por favor, completa todos los campos requeridos.');
        return false;
    }

    return true;
}
