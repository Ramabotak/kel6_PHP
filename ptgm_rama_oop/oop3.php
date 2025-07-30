<?php
//ini adalah class
class PPLG3{
    //ciri ciri atau properti 
    public $nama;
    public $umur;
    public $gender;
    public $agama;

    public function __construct($nama, $umur, $gender, $agama) {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->gender = $gender;
        $this->agama = $agama;  
    }

    //ini adalah method
    //camelCase
    public function getGender() {
    $g = strtolower($this->gender); 
    if ($g == "l") {
        return "Laki-laki";
    } elseif ($g == "p") {
        return "Perempuan";
    } else {
        return "chalant"; 
    }
}

    public function profilSiswa() {
        echo "<h2>Profil Siswa XI PPLG 3</h2>";
        echo "Nama : $this->nama </br>";
        echo "Umur : $this->umur </br>";
        echo "Gender: " . $this->getGender() . "</br>";
        echo "Agama : $this->agama </br>";
    }
}
  
//pembuatan objek baru dari class PPLG3
$semuaSiswa = [
    new PPLG3("Agus", 16, "buntung", "Islam"),
    new PPLG3("Alden", 17, "l", "Islam"),
    new PPLG3("Annisa", 17, "p", "Islam"),
    new PPLG3("Depan", 16, "L", "Islam"),
    new PPLG3("Krisna", 17, "L", "Islam")
];

foreach ($semuaSiswa as $siswa) {
    $siswa->profilSiswa();
}

