<?php





class UserDao{

    public $conn;


    function __construct($conn){
     
        $this->conn=$conn;       
    }

    //  get subjects 
    function get_users(){
        $query="select * from users_data";
        $statement=$this->conn->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll();
        return $result;

    }






}



















?>