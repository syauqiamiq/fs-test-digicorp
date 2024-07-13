<?php


function rambuLalulintas()
{
    static $stateColor = 0;

    $warnaLampu = ['Merah', 'Kuning', 'Hijau'];


    $returnColor = $warnaLampu[$stateColor];

    // tambah index, maks sepanjang array warna lampu

    if ($stateColor == count($warnaLampu) - 1) {
        $stateColor = 0;
    } else {
        $stateColor = $stateColor + 1;
    }


    return $returnColor;
}

function main()
{
    for ($i = 0; $i < 10; $i++) {
        echo rambuLalulintas() . "\n";
    }
}

main();
