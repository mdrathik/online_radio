<?php 

class Mfunction extends Connection {




// login for Admin start
    public function loginAdmin($username,$password,$privilige) {
    	$password = "admin".md5($password)."admin";
   $sql	= 	"SELECT * FROM adminlogin WHERE username ='".$username."' AND password ='".$password."' AND privilige='".$privilige."'";

        $STH = $this->DBH->query($sql);
        $num = $STH->rowCount();
       	 
       	 if($num==1){
       	 	session_start();
       	 	$_SESSION['name']= $username;
       	 	$_SESSION['privilige'] = '1';
       	 }	

       	 return $num;
    }
//Login for admin End
//-------------------------------------------------------------------------------------------------------------

    public function insertSong($album_disc,$url, $song_id, $song_name, $publish_year, $album_name, $genare_name, $artist_name, $price, $artist_photo, $album_photo)
    {
    	$album_id  = uniqid("album",FALSE);
    	$artist_id = uniqid("artist",FALSE);
    	$demo_song = "demo_".$url;
    	
    	$STH = $this->DBH->prepare("INSERT INTO song_tbl (song_id, song_name, publish_year, album_id, genare_song, artist_id, url_to_main, demo_url, price, availability) VALUES ('$song_id', '$song_name', '$publish_year', '$album_id', '$genare_name', '$artist_id', '$url', '$demo_song', '$price', '0')");
		$STH->execute();
		
		$STH = $this->DBH->prepare("INSERT INTO album_name (album_name, album_id, album_cover, discription) VALUES ('$album_name', '$album_id', '$album_photo', '$album_disc')");

		$STH->execute();

		$STH = $this->DBH->prepare("INSERT INTO artist_details (artist_name, artist_id, artist_image) VALUES ('$artist_name', '$artist_id', '$artist_photo')");

		$STH->execute();

		if($STH) return 0;
		else return 1;

    }




//-------------------------------------------------------------------------------------------------------------



public function mp3SP($song)
{
	error_reporting(0);
	require_once 'class.mp3.php';
	$path = 'uploads/music/m3/'.$song;
$mp3 = new PHPMP3($path);
$mp3_1 = $mp3->extract(0,30);
$mp3_1->save('uploads/demo_music/demo_'.$song);

}

//-------------------------------------------------------------------------------------------------------------

    public function sessionCheck(){
    	session_start();
    	if(!isset($_SESSION['name']) && strcmp($_SESSION['name'], "admin")!=0){
    		session_destroy();
    		   echo	"<script>
    	 window.location = 'index.php';
		 </script>";
    }
    	}
  //------------------------------------------------------------------------------------------------------------------------------------------

    public function insertMp3($files,$name)
    	{						       

				    	$target_dir = "uploads/music/m3/";
				        $target_file = $target_dir . basename($files["name"]);
				        $target_file_save = $target_dir . $name;
				        $uploadOk = 1;
				        $mp3FileType = pathinfo($target_file,PATHINFO_EXTENSION);

							    		// Check if file already exists
							if (file_exists($target_file)) {
							    return "Sorry, file already exists.";
							    $uploadOk = 0;
							}
										// Check file size
							if ($files["size"] > 5000000) {
							    return "Sorry, your file is too large.";
							    $uploadOk = 0;
							}
										// Allow certain file formats
							if($mp3FileType != "mp3") {
							    return "Sorry, only MP3 files are allowed.";
							    $uploadOk = 0;
							}
										// Check if $uploadOk is set to 0 by an error
							if ($uploadOk == 0) {
							    return "Sorry, your file was not uploaded.";
										// if everything is ok, try to upload file
							} else {
							    if (move_uploaded_file($files["tmp_name"], $target_file_save)) {
							       		return 1;
							    } else {
							        return "Sorry, there was an error uploading your file.";
							    }
							}
    	}


//------------------------------------------------------------------------------------------------------------------------------------------

public function ImageUpload($artistImage,$type)
{


						        $target_dir = "uploads/".$type."/";
						         $target_file = $target_dir . basename($artistImage["name"]);
						         $uploadOk = 1;
						         $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
						         $check = getimagesize($artistImage["tmp_name"]);
						// Check if image file is a actual image or fake image
						
						   
						    if($check !== false) {
						       
						        $uploadOk = 1;
						    } else {
						        return "File is not an image.";
						        $uploadOk = 0;
						    }


						// Check if file already exists
						if (file_exists($target_file)) {
						    
						    $uploadOk = 0;
						}
						// Check file size
						if ($artistImage["size"] > 500000) {
						 
						    $uploadOk = 0;
						}
						// Allow certain file formats
						if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
						&& $imageFileType != "gif" ) {
						    return "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
						    $uploadOk = 0;
						}
						// Check if $uploadOk is set to 0 by an error
						if ($uploadOk == 0) {
						    return "Sorry, your file was not uploaded.";
						// if everything is ok, try to upload file
						} else {
						    if (move_uploaded_file($artistImage["tmp_name"], $target_file)) {
						        return "The file ". basename( $artistImage["name"]). " has been uploaded.";
						    } else {
						        return "Sorry, there was an error uploading your file.";
						    }
						}
}

