<?php


class Nilai
{
    private $mapel;
    private $nilai;


    // inisialisasi data
    function __construct($mapel, $nilai)
    {
        $this->mapel = $mapel;
        $this->nilai = $nilai;
    }

    public function setMapel($mapel)
    {
        $this->mapel = $mapel;
    }
    public function getMapel()
    {
        return $this->mapel;
    }

    public function setNilai($nilai)
    {
        $this->nilai = $nilai;
    }
    public function getNilai()
    {
        return $this->nilai;
    }
}
