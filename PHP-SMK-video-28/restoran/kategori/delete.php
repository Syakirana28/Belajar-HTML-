<?php 

    if (isset($_GET['id'])) {
        $id=$_GET['id'];

        $sql = " DELETE FROM tblkategori WHERE idkwtegori=$id";
        echo $sql;

        $db->runSQL($sql);

        header("location:?f=kategori&m=select");

    }

?>