<?php

$nama = readline("masukkan nama ");
$jenjang = readline("pilih jenjang ");

if ($jenjang == "SD" || $jenjang == "SMP" || $jenjang == "SMA") {
    echo "$nama, jenjang $jenjang";
} else {
    echo "jenjang tidak ada";
}
?>