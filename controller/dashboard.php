<?php
include_once 'connect.php';
class DashBoard extends Connection{


    //Query line for execute
    public function execute($sql){
        $query_result = $this->conn->query($sql);
        return $query_result;
    }

  //Retrieve all Album
    public function Album(){
        $album="SELECT * FROM album_name LIMIT 4";
       return $this->execute($album);
    }


    //Retrieve Top song
    public  function TopSongList(){
        $topSong="SELECT * FROM song_tbl LIMIT 20";
        return $this->execute($topSong);
    }
    
}

?>