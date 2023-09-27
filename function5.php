<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$ar_prodi = ["SI" =>"sistem informasi", "TI" => "teknik informatika","TE"=>"Teknik electro"];
$ar_skill = ["HTML"=>10, "CSS"=>10, "javascript"=>20,"RWD"=>20,"PHP"=>30, "laravel" => 40, "Mysql"=>40];
$ar_domisili = ["Jakarta", "Bandung", " Surabaya", "Malang","Bali","lainnya"];
?>

<fieldset>
    <legend>Form registrasi IT Club</legend>
    <table>
        <thead>
        <tr>
            <th>form regestrasi</th>

        </tr>
        </thead>
        <tbody>
            <form method="POST">
                <tr>
                    <td>NIM :</td>
                    <td>
                        <input type="text" name="nim" id="" size="30">
                    </td>
                </tr>
                <tr>
                    <td>Nama : </td>
                    <td>
                        <input type="text" name="nama" id="" size="30">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin : </td>
                    <td>
                        <input type="radio" name="jk" value="laki-laki" id="">Laki-laki &nbsp;
                        <input type="radio" name="jk" value="" id="perempuan">Perempuan &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>Program studi :</td>
                    <td>
                        <select name="prodi" id="">
                            <?php
                            foreach($ar_prodi as $prodi => $v){
                                ?>
                                <option value="<?= $prodi?>"><?= $v?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Skill Programing :</td>
                    <td>
                        
                        <?php
                            foreach($ar_skill as $skill=> $s){
                                ?>
                               <input type="checkbox" name="skill[]" id="" value="<?= $skill?>"><?= $skill?>
                                <?php
                            }
                            ?>
                       
                    </td>
                </tr>
                <tr>
                    <td>Domisili :</td>
                    <td>
                        <select name="domisili" id="">
                        <?php
                            foreach($ar_domisili as $domisili){
                                ?>
                                <option value="<?= $domisili?>"><?= $domisili?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tfoot>
                    <tr>
                        <th><button name="proses">submit</button></th>
                    </tr>
                </tfoot>
            </form>
        </tbody>
    </table>
</fieldset>

<?php
if(isset($_POST['proses'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $domisili = $_POST['domisili'];

    echo "NIM : $nim <br> ";
    echo "Nama : $nama <br> ";
    echo "Jenis kelamin : $jk <br> ";
    echo "Program tudi : $prodi <br> ";
    $total = 0;
    foreach ($skill as $skor){
        $total += $ar_skill[$skor];
    }
    function skor_skill($total){
        if($total >= 100 && $ $total <=170){
            return "sangat baik";
        }
        else if($total >= 60 && $total <= 100){
            return "baik";
        }
        else if($total >= 40&& $total <= 60){
            return "cukup";
        }
        else if($total >= 0 && $total <= 40){
            return "kurang";
        } else {
            return "Tidak memadai";
        }
    }
    echo "skill : ";
    foreach($skill as $skor){
        echo " $skor ,";
    }
    echo "<br>";
    echo "Total Skor : $total <br>";
    echo "kategori skill : ".skor_skill($total)."<br>";
    echo "domisili : $domisili <br> ";
}
?>
</body>
</html>

