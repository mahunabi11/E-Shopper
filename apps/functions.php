<?php

function fileUpload($file, $location= ''){
     
     $file_name = $file['name'];
     $file_name_tmp =$file['tmp_name'];
//    File name extension
     $file_array = explode('.', $file_name);
     $file_name_extension = strtolower(end($file_array));
      
//     File name genarate
     $file_name = md5(time(). rand(1, 1000)). '.' . $file_name_extension;
//    FileUpload dir
     move_uploaded_file($file_name_tmp, $location . $file_name);
     
return[
    'file_name' => $file_name
];
}


?>