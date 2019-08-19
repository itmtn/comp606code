<?phpS

class Student {

  private $name;
  private $studentId;
  private $email;
  private $dob;

  public function __construct($name, $studentId, $email, $dob){
    $this->name = $name;
    $this->studentId = $studentId;
    $this->email = $email;
    $this->dob
  }

  public function setName($name){
    // string
    $result = true;
    if (is_string($name)){
      $this->name = $name;
    } else $result = false;
    return $result;
  }

  public function setStudentId($studentId){
    // string, exactly 8 characters
    $result = true;
    if (is_string($studentId)) {
      if (strlen($studentId) == 8){
        $this->studentId = $studentId;
      } else {
        $result = false;
      }
    } else {
      $result = false;
    }
    return $result;
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

  public function getName(){    
    return $this->name;
  }

  public function getStudentId(){
    return $this->studentId;
  }

  public function getEmail(){
    return $this->email;
  }

}

?>
