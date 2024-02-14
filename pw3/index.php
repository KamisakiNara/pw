<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validating</title>
    <link rel="stylesheet" href="../../../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="#" method="post" target="_self" enctype="multipart/form-data">
            <i class="fas fa-paper-plane"></i>
            <div class="input-group">
                <label>Full name</label>
                <input type="text" class="input" placeholder="Enter your Full name" name="fullname" id="contact-name" onkeyup="validateName()">
                <span id="name-error">Masukkan nama anda</span>
            </div>
            <div class="input-group">
                <label>Phone No.</label>
                <input type="tel" class="input" placeholder="123 456 7890" name="phone" id="contact-phone" onkeyup="validatePhone()">
                <span id="phone-error">Masukkan nomor telpon anda</span>
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="email" class="input" placeholder="Enter your Email" name="email" id="contact-email" onkeyup="validateEmail()">
                <span id="email-error">Masukkan email anda</span>
            </div>
            <div class="input-group">
                <label>Message</label>
                <textarea rows="5" class="input" placeholder="Enter your Message" name="message" id="contact-message" onkeyup="validateMessage()"></textarea>
                <span id="message-error">Tolong masukkan pesan (minimal 30 karakter)</span>
            </div>
            <button onclick="return validateForm()">Submit</button>
            <span id="submit-error"></span>
        </form>
    </div>
</body>
<script src="script.js"></script>
<script src="../fontawesome/js/all.js" crossorigin="anonymous"></script>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $fullname   = anti_inject($_POST['fullname']);
    $phone = anti_inject($_POST['phone']);
    $email   = anti_inject($_POST['email']);
    $message   = anti_inject($_POST['message']);
}
function anti_inject($data){
    $data = trim($data); //mengahpus spasi kosong kanan kiri data
    $data = stripslashes($data); //menghilangkan karakter /\
    $data = htmlspecialchars($data); //menghilangkan simbol khusus
    $data = preg_replace("/[^a-zA-Z0-9. @]/", "", $data); //mengkonformasi agar yang akan muncul hanya A-Z, a-z, 0-9, Tamabahkan juga spasi 1x agar dapat mmembaca spasi

    return $data;
}

    echo "Nama kamu     : " . @$fullname . "<br>";
    echo "Nomor kamu    : " . @$phone . "<br>";
    echo "Email kamu    : " . @$email . " <br>";
    echo "Pesan kamu    : " . @$message ;
?>