<?php

require __DIR__ . '/Wagon.php';

class Train {

    public $wagons = [];

    public function add_wagon($passengers = 0, $seats = 40){
        $this->wagons[] = new Wagon($passengers, $seats);
    }
    
    public function passengers_count(){
        $total = 0;

        foreach ($this->wagons as $wagon) {
            $total += $wagon->passengers_count();
        }
        return $total;
    }

    
}



$train = new Train;


$train->add_wagon();
$train->add_wagon();
$train->add_wagon();

echo $train->passengers_count();