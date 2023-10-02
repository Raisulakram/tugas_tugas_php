<?php
require_once 'Bentuk2D.php';
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

$l1 = new Lingkaran(5);
$p1 = new PersegiPanjang(4, 6);
$s1 = new Segitiga(3, 4);

$ar_bidang = [$l1, $p1, $s1];

echo "<table border='2' cellpadding='10px' cellspacing='0' width='50%'>";
echo "<thead>";
echo "<tr bgcolor='yellow'><th>No</th><th>Nama Bidang</th><th>Keterangan</th><th>Luas Bidang</th><th>Keliling Bidang</th></tr>";
echo "</thead>";

echo "<tbody>";
$no = 1;
foreach ($ar_bidang as $bidang) {
    echo "<tr bgcolor='aqua'>";
    echo "<td align='center'>{$no}</td>";
    echo "<td>{$bidang->namaBidang()}</td>";
    if ($bidang instanceof Lingkaran) {
        echo "<td>Lingkaran dengan jari-jari {$bidang->getJariJari()}</td>";
    } elseif ($bidang instanceof PersegiPanjang) {
        echo "<td>Persegi Panjang dengan panjang {$bidang->getPanjang()} dan lebar {$bidang->getLebar()}</td>";
    } elseif ($bidang instanceof Segitiga) {
        echo "<td>Segitiga dengan alas {$bidang->getAlas()} dan tinggi {$bidang->getTinggi()}</td>";
    }
    echo "<td>{$bidang->luasBidang()}</td>";
    echo "<td>{$bidang->kelilingBidang()}</td>";
    echo "</tr>";
    $no++;
}


echo "</tbody>";
echo "</table>";
?>
