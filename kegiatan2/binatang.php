<?php

namespace kegiatan2;

abstract class Hewan
{
    public $nama;
    public $umur;

    abstract public function suara();

    public function getInfo()
    {
        return "Hewan: {$this->nama}, Umur: {$this->umur}";
    }
}


trait Makan
{
    public function Makan()
    {
        return "Makan Sayur";
    }
}

class Karnivora extends Hewan
{
    public function __construct($nama, $umur)
    {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    public function suara()
    {
        return "Hallo Bang";
    }
}

class Herbivora extends Hewan
{
    use Makan;
    
    public function __construct($nama, $umur)
    {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    public function suara()
    {
        return "Pagi Bang";
    }
}

$singa = new Karnivora("Singa", "2 Tahun");
echo $singa->getInfo() . PHP_EOL;
echo $singa->suara() . PHP_EOL;

$sapi = new Herbivora("Sapi", "9 Tahun");
echo $sapi->getInfo() . PHP_EOL;
echo $sapi->suara() . PHP_EOL;
echo $sapi->makan() . PHP_EOL;

?>
