<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latiha array 3</title>
</head>
<body>
    
<?php
$m1 = ['nim' => '00011', 'nama' => 'Raisul Akram', 'nilai' => 95];
$m2 = ['nim' => '00012', 'nama' => 'Rafael', 'nilai' => 96];
$m3 = ['nim' => '00013', 'nama' => 'Andi', 'nilai' => 90];
$m4 = ['nim' => '00014', 'nama' => 'Sarah', 'nilai' => 52];
$m5 = ['nim' => '00015', 'nama' => 'Alex', 'nilai' => 60];
$m6 = ['nim' => '00016', 'nama' => 'Malik', 'nilai' => 55];
$m7 = ['nim' => '00017', 'nama' => 'Dwi', 'nilai' => 75];
$m8 = ['nim' => '00018', 'nama' => 'Lisa', 'nilai' => 91];
$m9 = ['nim' => '00019', 'nama' => 'Zira', 'nilai' => 88];
$m10 = ['nim' => '00010', 'nama' => 'Yana', 'nilai' => 99];

$ar_judul = ['No', 'Nim', 'Nama mahasiswa', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
$ar_mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

$nilai_mahasiswa = array_column($ar_mahasiswa, 'nilai');
$nilai_tertinggi = max($nilai_mahasiswa);
$nilai_terendah = min($nilai_mahasiswa);
$jumlah_mahasiswa = count($ar_mahasiswa);
$rata_rata_nilai = array_sum($nilai_mahasiswa) / $jumlah_mahasiswa;
$jumlah_nilai_keseluruhan = array_sum($nilai_mahasiswa);
?>

<h3 align="center">Daftar Nilai Mahasiswa</h3>
<table border="1" cellpadding="10" cellspacing="0" width="100%">
    <thead>
        <tr>
            <?php
            foreach ($ar_judul as $judul) {
                ?>
                <th bgcolor="yellow"><?= $judul ?></th>
            <?php
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($ar_mahasiswa as $mahasiswa) {
            $keterangan = $mahasiswa['nilai'] >= 60 ? 'Lulus' : 'Tidak Lulus';

            $nilai = $mahasiswa['nilai'];
            if ($nilai >= 90) {$grade = 'A';} 
            elseif ($nilai >= 80) {$grade = 'B';} 
            elseif ($nilai >= 70) {$grade = 'C';} 
            elseif ($nilai >= 60) {$grade = 'D';}
            else {$grade = 'E';}

            switch ($grade) {
                case 'A':$predikat = 'Sangat Baik';break;
                case 'B':$predikat = 'Baik';break;
                case 'C':$predikat = 'Cukup';break;
                case 'D':$predikat = 'Kurang';break;
                case 'E':$predikat = 'Sangat Kurang';break;
                default:$predikat = 'Tidak Diketahui';
            }
            ?>

            <tr bgcolor="aqua">
                <td align="center"><?= $no++ ?></td>
                <td><?= $mahasiswa['nim'] ?></td>
                <td><?= $mahasiswa['nama'] ?></td>
                <td><?= $mahasiswa['nilai'] ?></td>
                <td ><?= $keterangan ?></td>
                <td align="center"><?= $grade ?></td>
                <td><?= $predikat ?></td>
            </tr>
        <?php
        } ?>
    </tbody>
    <tfoot bgcolor="yellow">
        <tr>
            <th colspan="3">Nilai tertinggi</th>
            <td align="center" colspan="4"><?= $nilai_tertinggi ?></td>

        </tr>
        <tr>
            <th colspan="3">Nilai terendah</th>
            <td align="center" colspan="4"><?= $nilai_terendah ?></td>
            
        </tr>
        <tr>
            <th colspan="3">Nila rata-rata</th>
            <td align="center" colspan="4"><?= number_format($rata_rata_nilai, 2) ?></td>
        </tr>
        <tr>
            <th colspan="3">Jumlah Mahasiswa</th>
            <td align="center" colspan="4"><?= $jumlah_mahasiswa ?></td>
        </tr>
        <tr>
            <th colspan="3">Jumlah Nilai Keseluruhan</th>
            <td align="center" colspan="4"><?= $jumlah_nilai_keseluruhan ?></td>
        </tr>
    </tfoot>
</table>
</body>
</html>
