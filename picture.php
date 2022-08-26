<?php
    class Picture{
        private $conn;
        private $table='pictures';
        
        public $id;
        public $title;
        public $url;

        public function __construct($db){
            $this->conn=$db;
            
        }

        public function read(){
            $querry='SELECT * FROM '.$this->table.' ORDER BY ID DESC';
            $stmt=$this->conn->prepare($querry);
            $stmt->execute();

            return $stmt;
        }

        public function create(){
            $querry='INSERT INTO '.$this->table.' (title,url) VALUES(?,?)';
            $stmt=$this->conn->prepare($querry);
           
            if($stmt->execute([$this->title,$this->url])){
                return true;
            }
                printf('Error %s. \n',$stmt->error);
                return false;
        }
    } 