<?php
trait hewan
{
    public $nama;
    public $darah = 50;
    public $jmlkaki;
    public $keahlian;

    public function atraksi()
    {
        echo $this->nama . ' sedang ' . $this->keahlian;
    }
}


trait fight
{
    public $attackPower;
    public $deffencePower;
    public $jmlserang;

    public function serang($hewan1, $hewan2)
    {
        $hewan1->jmlserang = $hewan1->jmlserang + 1;
        $hewan2->darah = $hewan2->darah - $hewan1->attackPower / $hewan2->deffencePower;
        echo $hewan1->nama . "<b> sedang menyerang </b>" . $hewan2->nama;
    }

    public function diserang($hewan1, $hewan2)
    {
        $hewan2->jmlserang = $hewan2->jmlserang + 1;
        $hewan1->darah = $hewan1->darah - $hewan2->attackPower / $hewan1->deffencePower;
        echo $hewan1->nama . " <b> sedang diserang </b>" . $hewan2->nama;
    }
}

class harimau
{
    use hewan, fight;

    public function __construct($nama = '', $keahlian = 'lari cepa')
    {
        $this->nama = 'Harimau ' . $nama;
        $this->jmlkaki = 4;
        $this->keahlian = $keahlian;
        $this->darah = 50;
        $this->attackPower = 7;
        $this->deffencePower = 8;
        $this->jmlserang = 0;
    }

    public function getInfoHewan()
    {
        echo '<br/>-------------------------------------------<br/>';
        echo '<b>Jenis Hewan : Harimau </b><br/>';
        echo 'Nama Hewan : ' . $this->nama . ' <br/>';
        echo 'Jumlah Kaki : ' . $this->jmlkaki . ' <br/>';
        echo 'Keahlian : ' . $this->keahlian . ' <br/>';
        echo 'Kekuanatan Menterang : ' . $this->attackPower . ' <br/>';
        echo 'Kekuanatan Pertahanan : ' . $this->deffencePower . ' <br/>';
        echo 'Darah Sekarang : ' . $this->darah . ' <br/>';
        echo '-------------------------------------------<br/>';
    }
}

class elang
{

    use hewan, fight;
    public function __construct($nama = '', $keahlian = 'terbang tinggi')
    {
        $this->nama = 'Elang ' . $nama;
        $this->jmlkaki = 4;
        $this->keahlian = $keahlian;
        $this->attackPower = 7;
        $this->deffencePower = 8;
        $this->jmlserang = 0;
    }

    public function getInfoHewan()
    {
        echo '<br/>-------------------------------------------<br/>';
        echo '<b>Jenis Hewan : Elang <br/></b>';
        echo 'Nama Hewan : ' . $this->nama . ' <br/>';
        echo 'Jumlah Kaki : ' . $this->jmlkaki . ' <br/>';
        echo 'Keahlian : ' . $this->keahlian . ' <br/>';
        echo 'Kekuanatan Menterang : ' . $this->attackPower . ' <br/>';
        echo 'Kekuanatan Pertahanan : ' . $this->deffencePower . ' <br/>';
        echo 'Darah Sekarang : ' . $this->darah . ' <br/>';
        echo '-------------------------------------------<br/>';
    }
}

$Arrharimau = new harimau('Sumatera', 'Lari Cepat');
$Arrelang  = new elang('Papua', 'Terbang Tinggi');
$Arrharimau->getInfoHewan();
$Arrelang->getInfoHewan();

echo '<hr/>';
echo '<h3>---- Pertarungan Dimulai ----</h3>';
echo '<br/>';

$Arrelang->serang($Arrelang, $Arrharimau);
$Arrharimau->getInfoHewan();
echo '<br/>';

$Arrelang->diserang($Arrelang, $Arrharimau);
$Arrelang->getInfoHewan();
echo '<br/>';

$Arrharimau->serang($Arrharimau, $Arrelang);
$Arrelang->getInfoHewan();
echo '<br/>';

echo "Harimau Serang: " . $Arrharimau->jmlserang;
echo '<br/>';
echo "Elang Serang: " . $Arrelang->jmlserang;
