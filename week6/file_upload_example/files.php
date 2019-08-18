<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>file uploads</title>
</head>
<body>
    

<form action="upload.php" method="post" enctype="multipart/form-data">
<p><label>Select images for upload: </label><input type="file" name="images[]" multiple></p>
<input type="submit">
</form>



</body>
</html>