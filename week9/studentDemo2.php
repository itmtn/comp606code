<?php

require "libs/inc_classes.php";

// abstraction - using student object and its interface without needing to know internals of object

// create collection
$students = new Collection();
$students->add(1, new Student("sarah", "0985720",  "sarah@gmail.com", "1991-07-04"));
$students->add(2, new Student("mark",  "0214578",  "mark@gmail.com",  "1995-07-09"));
$students->add(3, new Student("dave",  "15406547", "dave@gmail.com",  "1987-03-03"));

// dump out students instance
$students->debug();

// delete student object mark
$students->delete(2);

// dump out students instance
$students->debug();
