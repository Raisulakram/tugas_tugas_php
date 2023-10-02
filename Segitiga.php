<?php
require_once 'Bentuk2D.php';
class Segitiga extends Bentuk2D {
    private $alas;
    private $tinggi;
    
    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function namaBidang() {
        return "Segitiga";
    }

    public function luasBidang() {
        return 2.5 * $this->alas * $this->tinggi;
    }

    public function kelilingBidang() {
        return 2 * ($this->alas + $this->tinggi);
    }
    public function getalas() {
        return $this->alas;
    }
    public function gettinggi() {
        return $this->tinggi;
    }
}
?>
