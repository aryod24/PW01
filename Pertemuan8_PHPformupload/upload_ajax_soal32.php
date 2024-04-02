<?php
if(isset($_FILES['files'])){
    $errors = array();
    $uploadedFiles = array();
    $extensions = array("jpg", "jpeg", "png");
    $uploadPath = "documents/";

    foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
        $file_name = $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];
        @$file_ext = strtolower(end(explode(".", $file_name)));

        if(in_array($file_ext, $extensions) === false){
            $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, atau PNG";
        }
        
        if($file_size > 2097152){
            $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
        }

        if(empty($errors) == true){
            move_uploaded_file($file_tmp, $uploadPath . $file_name);
            $uploadedFiles[] = $file_name;
        }
    }

    if(empty($errors)){
        echo "File-file berikut berhasil diunggah: " . implode(", ", $uploadedFiles);
    }else{
        echo implode(" ", $errors);
    }
}
?>