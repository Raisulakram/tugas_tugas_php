<?php
require_once 'Bentuk2D.php';
class Lingkaran extends Bentuk2D {
    private $jariJari;
    
    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    public function namaBidang() {
        return "Lingkaran";
    }

    public function luasBidang() {
        return pi() * $this->jariJari * $this->jariJari;
    }

    public function kelilingBidang() {
        return 2 * pi() * $this->jariJari;
    }
    public function getJariJari() {
        return $this->jariJari;
    }
    
}
?>
