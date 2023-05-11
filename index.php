
<?php
//Anggota Kelompok :
// Iqbal Roudatul Irfan
// Raga Ridzki P
// M. Riyan Dzaki
class partaiPdip
{
    private $nama;
    public $ketua;
    private $jumlahAnggota;

    public function tampilNama()
    {
        echo "Nama Partai : ".$this->nama = "PDIP";
    }
    public function tampilKetua() {
        echo "Ketua Partai : ".$this->ketua = "Megawati";
    }
    public function tampilJumlahanggota() {
        echo "Jumlah Anggota : ".$this->ketua = "1871";
    }
}
$partai1 = new partaiPdip();
?>
<p>=======[Partai Indonesia]=======</p>
<p> <?php
echo $partai1->tampilNama(); ?>
</p>
<p> <?php
echo $partai1->tampilKetua(); ?>
</p>
<p> <?php
echo $partai1->tampilJumlahanggota(); ?>
</p>