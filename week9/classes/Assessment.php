<?php

 class Assessment {

    // classes that inherit from Assessment can access protected members
    // members = class properties or methods
    protected $title = null;
    protected $description = null;
    protected $dueDate = null;

    public function debug(){
        echo "<pre><code>";
        var_dump($this);
        echo "</code></pre>";
    }    

 }

 // classes inheriting from Assessment
 class Test extends Assessment {
     private $timeAllowed;
 }


 class Assignment extends Assessment {
     private $dateIssued = null;    
     public function __construct($title, $description, $dueDate, $dateIssued){
         $this->title = $title;
         $this->description = $description;
         $this->dueDate = $dueDate;
         $this->dateIssued = $dateIssued;
     }

 }







?>