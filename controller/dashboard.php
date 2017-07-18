<?php
include_once 'connect.php';
class DashBoard extends Connection{


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
       return $this->execute($album);
    }


    //Retrieve Top song
    public  function TopSongList(){
        $topSong="SELECT * FROM song_tbl LIMIT 20";
        return $this->execute($topSong);
    }
    
}

?>