<?php
//echo $_GET ['email'];

   // print_r($_GET); //içerisindeki elemanlrı yazdırıyor.
$servername="localhost";

$username="root";

$password="";

$dbname="100ky";

$conn= new mysqli($servername,$username,$password,$dbname);

if( $conn->connect_error){

	die("connection faild: " . $conn->connect_error);

}

$email=$_GET['email'];
$sifre=$_GET['sifre1'];

$sql="INSERT INTO kullanici VALUES ('','$email','$sifre')";

if($conn->query($sql)== TRUE){

    echo "Yeni Kayıt Oluşturuldu.";
}
else {

    echo "Hata" . $conn->error;
}

$conn->close();
?>
