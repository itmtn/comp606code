<?php

class Student{

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
    // accepts string representing the date
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

  // method for debugging  object instance
  public function debug(){
    echo "<pre><code>";
    var_dump($this);
    echo "</code></pre>";
  }

}

?>
