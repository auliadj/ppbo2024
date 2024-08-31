<?php
class hitung
{
  public $jari;
  public $tinggi;

  public function LuasLingkaran($jari):float
  {
    $luas = 3.14*$jari*$jari;
    return $luas;
  }

  public function KelilingLingkaran($jari):float
  {
    $keliling = 3.14*2*$jari;
    return $keliling;
  }

  public function VolumeBola($jari):float
  {
    $volume = 4/3*3.14*$jari**3;
    return $volume;
  }

  public function VolumeTabung($jari, $tinggi):float
  {
    $tabung = 3.14*$jari**2*$tinggi;
    return $tabung;
  }

  public function VolumeKerucut($jari, $tinggi):float
  {
    $Kerucur = 1/3*3.14*$jari**2*$tinggi;
    return $Kerucur;
  }
}

$obj = new hitung();
$jari = readline("Masukkan jari jari: ");
$obj->jari = $jari;
$tinggi = readline("Masukkan tinggi: ");
$obj->tinggi = $tinggi;

$luas_lingkaran = $obj->LuasLingkaran($obj->jari);
$keliling_lingkaran = $obj->KelilingLingkaran($obj->jari);
$volume_bola = $obj->VolumeBola($obj->jari);
$volume_tabung = $obj->VolumeTabung($obj->jari, $obj->tinggi);
$volume_kerucut = $obj->VolumeKerucut($obj->jari, $obj->tinggi);

echo "Luas lingkaran: {$luas_lingkaran}\n";
echo "Keliling lingkaran: {$keliling_lingkaran}\n";
echo "Volume bola: {$volume_bola}\n";
echo "Volume tabung: {$volume_tabung}\n";
echo "Volume kerucut: {$volume_kerucut}\n";