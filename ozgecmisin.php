<?php
// Veritabanı bilgileri
$servername = "localhost";
$username = "aysenur";
$password = "1234";
$dbname = "ozgecmisindeneme";

// Veritabanı bağlantısı
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Bağlantı hatası: " . $conn->connect_error);
}

// Formdan gelen verileri değişkenlere atama
$ad = $_POST["ad"];

$email = $_POST["email"];


// Veritabanına veri ekleme
$sql = "INSERT INTO ozgecmisindeneme_tbl (id, adi, eposta) VALUES ('$ad', '$email')";
if ($conn->query($sql) === TRUE) {
	echo "Veriler başarıyla kaydedildi.";
} else {
	echo "Hata: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
