<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama  = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);

    $data = "Nama : $nama\nEmail : $email\nPesan : $pesan\n---------------------------------------------------------------------------------------------------------------\n";
    file_put_contents("komentar.txt", $data, FILE_APPEND | LOCK_EX);
    echo "sukses";
    exit;
}
?>
