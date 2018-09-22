<?php
header("Content-type: text/html; charset=utf-8");

include  __DIR__ . '/../config/main.php';
include ENGINE_DIR . "render.php";
include ENGINE_DIR . "resizeImg.php";


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_FILES['file'])){
        if(!file_exists(UPLOADS_DIR)){
            mkdir(UPLOADS_DIR);
        }

        if(!file_exists(ORIGIN_DIR)){
            mkdir(ORIGIN_DIR);
        }

        if(!file_exists(MIN_DIR)){
            mkdir(MIN_DIR);
        }

        $fileName = ORIGIN_DIR . $_FILES['file']['name'];
        $fileMinName = MIN_DIR . $_FILES['file']['name'];


        if(file_exists($fileName)){

            $fileNameWithoutExtension = preg_replace('/\.[^.]+$/','', $fileName);
            $fileExtension = str_replace($fileNameWithoutExtension, '', $fileName);
            $fileName = $fileNameWithoutExtension . uniqid() . $fileExtension;
        }

        move_uploaded_file($_FILES['file']['tmp_name'], $fileName );

        $fileMinNameWithoutExtension = preg_replace('/\.[^.]+$/','', $fileMinName);
        $fileMinExtension = str_replace($fileMinNameWithoutExtension, '', $fileMinName);
        $fileMinName = $fileMinNameWithoutExtension . "_min" . $fileMinExtension;

        copy($fileName, $fileMinName);

//        resizeImg($fileMinName);

        renderGallery();

    }

}
?>
<form action="" enctype="multipart/form-data" method="post">
    <input type="file" name = 'file'>
    <input type="submit">
</form>



