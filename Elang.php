<?php

class Elang
{
    use Hewan, Fight;

    public function __construct($nama)
    {
        $this->nama = $nama;
        $this->jumlahKaki = 2;
        $this->keahlian = "terbang tinggi";
        $this->attackPower = 10;
        $this->defensePower = 5;
    }

    public function getInfoHewan()
    {
        $str = "Nama : " . $this->nama . "<br>";
        $str .= "Darah : " . $this->darah . "<br>";
        $str .= "Jumlah Kaki : " . $this->jumlahKaki . "<br>";
        $str .= "Keahlian : " . $this->keahlian . "<br>";
        $str .= "Attack Power : " . $this->attackPower . "<br>";
        $str .= "Defense Power : " . $this->defensePower . "<br>";
        $str .= "Jenis Hewan : Elang";
        return $str;
    }
}
