<?php

include "./Siswa.php";
include "./Nilai.php";


function generateRandomName($n)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}

function generateRandomStudent($n, $arr)
{
    for ($i = 0; $i < $n; $i++) {
        // Generate 5 digit nrp random
        $randomNrp = random_int(44444, 99999);
        $randomName = generateRandomName(10);
        $listMapel = ['Inggris', 'Indonesia', 'Jepang'];

        $student = new Siswa("", "", []);
        $student->setNrp($randomNrp);
        $student->setNama($randomName);
        $student->setDaftarNilai(
            new Nilai($listMapel[random_int(0, count($listMapel) - 1)], random_int(0, 100))
        );
        array_push($arr, $student);
    }

    return $arr;
}

function main()
{

    // QUESTION B.
    $newStudent = new Siswa("891724912", "SISWA BARU", []);
    $newStudent->setDaftarNilai(new Nilai("Inggris", 100));

    echo "NRP: " . $newStudent->getNrp() . "\n";
    echo "NAMA: " . $newStudent->getNama() . "\n";
    foreach ($newStudent->getDaftarNilai() as $key => $objectDaftarNilai) {
        echo $objectDaftarNilai->getMapel() . ": " . $objectDaftarNilai->getNilai() . "\n";
    }


    // QUESTION C. GENERATE RANDOM

    $listStudent = [];

    $generatedStudentDatas = generateRandomStudent(10, $listStudent);

    print_r($generatedStudentDatas);
}

main();
