<?php
    class Fruit {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getFruits() {
        $stmt=$this->db->query('SELECT * FROM fruits');
        $result = $this->db->resultSet();
        return $result;
    }
    }
