<?php
include_once 'top.php';
include_once 'menu.php';


?>

<div>
    <div class="container-fluid px-4">
    <!-- <h1>selamat datang di halaman admin</h1> -->

    <?php


$url = !isset($_GET['url']) ? 'dashboard' : $_GET['url'];
    if($url == 'dashboard'){
        include_once 'dashboard.php';
    } else if(!empty($url)){
        include_once '' .$url.'.php';
    } else {
        'dashboard';
    }

    ?>
</div>
</div>

<?php
include_once 'buttom.php';
?>