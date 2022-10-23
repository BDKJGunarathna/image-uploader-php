<?php

//variable declarations for alert messages
$message="";
$message_class="";

if(isset($_POST['save'])){
    //unquate the string
    $caption=stripslashes($_POST['caption']);
    //time() return current unix timestamp
    $img=time() .'-'.$_FILES["image"]["name"];
}

//image upload path
$trg_direc="images/";
$trg_file=$trg_direc.basename($img); //returns the path

//validating the image size
if($_FILES['img']['size']>200000){
    $message="Invalid image size, image size should not be greater than 200kb";
    $message_class="alert-danger";
}

//upload image 
if(empty($error)){
    if(move_uploaded_file($_FILES["image"]["tmp_name"],$trg_file)) { //moving uploaded file to target file
        $message="File has been uploaded succesfully";
        $message_class="alert-success";
    }   
    else{
        $error="There was an error uploading this file";
        $message="alert-danger";
    }
}


?>