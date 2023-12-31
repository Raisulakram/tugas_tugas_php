<?php
require_once 'Bentuk2D.php';
class PersegiPanjang extends Bentuk2D {
    private $panjang;
    private $lebar;
    
    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function namaBidang() {
        return "Persegi Panjang";
    }

    public function luasBidang() {
        return $this->panjang * $this->lebar;
    }

    public function kelilingBidang() {
        return 2 * ($this->panjang + $this->lebar);
    }
    public function getpanjang() {
        return $this->panjang;
    }
    public function getlebar() {
        return $this->lebar;
    }
    
}
?>
