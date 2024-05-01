var idError = document.getElementById('id-error');
var textError = document.getElementsByClassName('text-error');
var submitError = document.getElementById('submit-error');

function validateNum() {
    var phone = document.getElementsByClassName('number-error').value;

    if (phone.length == 0) {
        phoneError.innerHTML = 'Masukkan Nilai';
        return false;
    }
    if (!phone.match(/^[0-9]$/)) {
        phoneError.innerHTML = 'Nilai harus berupa angka';
        return false;
    }
    phoneError.innerHTML = '<i class="fas fa-check-circle"></i>';
    return true;
}