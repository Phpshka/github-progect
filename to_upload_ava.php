<?php
	
	require_once "core/init.php";

	function uploadPNGImage($newWidth, $newHeight, $width, $height, $fileName, $newName){

		$smallImage = imagecreatetruecolor($newWidth, $newHeight);

		$source = imagecreatefrompng($fileName);

		imagecopyresized($smallImage, $source, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

		imagepng($smallImage, "images/$newName.png");

	}

	function uploadJPEGImage($newWidth, $newHeight, $width, $height, $fileName, $newName){

		$smallImage = imagecreatetruecolor($newWidth, $newHeight);

		$source = imagecreatefromjpeg($fileName);

		imagecopyresized($smallImage, $source, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

		imagejpeg($smallImage, "images/$newName.jpg");

	}			

	if($_SERVER['REQUEST_METHOD']=='POST'&&isset($_SESSION['USER_SESSION'])){

		$url = "profile.php?error";

		if(isset($_FILES['ava'])){

			$fileName = $_FILES['ava']['tmp_name'];
			$image = getimagesize($fileName);

			list($width, $height) = $image;

			$userImageName = sha1("image_".$_SESSION['USER_SESSION']['id']);

			if($_FILES['ava']['type']=='image/jpeg'){
		
				uploadJPEGImage(400, $height*400/$width, $width, $height, $fileName, $userImageName."_big");

				uploadJPEGImage(200, $height*200/$width, $width, $height, $fileName, $userImageName."_medium");

				uploadJPEGImage(50, $height*50/$width, $width, $height, $fileName, $userImageName."_small");

				changeUserAva($_SESSION['USER_SESSION']['id'], $userImageName, "jpg");
				$_SESSION['USER_SESSION']['ava'] = $userImageName;
				$_SESSION['USER_SESSION']['ava_type'] = "jpg";

			}else if($_FILES['ava']['type']=='image/png'){
		
				uploadPNGImage(400, $height*400/$width, $width, $height, $fileName, $userImageName."_big");

				uploadPNGImage(200, $height*200/$width, $width, $height, $fileName, $userImageName."_medium");

				uploadPNGImage(50, $height*50/$width, $width, $height, $fileName, $userImageName."_small");

				changeUserAva($_SESSION['USER_SESSION']['id'], $userImageName, "png");
				$_SESSION['USER_SESSION']['ava'] = $userImageName;
				$_SESSION['USER_SESSION']['ava_type'] = "png";
			}			

			$url = "profile.php?success";

		}

		header("Location:$url");

	}else{
		header("Location:login.php");
	}
?>