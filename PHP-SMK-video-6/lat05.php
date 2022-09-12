<?php 

    //$tanggal = 0;
    //$hasil = $tanggal < 32;
    //echo $hasil.'<br>';

    /*if ($tanggal < 32) {
        if ($tanggal > 0) {
            echo 'benar';
        }
        else {
            echo 'salah';
        }
    }
    else {
        echo 'salah';
    }*/

    $nilai = 101;
    
    // if ($nilai <= 100) {
    //     if ($nilai >=0) {
    //         echo 'Nilai yang anda masukkan benar';
    //     }
    //     else {
    //         echo 'Nilai salah';
    //     }
    // }
    // else {
    //     echo 'Nilai yang anda masukkan salah';
    // }

    //atau bisa dipersingkat dengan cara dibawah ini

    /*if ($nilai >= 0 && $nilai <=100) {
        echo 'Nilai yang anda masukkan benar!';
    }
    else{
        echo 'Nilai yang anda masukkan salah!';
    }*/

    if ($nilai >= 100 || $nilai <=0) {
        echo 'Nilai yang anda masukkan salah';
    }
    else {
        echo 'Nilai yang anda masukkan benar';
    }

    // && artinya and, || (garis lurus) artinya or, == artinya sama dengan

?>