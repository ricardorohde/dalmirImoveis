<?php
	ini_set('max_execution_time', 3000);
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

	$source_img = 'source.jpg';
	$destination_img = 'destination .jpg';


	if ($handle = opendir('.')) {

	    while (false !== ($entry = readdir($handle))) {

	        if ($entry != "." && $entry != "..") {

	            echo "$entry"."<br>";
				if(!is_dir ( $entry))	           		
	           		if(is_image($entry))
	            		$d = compress($entry, "tmp/$entry", 25);
	        }
	    }

	    closedir($handle);
	}
	// 

?>