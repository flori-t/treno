<?php
require __DIR__ . '/Wagon.php';
class Train extends Wagon {

    public $wagon;

    public function __construct($passengers = 0, $wagon=[]){
        parent::__construct($passengers);
        $this->wagon = $wagon;
    }
    public function add_wagon($wagon){
        $wagon = new Wagon;
        array_push($this->wagon, $wagon);
        
    }
    public function passengers_count(){
        return $this->passengers;
    }

    
}

$train = new Train;
$train-> add_wagon($wagon);
$train-> add_wagon($wagon2);
$train-> add_wagon($wagon3);
var_dump(passengers_count());