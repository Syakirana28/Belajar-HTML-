<?php 

    class DB{

        // properti
        public $host = "127.0.0.13";
        private $user = "root";
        private $password = "";
        private $database = "dbrestoran";

        public function _construct()
        {
            echo "function _construct";
        }

        //method
        public function selectData()
        {
            echo "selectData";
        }

        public function getDatabase (){
            return $this->database;
        }

        public function tampil (){
            $this->selectData();
        }

        public static function insertData()
        {
            echo "static function";
        }

    }

    DB::insertData();

    $db = new DB;

    // echo '<br>';
    
    // $db->selectData();

    // echo '<br>';

    // echo $db->host;

    // echo '<br>';

    // echo $db -> getDatabase();
    
    // echo '<br>';

    // $db -> tampil();

?>