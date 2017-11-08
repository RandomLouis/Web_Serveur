<?php

class Movie
{
    private $name;
    private $release_date;
    private $description;
    private $duration = 120;
  
    
    
    public function __construct($name = "", $description = "", $duration ="")
    {
        $this->name = $name;
        $this->description = $description ;
        $this->duration = $duration;
    }
    
    public function getName()
    {
        return $this->name . "\n";
    }
    
    public function setName($name = "")
    {
        $this->name = $name;
    }   
    
    public function getDescription()
    {
        return $this->name . "\n";
    }
    
    public function setDescription($name = "")
    {
        $this->name = $name;
    } 
    
    public function getDuration()
    {
        return $this->name . "\n";
    }
    
    public function setDuration($name = "")
    {
        $this->name = $name;
    } 
    
    public function toString()
    {
        print 'Name of the Movie : ' . $this->name . "\n" . 'Description : ' . $this->description . "\n" . 'Duration : ' . $this->duration . " minutes \n";
    }
    
}

$movie1 = new Movie("Star Wars 26589 Part 1 : Darth Vader RETURNS","Disney needs more MONEYYYYYYY",145);


$movie1->toString();

$movie1->setName("Patator, The Revengence");
echo $movie1->getName();

