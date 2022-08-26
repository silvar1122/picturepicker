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
            $querry='SELECT * FROM '.$this->table;
            $stmt=$this->conn->prepare($querry);
            $stmt->execute();

            return $stmt;
        }
    } 