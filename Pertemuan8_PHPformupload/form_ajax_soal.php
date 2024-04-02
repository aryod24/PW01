<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unggah File Dokumen</title>
</head>
<body>
    <h2>Upload Form ajax format gambar</h2>
    <form id="upload-form" action="upload_ajax_soal.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" id="files" multiple="multiple">
        <input type="submit" value="Unggah" name="submit">
    </form>
    <div id="status"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script >
        $(document).ready(function(){
    $('#upload-form').submit(function(e){
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: 'upload_ajax_soal32.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                $('#status').html(response);
            },
            error: function(){
                $('#status').html('Terjadi kesalahan saat mengunggah file.')
            }
        });
    });
});

    </script>
</body>
</html>