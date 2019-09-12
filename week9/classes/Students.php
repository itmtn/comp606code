<?php

class Collection {

    private $records = array();

    public function add($key, $record){
        $result = false;
        if ($key != null) {
            $records[$key] = $record;
            $result = true;
        }
        return $result;
    }

    public function delete($key){        
        unset($this->records[$key]);
    }

    public function update($key, $record){
        if (array_key_exists($key, $this->records)){
            $records[$key] = $record;
        }
    }
 
    public function get($key){
        return $records[$key];
    }

}


?>