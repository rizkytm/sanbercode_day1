<?php

trait Fight
{
    public $attackPower;
    public $defencePower;

    public function serang($nama_hewan_penyerang, $nama_hewan_yang_diserang)
    {
        return $nama_hewan_penyerang . ' sedang menyerang ' . $nama_hewan_yang_diserang;
    }

    public function diserang($nama_hewan)
    {
        return $nama_hewan . ' sedang diserang';
    }
}
