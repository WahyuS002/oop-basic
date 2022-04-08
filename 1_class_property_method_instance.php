<?php

// class
class Mobil {
    // property
    public $nama = "Toyota";
    public $harga;

    // method / fungsi / function
    public function maju()
    {
         return "Mobil $this->nama maju sejauh 10km/jam";
    }
}

$mobil = new Mobil();
// echo $mobil->nama;
echo $mobil->maju();
?>