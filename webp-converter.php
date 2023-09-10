
<html>
<form method="post" enctype="multipart/form-data">
	<input type="file" name="img" required/>
	<input type="submit" name="submit"/>
</form>
</html>
<?php
/* //main query
$input_image="sample.jpg";
$output_image="output.jpg";

$img=imagecreatefromjpeg($input_image);
imagejpeg($img,$output_image,10);*/

if(isset($_POST['submit'])){
			 $info=getimagesize($_FILES['img']['tmp_name']);
			$filename= $_FILES['img']['name'];
			$tempname= $_FILES['img']['tmp_name'];
            $size=$_FILES['img']['size'];
            $extention= pathinfo($filename,PATHINFO_EXTENSION);
            $filenm= pathinfo($filename,PATHINFO_FILENAME);
            // $filenameok= $filenm.date("mjYHis").".".$extention;
            // $folder = 'images/'.$filenameok;
            $array= array('png','jpeg','jpg');
      
    if (in_array($extention, $array)) {

		//file size declear in bites
		if($size<5242880){
		    
			$image = imagecreatefromstring(file_get_contents($tempname));
			ob_start();
			imagejpeg($image,NULL,50);
			$cont = ob_get_contents();
			ob_end_clean();
			imagedestroy($image);
			$content = imagecreatefromstring($cont);
			$output = 'images/'.$filenm.date("mjYHis").'.webp';
			imagewebp($content,$output);
			imagedestroy($content);
			echo '<h4>WEBP Image Converted Successfully</h4>';
		}
		else{
			echo "Please select image less then 5MB";
			}
}else{
echo "Please select image in jpg, jpeg, png format";
}
}

?>
