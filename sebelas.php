<?php
namespace App\Admin;

class Pegawai {
    public $nip;
    public $nama;
    public $no_hp;
    public $alamat;

    public function __construct($nip, $nama, $no_hp, $alamat) {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $no_hp;
        $this->alamat = $alamat;
    }
}

class Dosen extends Pegawai {
    public $nidn;

    public function __construct($nip, $nama, $no_hp, $alamat, $nidn) {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->nidn = $nidn;
    }

    public function mengajar() {
        echo "{$this->nama} sedang mengajar perkuliahan.";
    }
}

class DosenSisfo extends Dosen {
    public $golongan;

    public function __construct($nip, $nama, $no_hp, $alamat, $nidn, $golongan) {
        parent::__construct($nip, $nama, $no_hp, $alamat, $nidn);
        $this->golongan = $golongan;
    }

    public function mengajar() {
        echo "{$this->nama} sedang mengajar perkuliahan.";
    }
}

$dosenSisfo = new DosenSisfo('198411132015041001', 'Dian Prawira', '62111111', 'Jln Purnama', '0013118405', 'IV/a');
$dosenSisfo->mengajar();