<?php
class KonversiSuhu
{
    private $satuanSuhuAwal;
    private $besaranSuhu;
    private $satuanSuhuTujuan;

    public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan)
    {
        $this->satuanSuhuAwal = $satuanSuhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;
    }

    public function CelciusToFahrenheit($celsius)
    {
        return ($celsius * 9/5) + 32;
    }

    public function FahrenheitToCelcius($fahrenheit)
    {
        return ($fahrenheit - 32) * 5/9;
    }

    public function CelciusToRheamur($celsius)
    {
        return $celsius * 4/5;
    }

    public function RheamurToCelcius($rheamur)
    {
        return $rheamur * 5/4;
    }

    public function konversi()
    {
        $hasil = 0;
        switch ($this->satuanSuhuAwal) {
            case 'Celsius':
                if ($this->satuanSuhuTujuan == 'Fahrenheit') {
                    $hasil = $this->CelciusToFahrenheit($this->besaranSuhu);
                } elseif ($this->satuanSuhuTujuan == 'Rheamur') {
                    $hasil = $this->CelciusToRheamur($this->besaranSuhu);
                }
                break;
            case 'Fahrenheit':
                if ($this->satuanSuhuTujuan == 'Celsius') {
                    $hasil = $this->FahrenheitToCelcius($this->besaranSuhu);
                }
                break;
            case 'Rheamur':
                if ($this->satuanSuhuTujuan == 'Celsius') {
                    $hasil = $this->RheamurToCelcius($this->besaranSuhu);
                }
                break;
        }

        return $hasil;
    }

    public function cetak()
    {
        echo "<table border='2' cellpadding='10px' cellspacing='0' width='50%'>";
        echo "<tr bgcolor='yellow'><th >Satuan Suhu Awal</th><th>Besaran Suhu</th><th>Satuan Suhu Tujuan</th><th>Hasil Konversi Suhu</th></tr>";
        echo "<tr bgcolor='aqua'><td >{$this->satuanSuhuAwal}</td><td>{$this->besaranSuhu}</td><td>{$this->satuanSuhuTujuan}</td><td>{$this->konversi()}</td></tr>";
        echo "</table>";
    }
}

?>