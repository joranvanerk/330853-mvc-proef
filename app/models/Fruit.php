<?php
    class Fruit {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }


        public function getFruits() {
            $this->db->query("SELECT * FROM fruit");

            $result = $this->db->resultSet();

            return $result;
        }

    }
