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

document.addEventListener('DOMContentLoaded', function() {
    const btn1 = document.getElementById('btn-1');
    const btn2 = document.getElementById('btn-2');
    let selectedButton = (btn1.checked)?btn1:btn2;

    setInterval(function() {
        selectedButton.checked = false;
        selectedButton = (selectedButton === btn1) ? btn2 : btn1;
        selectedButton.checked = true;
    }, 5000);
});

