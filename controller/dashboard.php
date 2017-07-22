<?php
include_once 'connect.php';
class DashBoard extends Connection{



    //base 64 Custom decode

    public function CustomBase64($encode_id){
        $id=base64_decode($encode_id);
        $tokens = explode(':', $id);      // split string on :
        array_pop($tokens);                   // get rid of last element
        $newString = implode(':', $tokens);
        return $newString;
    }

    //Query line for execute
    public function execute($sql){
        try {
            $query_result = $this->conn->query($sql);
            return true;
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }

    //return query result
    public function Query($query){
        try {
            $query_result = $this->conn->query($query);
            return $query_result;
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }




  //Retrieve all Album
    public function Album(){
        $album="SELECT * FROM album_name LIMIT 4";
        return $this->Query($album);
    }
    public function Album_new(){
        $album2="SELECT * FROM album_name  LIMIT 4 OFFSET 4";
        return $this->Query($album2);
    }

    //Retrieve Total Song By album
    public function total_song($album_id){
        $totalsongs="SELECT * FROM song_tbl where album_id='$album_id' ";
        $result=$this->Query($totalsongs)->rowCount();
        return $result;
    }

    //Retrieve  Top song
    public  function TopSongList(){
        $topSong="SELECT * FROM v_songdetails LIMIT 20";
        return $this->Query($topSong);
    }


    //get song by id
    public  function songbyid($album_id){
        $album_id=$this->CustomBase64($album_id);
        $albumsongs="SELECT * FROM v_songdetails where album_id='$album_id' ";
        $result= $this->Query($albumsongs);
        return $result;
    }


    public function Store(){
        $store="SELECT * FROM v_songdetails";
        $result=$this->Query($store);
        return $result;
    }


    
}

?>