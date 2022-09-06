<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload Gambar</title>
</head>
<body>
<h2>Langsung Saja Ges</h2>

    <form method="post" action="" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <input type="submit" value="Kirim" name="submit">
    </form>

    <?php
        if (isset($_POST["submit"])) {
            $file = $_FILES["file"]["name"];
            $tmp_name = $_FILES["file"]["tmp_name"];
            move_uploaded_file($tmp_name, "img/".$file);
        }    
    ?>
    <img src="img/<?php echo $file ?>" alt="">

</body>
</html>