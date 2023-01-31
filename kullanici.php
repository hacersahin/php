<?php

$servername="localhost";

$username="admin";

$password="";

$dbname="100ky";

$conn= new mysgl($servername,$username,$password,$dbname);

if( $conn->connect_error){

	die("connection faild: ".$conn->connect_error);
}
$sgl="INSERT INTO kullanici VALUES ('av.hacer@gmail.com','123456')";

if($conn->query($sql)==true){
    echo "yeni Kayır Oluşturuldu.";
}
else {
    echo "hata".$conn->error;
}

$conn->close();


?>