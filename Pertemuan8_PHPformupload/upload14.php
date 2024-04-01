<?php
if (isset($_POST["submit"])) {
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $filType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt","pdf","doc","docx");

    $maxfileSize = 10 * 1024 * 1024;

    if (in_array($filType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxfileSize){
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)){
            echo"Dokumen berhasil diunggah";
        }
        else{
            echo "Gagal mengunggah file";
        }
    }
    else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}

?>