<?php
include "db.php";
class dbHandler extends Database{
    private $posts = array();
    public function __construct(){
      
    }
    public function addPost($postObj){
        $this->posts[] = $postObj;
        $db = new Database();
        $conn = $db->dbConnect();
        if ($conn) {
            $db->dbDisconnect();
        }
    }
}
?>