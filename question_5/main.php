<?php


function main()
{

    $kata = "strawberry";

    $countCharArr = [];

    for ($i = 0; $i < strlen($kata); $i++) {
        $character = $kata[$i];

        if (isset($countCharArr[$character])) {
            // JIKA SUDAH ADA, TAMBAHKAN COUNTER
            $countCharArr[$character]++;
        } else {
            // JIKA BELUM ADA SET COUNTER MENJADI 1

            $countCharArr[$character] = 1;
        }
    }

    // SORTING DESCENDING
    arsort($countCharArr);

    $keys = array_keys($countCharArr);



    echo $keys[0] . " " . $countCharArr[$keys[0]] . "x\n";
}

main();
