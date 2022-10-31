<?php 

    require_once "../function.php";

    //$id = 3;

    $sql = "DELETE FROM tblmenu WHERE idmenu = $id";

    $result = mysqli_query($koneksi, $sql);

    header("location:http://localhost/PHP-SMK/PHP-SMK-video-21/restoran/menu/select.php")
    

?>