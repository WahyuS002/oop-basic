<?php

class Mobil {
    public $nama = "Lamborgini";
    public $harga;

    public function maju()
    {
         return "Mobil $this->nama maju sejauh 10km/jam";
    }
}

// INHERITANCE
class MobilSport extends Mobil {
    public function maju()
    {
        return "Mobil $this->nama maju sejauh 200km/jam";
    }
}

$mobilSport = new MobilSport();
// echo $mobilSport->nama;
echo $mobilSport->maju();

?>