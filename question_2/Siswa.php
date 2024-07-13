<?php


class Siswa
{
    private $nrp;
    private $nama;
    private $daftarNilai = [];

    // inisialisasi data
    function __construct($nrp, $nama, $daftarNilai = [])
    {
        $this->nrp = $nrp;
        $this->nama = $nama;
        $this->daftarNilai = $daftarNilai;
    }

    public function setNrp($nrp)
    {
        $this->nrp = $nrp;
    }
    public function getNrp()
    {
        return $this->nrp;
    }
    public function setNama($nama)
    {
        $this->nama = $nama;
    }
    public function getNama()
    {
        return $this->nama;
    }
    public function setDaftarNilai($daftarNilai)
    {
        if (count($this->daftarNilai) < 3) {
            array_push($this->daftarNilai, $daftarNilai);
        }
    }

    public function getDaftarNilai()
    {
        return $this->daftarNilai;
    }
}
