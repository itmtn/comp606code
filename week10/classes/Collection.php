<?php

class Collection {

    private $records = array();    

    public function add($key, $record){
        $result = false;
        if ($key != null) {
            $this->records[$key] = $record;
            $result = true;
        }
        return $result;
    }

    public function delete($key){        
        unset($this->records[$key]);
    }

    public function update($key, $record){
        if (array_key_exists($key, $this->records)){
            $this->$records[$key] = $record;
        }
    }
 
    public function get($key){
        return $this->$records[$key];
    }
    
    public function getRecords(){
        return $this->records;
    }

    public function debug(){
        echo "<pre><code>";
        var_dump($this);
        echo "</code></pre>";
    }

}

?>