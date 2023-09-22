<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 php</title>
</head>
<body>
<h1 >Form Data Diri</h1>
    <form method="POST">
        <label for="">Nama : </label>
        <input type="text " name="nama" placeholder="masukan nama anda">
        <br><br>
        <label >Pekerjaan : </label>
        <select name="pekerjaan" id="">
            <option value="">--Pilihan Pekerjaan--</option>
            <option value="software enginer">Pekerjaan 1</option>
            <option value="UI/UX">Pekerjaan 2</option>
            <option value="Fullstack Web Dev">Pekerjaan 3</option>
            <option value="Network enginer">Pekerjaan 4</option>
            <option value="Data analyst">Pekerjaan 5</option>
            <option value="Front end web">Pekerjaan 6</option>
            <option value="Back end web">Pekerjaan 7</option>
            <option value="Analis sistem">Pekerjaan 8</option>
            <option value="Cyber Security">Pekerjaan 9</option>
            <option value="Mobile App Developer">Pekerjaan 10</option>
        </select>
        <br><br>
        <label >Hobby :</label>
        <input type="radio" name="hobby" value="Gym" >Hobbiy 1
        <input type="radio" name="hobby" value="Football" >Hobbiy 2
        <input type="radio" name="hobby" value="Badminton" >Hobbiy 3
        <input type="radio" name="hobby" value="Jalan-Jalan" >Hobbiy 4
        <input type="radio" name="hobby" value="Main Game" >Hobbiy 5
        <br>
        <input type="radio" name="hobby" value="Belajar Coding" >Hobbiy 6
        <input type="radio" name="hobby" value="Tiduran" >Hobbiy 7
        <input type="radio" name="hobby" value="Nongkrong" >Hobbiy 8
        <input type="radio" name="hobby" value="Fotographer" >Hobbiy 9
        <input type="radio" name="hobby" value="Balap motor">Hobbiy 10
        <br><br>
        <button name="simpan" type="submit">Simpan</button>
        
    </form>

    <?php
    $nama = $_POST['nama'];
    $pekerjaan = $_POST['pekerjaan'];
    $hobby = $_POST['hobby'];
    $tombol = $_POST['simpan'];


if(isset($tombol)){


echo "<br><table border='1' width='50%' >
            <tr>
                <th>Nama</th>
                <th>Pekerjaan</th>
                <th>Hobby</th>
            </tr>
            <tr>
                <td>$nama</td>
                <td>$pekerjaan</td>
                <td>$hobby</td>
            </tr>
          </table>";
} ?>

</body>
</html>