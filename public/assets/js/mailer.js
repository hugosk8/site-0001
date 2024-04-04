document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementsByClassName('contact-form-page')[0];
    const submitButton = document.getElementById('submit-button');
    const successResult = document.getElementById('form-success');
    const successError = document.getElementById('form-error');
    if (form) {
        console.log("form");
        submitButton.addEventListener("click", function(e) {
            console.log("submit");
            e.preventDefault();
            let formData = new FormData(form);
            fetch('./public/assets/php/phpMailer.php',{
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
                .then(data => {
                if (data.success) {
                    successResult.classList.toggle('d-none');
                    successResult.innerHTML = "Merci de nous avoir contacté. Nous vous répondrons dès que possible.";
                } else {
                    successError.innerHTML = "Erreur lors de l'envoi du message.";
                }
            })
        })
    }
})