<?php

class Harimau
{
    use Hewan, Fight;

    public function __construct($nama)
    {
        $this->nama = $nama;
        $this->jumlahKaki = 4;
        $this->keahlian = "lari cepat";
        $this->attackPower = 7;
        $this->defensePower = 8;
    }

    public function getInfoHewan()
    {
        $str = "Nama : " . $this->nama . "<br>";
        $str .= "Darah : " . $this->darah . "<br>";
        $str .= "Jumlah Kaki : " . $this->jumlahKaki . "<br>";
        $str .= "Keahlian : " . $this->keahlian . "<br>";
        $str .= "Attack Power : " . $this->attackPower . "<br>";
        $str .= "Defense Power : " . $this->defensePower . "<br>";
        $str .= "Jenis Hewan : Harimau";
        return $str;
    }
}
