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

// Check for URL parameters and handle alerts
document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const mailStatus = urlParams.get('mail');
    
    if (mailStatus === 'sent' || mailStatus === 'error') {
        // Scroll to contact section
        const contactSection = document.getElementById('contact');
        if (contactSection) {
            contactSection.scrollIntoView({ behavior: 'smooth' });
        }
        
        // Add some delay to ensure the alert is visible after scroll
        setTimeout(() => {
            const alert = document.querySelector('.alert');
            if (alert) {
                alert.style.opacity = '0';
                alert.style.transition = 'opacity 0.5s ease-in-out';
                
                // Fade out alert after 5 seconds
                setTimeout(() => {
                    alert.style.opacity = '1';
                    setTimeout(() => {
                        alert.style.opacity = '0';
                        setTimeout(() => {
                            alert.remove();
                        }, 500);
                    }, 5000);
                }, 1000);
            }
        }, 1000);
    }
});
