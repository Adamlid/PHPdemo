<?php
	include "./function.php";
	if(isset($_POST["btn"])){
		$file=$_FILES["image"];
		print_r(fileup($file));	
	}

?>
<form action="" method="post" enctype="multipart/form-data">
	上传文件: <input type="file" name="image">
	<input type="submit" name='btn'> 
	
</form>