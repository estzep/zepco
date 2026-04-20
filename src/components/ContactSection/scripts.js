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

document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const mailStatus = urlParams.get('mail');
    
    if (mailStatus === 'sent' || mailStatus === 'error') {
        const contactSection = document.getElementById('contact');
        const alert = document.getElementById('mailAlert');

        if (contactSection) {
            contactSection.scrollIntoView({ behavior: 'smooth' });
        }

        setTimeout(() => {
            if (alert) {
                alert.classList.add('show');
                setTimeout(() => {
                    alert.classList.remove('show');
                }, 12000);
            }
        }, 500);
    }
});
