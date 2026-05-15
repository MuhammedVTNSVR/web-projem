<?php
// Formdan gelen verileri alıyoruz
$user = $_POST['username'];
$pass = $_POST['password'];

// Ödevdeki kurallara göre belirlenen doğru bilgiler
$correct_user = "b251210574@sakarya.edu.tr";
$correct_pass = "b251210574";

if ($user == $correct_user && $pass == $correct_pass) {
    // Başarılı Giriş Mesajı ve Ana Sayfaya Yönlendirme
    echo "<script>
            alert('Hoşgeldiniz b251210574');
            window.location.href='index.html';
          </script>";
} else {
    // Başarısızlıkta Hata Mesajı ve Giriş Sayfasına Geri Yönlendirme
    echo "<script>
            alert('Hatalı kullanıcı adı veya şifre!');
            window.location.href='login.html';
          </script>";
}
?>