<?php
class Wagon {
    public $passengers;
    public $seats;

    public function __construct($seats = 40, $passengers = 0) {
        $this->passengers = $passengers;
        $this->seats = $seats;
    }

    public function passengers_count():int{
        return $this->passengers;
    }

    public function seats_count():int{
        return $this->seats;
    }

    public function add_passengers($count): int {
    // Total passengers if we add count
    $total = $this->passengers + $count;

    if ($total > $this->seats) {
        $overflow = $total - $this->seats;
        $this->passengers = $this->seats; // clamp to max
        return $overflow;
    }

    $this->passengers = $total;
    return 0;
    }

    public function remove_passengers($count){
        $this->passengers -= $count;
    }
}


?>
