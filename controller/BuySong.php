<?php
session_start();
require_once 'dashboard.php';
include_once 'connect.php';


 class Buy {

     public function Query($query){
         $dashboard=new DashBoard();
         $result=$dashboard->Query($query);
         return  $result;
     }



     protected function CustomBase64($encode_id){
         $id=base64_decode($encode_id);
         $tokens = explode(':', $id);      // split string on :
         array_pop($tokens);                   // get rid of last element
         $newString = implode(':', $tokens);
         return $newString;
     }

     function __construct()
     {
         if(!isset($_SESSION['username'])  &&  !isset($_SESSION['user_id'])){
             echo '<script>window.location.href = "../userlogin.php";</script>';
         }
     }


     public function BuySingleSong($album_id,$song_id){
         $album_id=$this->CustomBase64($album_id);
         $song_id=$this->CustomBase64($song_id);
         $BuySingleSong="SELECT * FROM v_songdetails where album_id='$album_id' and song_id='$song_id' ";
         $result=$this->Query($BuySingleSong);
         return $result;
     }

     public function FullAlbum($album_id){
         $album_id=$this->CustomBase64($album_id);
         $BuySingleSong="SELECT * FROM album_name where album_id='$album_id' ";
         $result=$this->Query($BuySingleSong);
         return $result;
     }






 }
?>
