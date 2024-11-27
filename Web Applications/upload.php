<?php
if(isset($_POST['submit'])){
    $file = $_FILES['file'];

    $filename =$_FILES['file']['name'];
    $fileTmpName =$_FILES['file']['tmp_name'];
    $fileSize =$_FILES['file']['size'];
    $fileError =$_FILES['file']['error'];
    $fileType =$_FILES['file']['type'];

    $fileExt= explode('.', $filename);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png','pdf');
    if(in_array($fileActualExt, $allowed)){

        if(($fileError === 0)){
            if($fileSize < 1000000){
                $fieNameNew = uniqid('',true).".".$fileActualExt;

                $fileDestination = 'upload/'.$fieNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);

               

            }else{
                echo" Your file was too big !";
            }
        }
     else {
        echo" There was an Error with your file !";

    }
} else {
        echo" You cannot upload files of this type";

    }
}
