<?php
    $umur = 25;
    if(isset($umur) && $umur >= 18) {
        echo "Anda Sudah Dewasa";
    } else {
        echo "Anda belum dewasa atau variabel 'umur' tidak ditentukan";
    }

    $data = array("nama" => "Aryo", "usia" => 25);
    if(isset($data["nama"]) && $data["usia"] >= 18) {
        echo "<br>Nama : " . $data["nama"];
    } else {
        echo "<br>Anda belum dewasa atau variabel 'usia' tidak ditemukan dalam array";
    }
?>