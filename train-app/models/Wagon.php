<?php

    class Wagon {

        protected $passengers;
        protected $seats;

        function __construct($passengers = 0, $seats = 40){
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
                if($this->passengers > $this->seats){
                    return $this->passengers - $this->seats;
                    }
                    else
                    {
                    return 0;
                    }
        }

        public function remove_passengers($count){
        
            $this->passengers -= $count;
        }
    

    }


$wagon = new Wagon(10, 40);
echo $wagon->add_passengers(35) . "\n"; // returns 5 (overflow) 
echo $wagon->passengers_count(); // 45

