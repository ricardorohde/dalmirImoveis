<?php

function is_image($path)
{
    $a = getimagesize($path);
    $image_type = $a[2];
        
    if(in_array($image_type , array(IMAGETYPE_GIF , IMAGETYPE_JPEG ,IMAGETYPE_PNG , IMAGETYPE_BMP)))
    {
        return true;
    }
    return false;
}

function compress($source, $destination, $quality) {

    $info = getimagesize($source);

    if ($info['mime'] == 'image/jpeg') 
        $image = imagecreatefromjpeg($source);

    elseif ($info['mime'] == 'image/gif') 
        $image = imagecreatefromgif($source);

    elseif ($info['mime'] == 'image/png') 
        $image = imagecreatefrompng($source);

    imagejpeg($image, $destination, $quality);

    return $destination;
}


/* Getting file name */
$filename = $_FILES['file']['name'];

/* Getting File size */
$filesize = $_FILES['file']['size'];

/* Location */
$filename = date('d_m_Y_H_i',time()-0).'_'.$filename;
$location = "upload/origin/".$filename;

$return_arr = array();
// var_dump($_FILES);

/* Upload file */
if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
              		
     if(is_image($location))
         $d = compress($location, "upload/".$filename, 25);    


    $src = "default.png";

    // checking file is image or not
    if(is_array(getimagesize($location))){
        $src = 'data/imovel/'.$location;
    }
    $return_arr = array("name" => $filename,"size" => $filesize, "src"=> $src);




}

echo json_encode($return_arr);
