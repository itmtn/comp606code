<?php

class Student{

  // private properties of this class
  // cannot be 
  private $id = null;
  private $name = "";
  private $studentId = "";
  private $email = "";
  private $dob = null;
  
  // constructor to create new student object
  public function __construct($id, $name, $studentId, $email, $dob){
    $this->id = $id;
    $this->name = $name;
    $this->studentId = $studentId;
    $this->email = $email;
    $this->dob = date_create($dob);
  }

  public static function create($mysqli, $name, $studentId, $email, $dob){
    // create a new student record in students table and if successful 
    // create a student object and return it otherwise return false;
    $result = false;
    $sql = sprintf("insert into students(name, student_id, email, date_of_birth) values('%s', '%s', '%s', '%s')", $name, $studentId, $email, $dob);
    $qresult = $mysqli->query($sql);
    if ($qresult){
      $id = $mysqli->insert_id;
      $student = new Student($id, $name, $studentId, $email, $dob);      
      $result = $student;
    }
    return $result;
  }

  public static function find($mysqli, $id){
    // search students table and locate record with id
    // get that record and create student object 
    // return student object OR false if we cannot find it
    $result = false;
    $sql = sprintf("select * from students where id=%s", $id);
    $qresult = $mysqli->query($sql);
    if ($qresult){
      if ($qresult->num_rows == 1){
        $row = $qresult->fetch_assoc();
        $student = new Student($row['id'], $row['name'], $row['student_id'], $row['email'], $row['date_of_birth']);
        $result = $student;
      }
    }
    return $result;
  } 

  public static function getAll($mysqli){
    // get all students and return as a collection of student objects
    // returns false or a collection of student objects
    $sql = "select * from students";
    $result = $mysqli->query($sql);    
    $students = false;
    if ($result){
      $students = new Collection();
      while($row = $result->fetch_assoc()){
        $student = new Student($row['id'], $row['name'], $row['student_id'], $row['email'], $row['date_of_birth']);
        $students->Add($row['id'], $student);      
      }    
    }
    return $students;    
  }


  // ------ setter methods -------
  public function setId($id){
    $this->$id = $id;
  }

  public function setName($name){
    $result = true;
    if (is_string($name)){
      $this->name = $name;
    } else $result = false;
    return $result;
  }

  public function setStudentId($studentId): bool{
    $result = false;
    if (is_string($studentId) && strlen($studentId) == 8){
      $this->studentId = $studentId;
      $result = true;
    } 
    return $result;
  }

  public function setDob($dob){
    // accepts string representing the date and creates a date 
    $this->dob = date_create($dob);
  }

  public function setEmail($email){
    // string, email format
    $result = true;
    if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
      $result = false;
    } else {
      $this->email = $email;
    }
    return $result;
  }  

  // ------- getter methods ----------
  public function getName(){    
    return $this->name;
  }

  public function getStudentId(){
    return $this->studentId;
  }

  public function getEmail(){
    return $this->email;
  }

  public function getDob(){
    return $this->dob;
  }

  public function getId(){
    return $this->id;
  }

  // method for debugging  object instance
  public function debug(){
    echo "<pre><code>";
    var_dump($this);
    echo "</code></pre>";
  }

}

?>
