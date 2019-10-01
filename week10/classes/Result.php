<?php


class Result {

    private $id = "";
    private $studentId = "";
    private $assessmentId = "";
    private $score = 0;
    private $grade = "";

    public function __construct($id, $studentId, $assessmentId, $score, $grade){        
    }

    // helper methods
    public static function create($studentId, $assessmentId, $score, $grade){        
    }

    public static function find($mysqli, $id){

    }

    public static function getAll($mysqli){
        
    }

    // getters


    // setters


}




?>