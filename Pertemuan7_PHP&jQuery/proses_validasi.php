<?php
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors = array();

    //validasi nama
    if(empty($nama)) {
        $errors[] = "Nama harus diisi";
    }

    //validasi email
    if(empty($email)) {
        $errors[] = "Email harus diisi";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email salah";
    }

    if (empty($password)) {
        $errors[] = "Password harus diisi";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password minimal 8 karakter";
    }

    //jika ada kesalahan validasi
    if(!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        echo "Data berhasil dikirim: Nama " . $nama . " Email: " . $email ."Password: ". $password;
    }
}
?>