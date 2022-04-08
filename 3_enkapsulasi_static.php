<?php

class Mobil {
    public static $nama = 'Toyota';
    protected static $harga = 5000;
    private $warna = 'Merah';

    public static function getNamaAndHarga()
    {
        // return $this->nama . $this->harga;
        return self::$nama . " " . self::$harga;
        // output
        // Toyota5000
    }
}

// $mobil_toyota = new Mobil();
// $mobil_toyota->nama; // success
// $mobil_toyota->harga; // error
// $mobil_toyota->warna; // error

$mobil_toyota_static = Mobil::getNamaAndHarga();
echo $mobil_toyota_static;

?>