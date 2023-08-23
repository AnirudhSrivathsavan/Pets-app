document.addEventListener('DOMContentLoaded', function() {

    const zipcodeInput = document.getElementById('zipcode');
    const zipcodeError = document.getElementById('zipcode-error');
    const submitButton = document.getElementById('submit-button');

    zipcodeInput.addEventListener('input', function() {
        if (zipcodeInput.validity.valid) {
            zipcodeError.style.display = 'none';
            submitButton.removeAttribute('disabled');
        } else if (zipcodeInput.value === '') {
            zipcodeError.style.display = 'none';
            submitButton.removeAttribute('disabled');
        }else {
            zipcodeError.style.display = '';
            submitButton.setAttribute('disabled', 'disabled');
        }
    });
});
