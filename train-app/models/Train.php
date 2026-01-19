<?php

    class Train extends Wagon{

        public function __construct(string $codice = "AAA000", string $descrizione ="Nessuna descrizione", float $prezzo = 0, string $dataScadenza ="01/01/1900"){
        parent::__construct($passengers, $seats);
        $this->wagon = $wagon;
    }
        
    
}

    $train = [$wagon1, $wagon2, $wagon3];

    