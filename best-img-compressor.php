
<html>
<form method="post" enctype="multipart/form-data">
	<input type="file" name="img" required/>
	<input type="submit" name="submit"/>
</form>
</html>
<?php

if(isset($_POST['submit'])){


	// $filename= $_FILES['img']['name'];
	// $tempname= $_FILES['img']['tmp_name'];
	// $size=$_FILES['img']['size'];
						  
	// $extention= pathinfo($filename,PATHINFO_EXTENSION);
	// $filenm= pathinfo($filename,PATHINFO_FILENAME);
	// $filenameok= $filenm.date("mjYHis").'.webp';
	// $output= '../../../static/images/report/'.$filenameok;
	// $store='static/images/report/'.$filenameok;
	// $file[$key]=$store;
						  
						  
	// $array= array('png','jpeg','jpg');
						  
	// if (in_array($extention, $array)) {
						  
	// 	//file size declear in bites
	// 	if($size<5242880){
											  
	// 		$image = imagecreatefromstring(file_get_contents($tempname));
	// 		ob_start();
	// 		imagejpeg($image,NULL,100);
	// 		$cont = ob_get_contents();
	// 		ob_end_clean();
	// 		imagedestroy($image);
	// 		$content = imagecreatefromstring($cont);
	// 		$upload= imagewebp($content,$output);
	// 		imagedestroy($content);
	// 	   //  echo '<h4>WEBP Image Converted Successfully</h4>';


	$file=$_FILES['img']['tmp_name'];
	$filename= $_FILES['img']['name'];
	$extention= pathinfo($filename,PATHINFO_EXTENSION);

	$array= array('png','jpeg','jpg','JPG');                    
	if (in_array($extention, $array)) {

	list($width,$height)=getimagesize($file);

	if($width<1800 && $height<1800){
						  
		$extention= pathinfo($filename,PATHINFO_EXTENSION);
		$filenm= pathinfo($filename,PATHINFO_FILENAME);
		$filenameok= $filenm.date("mjYHis").'.webp';
		$output= 'upload/'.$filenameok;
		//$store='static/images/report/'.$filenameok;
		//$file[$key]=$store;
							  							  
				$image = imagecreatefromstring(file_get_contents($file));
				ob_start();
				imagejpeg($image,NULL,100);
				$cont = ob_get_contents();
				ob_end_clean();
				imagedestroy($image);
				$content = imagecreatefromstring($cont);
				$upload= imagewebp($content,$output);
				imagedestroy($content);
			   //  echo '<h4>WEBP Image Converted Successfully</h4>';

		}
		
	elseif($width<3000 && $height<3000){
		$nwidth=$width/1.8;
		$nheight=$height/1.8;
		$newimage=imagecreatetruecolor($nwidth,$nheight);
		if($_FILES['img']['type']=='image/jpeg'){
			$source=imagecreatefromjpeg($file);
			imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
			$file_name=time().'.webp';
			ob_start();
			imagejpeg($newimage,NULL,100);
			$cont = ob_get_contents();
				ob_end_clean();
				imagedestroy($newimage);
				$content = imagecreatefromstring($cont);
				$upload= imagewebp($content,'upload/'.$file_name);
				imagedestroy($content);
		}elseif($_FILES['img']['type']=='image/png'){
			$source=imagecreatefrompng($file);
			imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
			$file_name=time().'.webp';
			ob_start();
			imagejpeg($newimage,NULL,100);
			$cont = ob_get_contents();
				ob_end_clean();
				imagedestroy($newimage);
				$content = imagecreatefromstring($cont);
				$upload= imagewebp($content,'upload/'.$file_name);
				imagedestroy($content);
		}elseif($_FILES['img']['type']=='image/jpg'){
			$source=imagecreatefromjpg($file);
			imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
			$file_name=time().'.webp';
			ob_start();
			imagejpeg($newimage,NULL,100);
			$cont = ob_get_contents();
				ob_end_clean();
				imagedestroy($newimage);
				$content = imagecreatefromstring($cont);
				$upload= imagewebp($content,'upload/'.$file_name);
				imagedestroy($content);
		}
	}

	elseif($width<4000 && $height<4000){
	$nwidth=$width/2.6;
	$nheight=$height/2.6;
	$newimage=imagecreatetruecolor($nwidth,$nheight);
	if($_FILES['img']['type']=='image/jpeg'){
		$source=imagecreatefromjpeg($file);
		imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
		$file_name=time().'.webp';
		ob_start();
		imagejpeg($newimage,NULL,100);
		$cont = ob_get_contents();
			ob_end_clean();
			imagedestroy($newimage);
			$content = imagecreatefromstring($cont);
			$upload= imagewebp($content,'upload/'.$file_name);
			imagedestroy($content);
	}elseif($_FILES['img']['type']=='image/png'){
		$source=imagecreatefrompng($file);
		imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
		$file_name=time().'.webp';
		ob_start();
		imagejpeg($newimage,NULL,100);
		$cont = ob_get_contents();
			ob_end_clean();
			imagedestroy($newimage);
			$content = imagecreatefromstring($cont);
			$upload= imagewebp($content,'upload/'.$file_name);
			imagedestroy($content);
	}elseif($_FILES['img']['type']=='image/jpg'){
		$source=imagecreatefromjpg($file);
		imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
		$file_name=time().'.webp';
		ob_start();
		imagejpeg($newimage,NULL,100);
		$cont = ob_get_contents();
			ob_end_clean();
			imagedestroy($newimage);
			$content = imagecreatefromstring($cont);
			$upload= imagewebp($content,'upload/'.$file_name);
			imagedestroy($content);
	}
}
elseif($width<5000 && $height<5000){
	$nwidth=$width/3.4;
	$nheight=$height/3.4;
	$newimage=imagecreatetruecolor($nwidth,$nheight);
	if($_FILES['img']['type']=='image/jpeg'){
		$source=imagecreatefromjpeg($file);
		imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
		$file_name=time().'.webp';
		ob_start();
		imagejpeg($newimage,NULL,100);
		$cont = ob_get_contents();
			ob_end_clean();
			imagedestroy($newimage);
			$content = imagecreatefromstring($cont);
			$upload= imagewebp($content,'upload/'.$file_name);
			imagedestroy($content);
	}elseif($_FILES['img']['type']=='image/png'){
		$source=imagecreatefrompng($file);
		imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
		$file_name=time().'.webp';
		ob_start();
		imagejpeg($newimage,NULL,100);
		$cont = ob_get_contents();
			ob_end_clean();
			imagedestroy($newimage);
			$content = imagecreatefromstring($cont);
			$upload= imagewebp($content,'upload/'.$file_name);
			imagedestroy($content);
	}elseif($_FILES['img']['type']=='image/jpg'){
		$source=imagecreatefromjpg($file);
		imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
		$file_name=time().'.webp';
		ob_start();
		imagejpeg($newimage,NULL,100);
		$cont = ob_get_contents();
			ob_end_clean();
			imagedestroy($newimage);
			$content = imagecreatefromstring($cont);
			$upload= imagewebp($content,'upload/'.$file_name);
			imagedestroy($content);
	}
}

elseif($width<6000 && $height<6000){
	$nwidth=$width/4.2;
	$nheight=$height/4.2;
	$newimage=imagecreatetruecolor($nwidth,$nheight);
	if($_FILES['img']['type']=='image/jpeg'){
		$source=imagecreatefromjpeg($file);
		imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
		$file_name=time().'.webp';
		ob_start();
		imagejpeg($newimage,NULL,100);
		$cont = ob_get_contents();
			ob_end_clean();
			imagedestroy($newimage);
			$content = imagecreatefromstring($cont);
			$upload= imagewebp($content,'upload/'.$file_name);
			imagedestroy($content);
	}elseif($_FILES['img']['type']=='image/png'){
		$source=imagecreatefrompng($file);
		imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
		$file_name=time().'.webp';
		ob_start();
		imagejpeg($newimage,NULL,100);
		$cont = ob_get_contents();
			ob_end_clean();
			imagedestroy($newimage);
			$content = imagecreatefromstring($cont);
			$upload= imagewebp($content,'upload/'.$file_name);
			imagedestroy($content);
	}elseif($_FILES['img']['type']=='image/jpg'){
		$source=imagecreatefromjpg($file);
		imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
		$file_name=time().'.webp';
		ob_start();
		imagejpeg($newimage,NULL,100);
		$cont = ob_get_contents();
			ob_end_clean();
			imagedestroy($newimage);
			$content = imagecreatefromstring($cont);
			$upload= imagewebp($content,'upload/'.$file_name);
			imagedestroy($content);
	}
}

elseif($width<8000 && $height<8000){
	$nwidth=$width/5.5;
	$nheight=$height/5.5;
	$newimage=imagecreatetruecolor($nwidth,$nheight);
	if($_FILES['img']['type']=='image/jpeg'){
		$source=imagecreatefromjpeg($file);
		imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
		$file_name=time().'.webp';
		ob_start();
		imagejpeg($newimage,NULL,100);
		$cont = ob_get_contents();
			ob_end_clean();
			imagedestroy($newimage);
			$content = imagecreatefromstring($cont);
			$upload= imagewebp($content,'upload/'.$file_name);
			imagedestroy($content);
	}elseif($_FILES['img']['type']=='image/png'){
		$source=imagecreatefrompng($file);
		imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
		$file_name=time().'.webp';
		ob_start();
		imagejpeg($newimage,NULL,100);
		$cont = ob_get_contents();
			ob_end_clean();
			imagedestroy($newimage);
			$content = imagecreatefromstring($cont);
			$upload= imagewebp($content,'upload/'.$file_name);
			imagedestroy($content);
	}elseif($_FILES['img']['type']=='image/jpg'){
		$source=imagecreatefromjpg($file);
		imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
		$file_name=time().'.webp';
		ob_start();
		imagejpeg($newimage,NULL,100);
		$cont = ob_get_contents();
			ob_end_clean();
			imagedestroy($newimage);
			$content = imagecreatefromstring($cont);
			$upload= imagewebp($content,'upload/'.$file_name);
			imagedestroy($content);
	}
}
else{
	echo "Selected image size (hight & width) is too large";
}
}


else{
	echo "Please select only jpg, png and jpeg image";
}
}
?>
