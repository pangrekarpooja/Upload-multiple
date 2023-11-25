<?php
if (isset($_POST['submit'])) {
   
    foreach ($_FILES['myImages']['tmp_name'] as $key => $image) {
        $imageName = $_FILES['myImages']['name'][$key];
        $imageTmpName = $_FILES['myImages']['tmp_name'][$key];

        $directory = 'images1/';
        $_result = move_uploaded_file($imageTmpName, $directory.$imageName);
    

    }
    if ($_result) {
        echo "Images Uploaded successfully!";
    }
    

    
}



?>