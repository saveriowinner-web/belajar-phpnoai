<?php
    echo "APLIKASI PENYEWAAN IPHONE \n
        Pilihan iPhone: 
      1. iPhone 13 
                 Per Jam : Rp15.000 
                Per Hari: Rp150.000 
      2. iPhone 14 
                 Per Jam : Rp20.000 
             Per Hari: Rp200.000 
      3. iPhone 15 
         Per Jam : Rp25.000 
         Per Hari: Rp250.000 
      4. iPhone 16 
          Per Jam : Rp30.000 
         Per Hari: Rp300.000 
        Jenis Sewa: 
         1. Per Jam 
         2. Per Hari 
     \n";

    $pilihan = readline("Pilihan iPhone : ");
    $jenis   = readline("Jenis Sewa     : ");
    $lama    = readline("Lama Sewa      : ");
    $jumlah  = readline("Jumlah iPhone  : ");

    $harga_satuan = 0;
    $nama_iphone = "";

    if ($pilihan == "1" && $jenis == "1") {
        $nama_iphone = "iPhone 13";
        $harga_satuan = 15000;
    } elseif ($pilihan == "1" && $jenis == "2") {
        $nama_iphone = "iPhone 13";
        $harga_satuan = 150000;
    } elseif ($pilihan == "2" && $jenis == "1") {
        $nama_iphone = "iPhone 14";
        $harga_satuan = 20000;
    } elseif ($pilihan == "2" && $jenis == "2") {
        $nama_iphone = "iPhone 14";
        $harga_satuan = 200000;
    } elseif ($pilihan == "3" && $jenis == "1") {
        $nama_iphone = "iPhone 15";
        $harga_satuan = 25000;
    } elseif ($pilihan == "3" && $jenis == "2") {
        $nama_iphone = "iPhone 15";
        $harga_satuan = 250000;
    } elseif ($pilihan == "4" && $jenis == "1") {
        $nama_iphone = "iPhone 16";
        $harga_satuan = 30000;
    } elseif ($pilihan == "4" && $jenis == "2") {
        $nama_iphone = "iPhone 16";
        $harga_satuan = 300000;
    }

    if ($harga_satuan == 0) {
         "Pilihan iPhone atau Jenis Sewa tidak valid!\n";
    } else {
        $nama_jenis = ($jenis == "1") ? "Per Jam" : "Per Hari";
        $satuan     = ($jenis == "1") ? "Jam" : "Hari";
        $lama       = (int)$lama;
        $jumlah     = (int)$jumlah;
        $total_bayar = $harga_satuan * $lama * $jumlah;


         echo"\niPhone      : " . $nama_iphone . "\n";
         echo"Jenis Sewa  : " . $nama_jenis . "\n";
         echo"Harga Satuan: Rp" . number_format($harga_satuan, 0, ',', '.') . "\n";
         echo"Lama Sewa   : " . $lama . " " . $satuan . "\n";
         echo"Jumlah      : " . $jumlah . " iPhone\n";
         echo"\nTotal Bayar : Rp" . number_format($total_bayar, 0, ',', '.') . "\n";
    }
?>