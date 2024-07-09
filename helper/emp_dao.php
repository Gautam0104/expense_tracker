<?php






class EmpDao{

    public $dbconn;


    function __construct($dbconn){
     
        $this->dbconn=$dbconn;       
    }

    //  GET EMPLOYEE
    function get_emp(){
        $query="select * from emp_detail";
        $statement=$this->dbconn->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll();
        return $result;

    }







}



















?>
