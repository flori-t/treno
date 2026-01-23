<?php

require __DIR__ . '/Wagon.php';

class Train {

    public $wagons = [];

    public function add_wagon(Wagon $wagon) {
    $this->wagons[] = $wagon;
}
    
    public function passengers_count(){
        $total = 0;

        foreach ($this->wagons as $wagon) {
            $total += $wagon->passengers_count();
        }
        return $total;
    }

    public function seats_count(){
        $total = 0;
        foreach($this->wagons as $wagon){
            $total += $wagon->seats_count();
        }
        return $total;
    }

    public function add_passengers(int $count): int {
        foreach ($this->wagons as $wagon) {
            // Add passengers to this wagon, get overflow
            $count = $wagon->add_passengers($count);

            // Stop if everyone is seated
            if ($count === 0) {
                break;
            }
        }
        // Return passengers that could not be seated
        return $count;
    }
    
    public function passengers_distribution(){
        $array = [];
        foreach($this->wagons as $wagon){
           array_push($array, $wagon->passengers);
        }
        return $array;
    }

}



$wagon1 = new Wagon(40);
$wagon2 = new Wagon(40);
$wagon3 = new Wagon(40);

$wagon1->passengers_count();  // questo dà 0
$wagon1->seats_count();  // questo dà 40, ovvero il numero totale di posti
$wagon1->add_passengers(10);  // questo restituisce il numero di passeggeri che avanzano, in questo caso 0
$wagon1->passengers_count();  // adesso dà 10
$wagon1->add_passengers(55);  // questo adesso restituisce 25
$wagon1->passengers_count();  // adesso dà 40
$wagon1->remove_passengers(15);
$wagon1->passengers_count();  // adesso dà 25
$wagon1->remove_passengers(25);
$wagon1->passengers_count();  // adesso dà 0


$train = new Train();
$train->add_wagon($wagon1);
$train->add_wagon($wagon2);
$train->add_wagon($wagon3);

//echo $train->passengers_count();
echo $train->seats_count();