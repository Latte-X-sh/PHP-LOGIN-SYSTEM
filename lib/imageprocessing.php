<!-- <?php
include "functions.php";
function account_image_processing($imageData){
var_dump($iduser);die();
}
 //all my validation is done on the javascript.
//   print_r($imagedata);die();
// $imageName= $imageData['name'];
// $imageType= $imageData['type'];
// $imageTempname= $imageData['tmp_name'];
// $imageError=    $imageData['error'];
// $imageSize= $imageData['size'];
// $imageFiledata = explode('/',$imageType);

// //print_r(date().$imageData['name']) ;die();

// print_r($imagefiledata);die();
// $imageFileextension = $imageFiledata[1];
// if($imageFileextension == "jpeg" || $imageFileextension == "jpg" || $imageFileextension == "png"  ){
//     $destination="storage/profile_image/";
//     $fileNewName= $destination.$imageName;
//     if(move_uploaded_file($imageTempname,$fileNewName)){
//         $pdo = get_connection();
//         $query ="UPDATE `users` 
//                       SET profile_image = CASE  
//                         WHEN :profile_image is NULL THEN users.profile_image
//                         WHEN :profile_image='' THEN users.profile_image 
//                         ELSE :profile_image
//                         END  
//                     WHERE id = :id ";
//         $stmt = $pdo->prepare($query);  
//         $stmt->bindParam(':profile_image',$fileNewName);
//         $stmt->bindParam(':id', $iduser);
//         $result = $stmt->execute(array(
//             ':profile_image' => $fileNewName ,
//             ':id' => $iduser
//         ));
    
  
//     }

// }
// // else{
// //     header("Location:Account-setting.php?error=Wrong file type uploaded");
// // } -->
