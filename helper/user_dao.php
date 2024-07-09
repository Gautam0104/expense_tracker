<?php





class UserDao{

    public $dbconn;


    function __construct($dbconn){
     
        $this->dbconn=$dbconn;       
    }

    //  get subjects 
    function get_users(){
        $query="select * from users_data";
        $statement=$this->dbconn->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll();
        return $result;

    }
    function get_emp(){
        $query="select * from emp_detail";
        $statement=$this->dbconn->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll();
        return $result;

    }

    function get_exp(){
        $query="select * from expenses";
        $statement=$this->dbconn->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll();
        return $result;

    }






}



















?>