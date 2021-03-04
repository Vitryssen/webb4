<?php
class Handler {
    private $posts;
    public function __construct(){
    }
    public function addPost($postObj){
      $this->posts[] = $postObj;
    }
    public function __get($property) {
      if (property_exists($this, $property)) {
        return $this->$property;
      }
    }
}
?>