<?php 

    // $hari = 4;
    // switch ($hari) {
    //     case 1:
    //         echo 'minggu';
    //         break;
    //     case 2:
    //         echo 'senin';
    //         break;
    //     case 3:
    //         echo 'selasa';
    //         break;
    //     default:
    //         echo 'hari belum dibuat';
    //         break;
    // }

    $pilihan = 'kurang';
    switch ($pilihan) {
        case 'tambah':
            echo 'anda memilih tambah';
            break;
        case 'ubah';
            echo 'anda memilih ubah';
            break;
        case 'hapus';
            echo 'anda memilih hapus';
            break;

        default:
            echo 'silahkan tentukan pilihan anda 
            atau pilihan yang anda pilih belum ada';
            break;
    }

?>