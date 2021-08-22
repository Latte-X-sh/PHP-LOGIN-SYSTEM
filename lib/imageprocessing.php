<?php
function account_image_processing($imagedata){
 //all my validation is done on the javascript.
//   print_r($imagedata);die();
$imagename=$imagedata['name'];
$imagetype=$imagedata['type'];
$imagetempname=$imagedata['tmp_name'];
$imageerror=$imagedata['error'];
$imagesize=$imagedata['size'];
$imagefiledata = explode('/',$imagetype);
// print_r($imagefiledata);die();
$imagefileextension = $imagefiledata[1];
if($imagefileextension == "jpeg" || $imagefileextension == "jpg" || $imagefileextension == "png"  ){
var_dump($imagesize);die();
}
else{
    //
}
}