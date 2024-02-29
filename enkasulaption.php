<?php

class Mahasiswa {
    // Properties
    private $nama;
    private $nim;
    protected $jurusan;

    // Constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Getter methods
    public function getNama() {
        return $this->nama;
    }

    public function getNim() {
        return $this->nim;
    }

    public function getJurusan() {
        return $this->jurusan;
    }

    
    public function urusKRS() {
        
        return "Mengurus KRS";
    }
}

class DosenWali {
    
    public function konsultasiKRS(Mahasiswa $mahasiswa) {
        
        return "Konsultasi KRS dengan mahasiswa " . $mahasiswa->getNama();
    }

    
    protected function setujuiKRS() {
        return "KRS disetujui";
    }
}


$mahasiswa1 = new Mahasiswa("John Doe", "12345", "Teknik Informatika");


$dosenWali = new DosenWali();

echo $dosenWali->konsultasiKRS($mahasiswa1) . "<br>";


?>
