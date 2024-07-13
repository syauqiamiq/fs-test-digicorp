<?php


function main()
{

    $arrData = [3, 100, 32, 53, 23];

    // SORTING DESCENDING
    rsort($arrData);

    // AMBIL INDEX 2
    echo "TERBESAR KEDUA ADALAH: " . $arrData[1] . "\n";
}

main();
