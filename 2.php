<?php

class Siswa{
    private $nrp;
    private $nama;
    private $daftarNilai;

    public function __construct($nrp,$nama,$daftarNilai) {
        $this->nrp = $nrp;
        $this->nama = $nama;
        $this->setDaftarNilai($daftarNilai);
    }
    
    public function setNrp($nrp){
        $this->nrp = $nrp;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function setDaftarNilai($daftarNilai){
        if(count($daftarNilai) > 3){
            print("daftar nilai dipotong menjadi 3 angka karena terlalu banyak");
        }
        $this->daftarNilai = array_splice($daftarNilai,0,3);
    }

    public function getNrp(){
        return $this->nrp;
    }

    public function getNama(){
        return $this->nama;
    }

    public function getDaftarNilai(){
        return $this->daftarNilai;
    }

}

class Nilai{
    private $mapel;
    private $nilai;

    public function __construct($mapel,$nilai) {
        $this->mapel = $mapel;
        $this->nilai = $nilai;
    }

    public function setMapel($mapel){
        $this->mapel = $mapel;
    }

    public function setNilai($nilai){
        if($nilai >= 0 && $nilai <= 100){
            $this->nilai = $nilai;
        }
        else {
            $this->nilai = 0;
        }
        
    }

    public function getMapel(){
        return $this->mapel;
    }

    public function getNilai(){
        return $this->nilai;
    }
}

$test_siswa = new Siswa("2072007","Michael Mathew Setiadi", [New Nilai("Inggris",100)]);

print("nama " . $test_siswa->getNama() . " nrp ". $test_siswa->getNrp() . " nilai " . $test_siswa->getDaftarNilai()[0]->getMapel() . " " . $test_siswa->getDaftarNilai()[0]->getNilai());

$arraysiswa = array();
$newmatkul = ["Inggris","Jepang","Indonesia"];
for ($i=0; $i < 10 ; $i++) { 
    $rndname = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 10)),0,10);
    $newsiswa = new Siswa("2072007",$rndname,[new Nilai($newmatkul[random_int(0,2)],random_int(0,100))]);
    print("Mahasiswa dengan nama " . $newsiswa->getNama() . " nrp : " . $newsiswa->getNrp() . " mempunyai nilai " . $newsiswa->getDaftarNilai()[0]->getMapel() . " " . $newsiswa->getDaftarNilai()[0]->getNilai());
    echo "<br>";
}

?>