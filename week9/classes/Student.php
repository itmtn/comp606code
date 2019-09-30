<?php

<<<<<<< HEAD
class Student {
=======

//
// student table
// id int autoincrement primary key
// name varchar 
// studentId varchar
// email varchar
// dob date
//
//

class Student{
>>>>>>> 4fc0fd91dba2ed0d2f8a79644ba7d89b2a33923d

  // private properties of this class
  // cannot be 
  private $id = null;
  private $name = "";
  private $studentId = "";
  private $email = "";
  private $dob = null;

  // constructor to create new student object
  public function __construct($name, $studentId, $email, $dob){
    $this->name = $name;
    $this->studentId = $studentId;
    $this->email = $email;
    $this->dob = date_create($dob);
  }

  public static function create($name, $studentId, $email, $dob){
    // take parameters and insert a new student record 
    // into the student table
    // THEN retrieve the value of the id field from the database
    // create a new student object instance with these values
    // and return it from this method
  }

  public static function find($id){
    // search students table and locate record
    // get that record and create student object 
    // return student object OR null if we cannot find it
    return $student;
  }




  // ------ setter methods -------
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
<<<<<<< HEAD
    // returns date of birth as a date object
=======
>>>>>>> 4fc0fd91dba2ed0d2f8a79644ba7d89b2a33923d
    return $this->dob;
  }

  // method for debugging  object instance
  public function debug(){
    echo "<pre><code>";
    var_dump($this);
    echo "</code></pre>";
  }

}

?>
