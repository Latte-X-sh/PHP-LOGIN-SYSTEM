<?php
function account_image_processing($imageData){
 //all my validation is done on the javascript.
//   print_r($imagedata);die();
$imageName= $imageData['name'];
$imageType= $imageData['type'];
$imageTempname= $imageData['tmp_name'];
$imageError=    $imageData['error'];
$imageSize= $imageData['size'];
$imageFiledata = explode('/',$imageType);
print_r(date()$imageData['name']) ;die();
// print_r($imagefiledata);die();
$imageFileextension = $imageFiledata[1];
if($imageFileextension == "jpeg" || $imageFileextension == "jpg" || $imageFileextension == "png"  ){
    // var_dump($imageName);die();
    //file size needs to be compressed.
    $destination="storage/profile_image/";
    $fileNewName= $destination.$imageName;
    $uploaded = move_uploaded_file($imageTempname,$fileNewName);
    // echo $uploaded ;die();
    // if($uploaded == 1){
    // $query = "UPDATE `users` SET" ;
    // }
}
else{
    //
}
}

?>