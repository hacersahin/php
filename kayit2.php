<?php

$servername="localhost";

$username="root";

$password="";

$dbname="100ky";

$conn= new mysqli($servername,$username,$password,$dbname);

if( $conn->connect_error){

	die("connection faild: " . $conn->connect_error);

}

//$sql="INSERT INTO kullanici VALUES ('av.hacer@gmail.com','123456')";

//if($conn->query($sql)==true){
//    echo "yeni Kayır Oluşturuldu.";
//}
//else {

//    echo "Hata" . $conn->error;
//}


$conn->close();


?>


<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Hesap oluşturma</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1e455baf92.js" crossorigin="anonymous"></script>

    <script>function sifre_kontrol(){

            var kullanici = [(document.getElementById("email").value), (document.getElementById("sifre1").value)];
            var sifre = document.getElementById("sifre1").value;
            var sifre2 = document.getElementById("sifre2").value;
            var yazi = document.getElementById("sonuc");

            if (kullanici[1]==sifre2) {

                yazi.innerHTML = "Hesaba giriş sağlandı!";

                yazi.style.color = "green";

                sessionStorage.setItem("user", kullanici); //içeriye bilgi gönderiyoruz. her yerden görülür.

            }

            else {

                yazi.innerHTML = "Şifreler eşleşmiyor";

                yazi.style.color = "red";
            }

            }
    </script>

</head>
<body>
    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <i class="fa-thin fa-pen-nib"></i>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-secondary">Anasayfa</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Öğrendiklerim</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Öğreneceklerim</a></li>
                    <li><a href="#" class="nav-link px-2 text-white"> Tekrar Etmem Gerekenler</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Ben Kimim?</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Ara..." aria-label="Search">
                </form>

                <div class="text-end">
                    <a href="giris2.html"> <button type="button" class="btn btn-outline-light me-2">Giriş</button></a>
                    <a href="anasayfa.html" <button type="button" class="btn btn-warning">Kaydol</button> </a>
                </div>
            </div>
        </div>
    </header>
    <br />
    <main class="form-signin w-100 m-auto">
        <div class="row justify-content-center">
            <div class="col-6 text-center ">
                <form action="form.php" method="get">
                    <img class="mb-4" src="C:\Users\khas\Desktop\web1\web1\resim\kedi.jpeg" alt="" width="200" height="150">
                    <h1 class="h3 mb-3 fw-normal text-center">Hesap Oluştur</h1>

                    <div class="form-floating">
                        <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                        <label for="floatingInput">E-mail adres</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="sifre1" id="sifre1" placeholder="Şifre Giriniz">
                        <label for="floatingPassword">Şifre Giriniz</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="sifre2" id="sifre2" placeholder="Tekrar şifrenizi Giriniz">
                        <label for="floatingPassword">Tekrar Şifrenizi Giriniz</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Anımsa
                        </label>
                        <p id="sonuc"></p>
                    </div>
                     <button class="w-100 btn btn-lg btn-primary" type="submit" onclick="">Hesap Oluştur</button>
                </form>
                <p id="sonuc"> </p>

                <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
            </div>
        </div>
    </main>
</body>
</html>