//--------------------------------------------------------------------------------------------------------------

	public function showSong()
	{
			$STH 		= $this->DBH->query("SELECT * FROM v_songdetails");
			

			return $STH;
	}





//--------------------------------------------------------------------------------------------------------------
	public function showBank()
	{
			$STH 		= $this->DBH->query("SELECT * FROM bank_details");
			

			return $STH;
	}




//--------------------------------------------------------------------------------------------------------------
	public function showUser()
	{
			$STH 		= $this->DBH->query("SELECT * FROM userlogin");
			

			return $STH;
	}



//--------------------------------------------------------------------------------------------------------------
	public function editUser($id)
	{
			$STH 		= $this->DBH->query("SELECT * FROM userlogin WHERE id=".$id."");
			

			return $STH;
	}



//--------------------------------------------------------------------------------------------------------------
	public function deleteUser($id)
	{
			$sql = "DELETE FROM userlogin WHERE id='".$id."'";
		$STH = $this->DBH->prepare($sql);
		$STH->execute();

			return $STH;
	}




//--------------------------------------------------------------------------------------------------------------
	public function editUserpass($id, $password)
	{
		$sql1 = "UPDATE userlogin SET password='".$password."' WHERE id='".$id."'";
		$STH = $this->DBH->prepare($sql1);
		$STH->execute();
			

			return $STH;
	}





//--------------------------------------------------------------------------------------------------------------
	public function getEdit($id)
	{
			$STH 		= $this->DBH->query("SELECT * FROM v_songdetails WHERE song_id='".$id."'");
			

			return $STH;
	}

//--------------------------------------------------------------------------------------------------------------

	public function deleteSong($id,$album,$artist,$song)
	{
		$sql = "DELETE FROM song_tbl WHERE song_id='".$id."'";
		$STH = $this->DBH->prepare($sql);
		$STH->execute();

		$sql = "DELETE FROM album_name WHERE album_id='".$album."'";
		$STH = $this->DBH->prepare($sql);
		$STH->execute();
		
		$sql = "DELETE FROM artist_details WHERE artist_id='".$artist."'";
		$STH = $this->DBH->prepare($sql);
		$STH->execute();

		$file = "uploads/music/m3/".$song;
		unlink($file);
		$file1 = "uploads/demo_music/demo_".$song;
		unlink($file1);

		return "done";
	}



//--------------------------------------------------------------------------------------------------------------

	public function updateSong($album_id, $artist_id, $song_id, $song_name, $publish_year, $album_name, $genare_name, $artist_name, $price)
	{
		$sql = "UPDATE song_tbl SET song_name='".$song_name."', publish_year='".$publish_year."', genare_song='".$genare_name."', price='".$price."' WHERE song_id='".$song_id."'";
		$STH = $this->DBH->prepare($sql);
		$STH->execute();
		$sql1 = "UPDATE album_name SET album_name='".$album_name."' WHERE album_id='".$album_id."'";
		$STH = $this->DBH->prepare($sql1);
		$STH->execute();
		$sql2 = "UPDATE artist_details SET artist_name='".$artist_name."' WHERE artist_id='".$artist_id."'";
		$STH = $this->DBH->prepare($sql2);
		$STH->execute();
		return "done";
	}


	
//--------------------------------------------------------------------------------------------------------------

    public function logout(){
    	session_destroy();
    	 echo	"<script>
    	 window.location = 'index.php';
		 </script>";
    }
  }
//------------------------------------------------------------------------------------------------------------------------------------------
 ?>