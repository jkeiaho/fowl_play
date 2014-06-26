<?php

class Upload{

	public static function to_folder($folder){

		$file   = $_FILES['file']['name'];
		$tmp    = $_FILES['file']['tmp_name'];
		$error  = $_FILES['file']['error'];

		if($error == 0){
			move_uploaded_file($tmp, $folder.$file);
			return $folder.$file;

		}else if($error == 1 || $error == 2){
			echo 'The file you are attempting to upload is too large';
			return false;
		}else if($error == 3){
			echo 'The file you are attempting to upload is incomplete';
			return false;
		}else if($error == 4){
			echo 'No file was uploaded';
			return false;
		}else{
			echo 'Unknown error';
			return false;
		}

	}


	public static function multiple_to_folder($folder){

		$files_array = array();

		for($i=0; $i < count($_FILES['file']['name']); $i++){
			$file    = $_FILES['file']['name'][$i];
			$tmp     = $_FILES['file']['tmp_name'][$i];
			$error   = $_FILES['file']['error'][$i];

            
        if($error == 0){
        	move_uploaded_file($tmp, $folder.$file);
        	$files_array[] = $folder.$file;

        }else if($error == 1 || $error == 2){
			echo 'The file you are attempting to upload is too large';
		}else if($error == 3){
			echo 'The file you are attempting to upload is incomplete';
		}else if($error == 4){
			echo 'No file was uploaded';
		}else{
			echo 'Unknown error';
		}
        
	}
	
		return $files_array;
	}
}
