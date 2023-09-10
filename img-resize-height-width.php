
<html>
<form method="post" enctype="multipart/form-data">
	<input type="file" name="img" required/>
	<input type="submit" name="submit"/>
</form>
</html>
<?php

if(isset($_POST['submit'])){

	$file=$_FILES['img']['tmp_name'];
	list($width,$height)=getimagesize($file);
	$nwidth=$width*3/4;
	$nheight=$height*3/4;
	$newimage=imagecreatetruecolor($nwidth,$nheight);
	if($_FILES['img']['type']=='image/jpeg'){
		$source=imagecreatefromjpeg($file);
		imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
		$file_name=time().'.jpg';
		imagejpeg($newimage,'upload/'.$file_name);
	}elseif($_FILES['img']['type']=='image/png'){
		$source=imagecreatefrompng($file);
		imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
		$file_name=time().'.png';
		imagepng($newimage,'upload/'.$file_name);
	}elseif($_FILES['img']['type']=='image/jpg'){
		$source=imagecreatefromjpg($file);
		imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
		$file_name=time().'.jpg';
		imagejpg($newimage,'upload/'.$file_name);
	}else{
		echo "Please select only jpg, png and jpeg image";
	}


}