<?php

ini_set('file_uploads', '1');

$dir = "uploaded_images/";

if (!isset($_FILES['images']['name'])) {
    echo "no images uploaded";
    exit(0);
};

$numFiles = count($_FILES['images']['name']);
for($i = 0; $i < $numFiles; $i++){
    $original_filename = $_FILES['images']['name'][$i];
    $target = $dir . basename($original_filename);
    $tmp  = $_FILES['images']['tmp_name'][$i];

    // for security, always include a check here to ensure the 
    // uploaded file is what you expect it to be
    move_uploaded_file($tmp, $target);    
}

echo $numFiles." images uploaded";

?>