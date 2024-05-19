var idError = document.getElementById('id-error');
var kodeError = document.getElementById('kode-error');
var namaError = document.getElementById('nama-error');
var jumlahError = document.getElementById('jumlah-error');
var hargaError = document.getElementById('harga-error');
var submitError = document.getElementById('submit-error');

function validateId() {
    var id = document.getElementById('id-key').value;

    if (id.length == 0) {
        idError.innerHTML = '<b>Id Barang</b> harus berisi';
        return false;
    }
    if (!id.match(/^[0-9]+$/)) {
        idError.innerHTML = 'Nilai harus berupa angka';
        return false;
    }
    idError.innerHTML = '<i class="fas fa-check-circle" ></i>';
    return true;
}

function validateKode() {
    var kode = document.getElementById('kode-key').value;

    if (kode.length == 0) {
        kodeError.innerHTML = '<b>Kode Barang</b> diperlukan';
        return false;
    }
    if (!kode.match(/^[0-9A-Za-z-]*$/)) {
        kodeError.innerHTML = 'Kode tidak valid';
        return false;
    }
    kodeError.innerHTML = '<i class="fas fa-check-circle"></i>';
    return true;
}

function validateNama() {
    var name = document.getElementById('nama-key').value;

    if (name.length == 0) {
        namaError.innerHTML = 'Tolong masukkan <b>Nama Barang</b>';
        return false;
    }
    if (!name.match(/^[A-Za-z\s()]*$/)) {
        namaError.innerHTML = 'Nama khusus huruf';
        return false;
    }
    namaError.innerHTML = '<i class="fas fa-check-circle" ></i>';
    return true;
}

function validateJml() {
    var jumlah = document.getElementById('jumlah-key').value;

    if (jumlah.length == 0) {
        jumlahError.innerHTML = 'Tolong masukkan <b>Jumlah Barang</b>';
        return false;
    }
    if (!jumlah.match(/^[0-9]*$/)) {
        jumlahError.innerHTML = '<b>Jumlah Barang</b> tidak valid';
        return false;
    }
    jumlahError.innerHTML = '<i class="fas fa-check-circle" ></i>';
    return true;
}

function validateHrg() {
    var harga = document.getElementById('harga-key').value;

    if (harga.length == 0) {
        hargaError.innerHTML = 'Tolong masukkan <b>Harga Barang</b>';
        return false;
    }
    if (!harga.match(/^[0-9]*$/)) {
        hargaError.innerHTML = '<b>Harga Barang</b> tidak valid';
        return false;
    }
    hargaError.innerHTML = '<i class="fas fa-check-circle" ></i>';
    return true;
}

function validateForm() {
    if (!validateId() || !validateKode() || !validateNama() || !validateJml() || !validateHrg()) {
        submitError.style.display = 'block';
        submitError.innerHTML = 'Harap perbaiki kesalahan sebelum mengirim';
        setTimeout(function () { submitError.style.display = 'none'; }, 3000);
        return false;
    }
}