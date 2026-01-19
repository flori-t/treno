<?php
class Wagon {
    public $passengers;
    public $seats;

    public function __construct($passengers = 0, $seats = 40) {
        $this->passengers = $passengers;
        $this->seats = $seats;
    }

    public function passengers_count():int{
        return $this->passengers;
    }

    public function seats_count():int{
        return $this->seats;
    }

    public function add_passengers($count):int{
        $this->passengers += $count;
        if ($this->passengers > $this->seats){
            return $this->passengers - $this->seats; //Passeggeri avanzati
        } else {
            return 0; //Passeggeri avanzati
        }
    }

    public function remove_passengers($count){
        $this->passengers -= $count;
    }
}


?>
