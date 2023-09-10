  
<html>
<form method="post" enctype="multipart/form-data">
	<input type="file" name="img[]" multiple required/>
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
	foreach($_FILES['img']['name'] as $key=>$val){
	
			$info=getimagesize($_FILES['img']['tmp_name'][$key]);
			$filename= $_FILES['img']['name'][$key];
			$tempname= $_FILES['img']['tmp_name'][$key];
            $size=$_FILES['img']['size'][$key];
            $extention= pathinfo($filename,PATHINFO_EXTENSION);
            $filenm= pathinfo($filename,PATHINFO_FILENAME);
            $filenameok= $filenm.date("mjYHis").".".$extention;
            $output= 'images/'.$filenameok;

            $fileexe= explode('.',$filename);
            $imgextension= strtolower(end($fileexe));
            $array= array('png','jpeg','jpg','webp');
      
             if (in_array($imgextension, $array)) {
			 
if($size<1048576){
	if(isset($info['mime'])){
		if($info['mime']=="image/jpg"){
			$img=imagecreatefromjpg($_FILES['img']['tmp_name'][$key]);
		}elseif($info['mime']=="image/png"){
			$img=imagecreatefrompng($_FILES['img']['tmp_name'][$key]);
		}elseif($info['mime']=="image/jpeg"){
			$img=imagecreatefromjpeg($_FILES['img']['tmp_name'][$key]);
		}
		else{
			echo "Select image in jpg, jpeg, png image format";
		}
		if(isset($img)){
			imagejpeg($img,$output,70);
			echo "image compressed successfully";
		}
}else{
echo "not compress";
}
}
elseif($size<2097152){
	if(isset($info['mime'])){
		if($info['mime']=="image/jpg"){
			$img=imagecreatefromjpg($_FILES['img']['tmp_name'][$key]);
		}elseif($info['mime']=="image/png"){
			$img=imagecreatefrompng($_FILES['img']['tmp_name'][$key]);
		}elseif($info['mime']=="image/jpeg"){
			$img=imagecreatefromjpeg($_FILES['img']['tmp_name'][$key]);
		}
		else{
			echo "Select image in jpg, jpeg, png image format";
		}
		if(isset($img)){
			imagejpeg($img,$output,50);
			echo "image compressed successfully";
		}
}else{
echo "not compress";
}
}
elseif($size<3145728){
	if(isset($info['mime'])){
		if($info['mime']=="image/jpg"){
			$img=imagecreatefromjpg($_FILES['img']['tmp_name'][$key]);
		}elseif($info['mime']=="image/png"){
			$img=imagecreatefrompng($_FILES['img']['tmp_name'][$key]);
		}elseif($info['mime']=="image/jpeg"){
			$img=imagecreatefromjpeg($_FILES['img']['tmp_name'][$key]);
		}
		else{
			echo "Select image in jpg, jpeg, png image format";
		}
		if(isset($img)){
			imagejpeg($img,$output,33);
			echo "image compressed successfully";
		}
}else{
echo "not compress";
}
}
elseif($size<4194304){
	if(isset($info['mime'])){
		if($info['mime']=="image/jpg"){
			$img=imagecreatefromjpg($_FILES['img']['tmp_name'][$key]);
		}elseif($info['mime']=="image/png"){
			$img=imagecreatefrompng($_FILES['img']['tmp_name'][$key]);
		}elseif($info['mime']=="image/jpeg"){
			$img=imagecreatefromjpeg($_FILES['img']['tmp_name'][$key]);
		}
		else{
			echo "Select image in jpg, jpeg, png image format";
		}
		if(isset($img)){
			imagejpeg($img,$output,25);
			echo "image compressed successfully";
		}
}else{
echo "not compress";
}
}
elseif($size>4194304){
	if(isset($info['mime'])){
		if($info['mime']=="image/jpg"){
			$img=imagecreatefromjpg($_FILES['img']['tmp_name'][$key]);
		}elseif($info['mime']=="image/png"){
			$img=imagecreatefrompng($_FILES['img']['tmp_name'][$key]);
		}elseif($info['mime']=="image/jpeg"){
			$img=imagecreatefromjpeg($_FILES['img']['tmp_name'][$key]);
		}
		else{
			echo "Select image in jpg, jpeg, png image format";
		}
		if(isset($img)){
			imagejpeg($img,$output,20);
			echo "image compressed successfully";
		}
}else{
echo "not compress";
}
}
else{
	echo "please select image less than 5 MB";
}
}
else{
	echo "Select image in jpg, jpeg, png image format";
}
}
}
?>
