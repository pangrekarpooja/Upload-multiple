<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload multiple images</title>
    <style>
        body{
         background-color:lightblue;
         text-align:center;
         margin-top: 10%;

        }


        </style>
</head>
<body>

    <h1>PHP File Upload</h1>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="myImages[]" multiple /><br> <br>
        <input type="submit" name="submit" value="upload images">
    </form>


    
</body>
</html>