<?php
class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }
    public function luas() : float {
        return self::PHI*$this->jari_jari*$this->jari_jari;
    }
    public function keliling() : float {
        return 2*self::PHI*$this->jari_jari;
    }
}
$nasi_tumpeng = new Lingkaran(10);
echo "Jari-jari nasi tumpeng: " . $nasi_tumpeng->jari_jari . "\n";
echo "Luas nasi tumpeng: " . $nasi_tumpeng->luas() . "\n";
echo "Keliling nasi tumpeng: " . $nasi_tumpeng->keliling() . "\n";


class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }
    public function luas() : float {
        return self::PHI*$this->jari_jari*$this->jari_jari;
    }
    public function keliling() : float {
        return 2*self::PHI*$this->jari_jari;
    }
    public function volume() : float {
        return (4/3)*self::PHI*$this->jari_jari*$this->jari_jari*$this->jari_jari;
    }
}
$bola = new Bola(15);
echo "Jari-jari bola: " . $bola->jari_jari . "\n";
echo "Luas bola: " . $bola->luas() . "\n";
echo "Keliling bola: " . $bola->keliling() . "\n";
echo "Volume bola: " . $bola->volume() . "\n";


class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari,$tinggi)
    {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }
    public function luas() : float {
        return self::PHI*$this->jari_jari*$this->jari_jari;
    }
    public function keliling() : float {
        return 2*self::PHI*$this->jari_jari;
    }
    public function volume() : float {
        return self::PHI*$this->jari_jari*$this->jari_jari*$this->tinggi;
    }
    public function luas_permukaan() : float {
        return 2*self::PHI*$this->jari_jari*($this->jari_jari+$this->tinggi);
    }
}
$tabung = new Tabung(3,10);
echo "Jari-jari tabung: " . $tabung->jari_jari . "\n";
echo "Tinggi tabung: " . $tabung->tinggi . "\n";
echo "Luas tabung: " . $tabung->luas() . "\n";
echo "Keliling tabung: " . $tabung->keliling() . "\n";
echo "Volume tabung: " . $tabung->volume() . "\n";
echo "Luas permukaan tabung: " . $tabung->luas_permukaan() . "\n";


class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari,$tinggi)
    {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }
    public function luas() : float {
        return self::PHI*$this->jari_jari*$this->jari_jari;
    }
    public function keliling() : float {
        return 2*self::PHI*$this->jari_jari;
    }
    public function volume() : float {
        return (1/3)*self::PHI*$this->jari_jari*$this->jari_jari*$this->tinggi;
    }
}
$kerucut = new Kerucut(4,6);
echo "Jari-jari kerucut: " . $kerucut->jari_jari . "\n";
echo "Tinggi kerucut: " . $kerucut->tinggi . "\n";
echo "Luas kerucut: " . $kerucut->luas() . "\n";
echo "Keliling kerucut: " . $kerucut->keliling() . "\n";
echo "Volume kerucut: " . $kerucut->volume() . "\n";