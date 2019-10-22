


<?php

session_start();



$table = "table_info";

$msg = "";
$css_alert = "";




$conn = mysqli_connect('localhost','root','','juinfo');

if(isset($_POST['Submit'])){



    $bio = $_POST['bio'];
    $profileImage = time(). '_' . $_FILES['imageUp']['name'];

    $target = 'Reg_Image/' .$profileImage;
    if(move_uploaded_file($_FILES['imageUp']['tmp_name'], $target)){
        $sql = "Insert into table_info(img_name) values('$profileImage')";
       if(mysqli_query($conn,$sql)){
           $msg = "Image Has Been Uploaded to Database!";
           $css_alert = "alert-success";

       }
    }
    else{
        $msg = "Error Uploading!";
        $css_alert = "alert-danger";
    }

}



?>
