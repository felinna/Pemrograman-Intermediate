<?php 

class lampu {
    Public $merk, $daya, $warna;

    public function __construct($merk, $daya, $warna){
        $this->merk = $merk;
        $this->daya = $daya;
        $this->warna = $warna;

    }
    public function hidupkan_lampu(){
        return '"Hidupkan Lampu"';
    }

    public function matikan_lampu(){
        return '"Matikan Lampu"';
    }
}

class lampu_led extends lampu{

    public function fungsi(){
        return "Banyak digunakan untuk menerangi rumah";
    }
}

class lampu_fluorescent_tube extends lampu{

    public function fungsi(){
        return "Banyak digunakan untuk pusat perbelanjaan";
    }

}

$led10  = new lampu_led ("Shamu", "10 Watt", "Putih");
echo "Merk Lampu : $led10->merk <br>";
echo "Daya Listrik : $led10->daya <br>"; 
echo "Warna : $led10->warna <br>";
echo "<br>";
echo $led10->fungsi();
echo "<br>";
echo $led10->hidupkan_lampu();
echo "<hr><br>";

$fluorescent = new lampu_fluorescent_tube ("Philips TL Master", "18 Watt", "Putih");
echo "Merk Lampu : $fluorescent->merk <br>";
echo "Daya Listrik : $fluorescent->daya <br>"; 
echo "Warna : $fluorescent->warna <br>";
echo "<br>";
echo $fluorescent->fungsi();
echo "<br>";
echo $fluorescent->matikan_lampu();
echo "<br>";
echo "<hr><hr>";
echo "<br>";

class tanaman {
    Public $nama, $warna_daun, $akar;

    public function __construct($nama, $warna_daun, $akar){
        $this->nama = $nama;
        $this->warna_daun = $warna_daun;
        $this->akar = $akar;

    }
}

class sansiveria extends tanaman{

    public function keindahan(){
        return "Keindahan terletak pada daun-nya";
    }

    public function fungsi(){
        return "Dapat membersihkan udara dalam ruangan";
    }
}

class lidah_buaya extends tanaman{

    public function keindahan(){
        return "Keindahan terletak pada daun-nya";
    }

    public function fungsi(){
        return "Mengandung banyak mineral, enzim, antioksidan, vitamin A,C, dan E sehingga banyak dimanfaatkan untuk produk perawatan";
    }

}

$sansiveria1  = new sansiveria ("Sansiveria", "Hijau", "Akar Serabut");
echo "Nama Tanaman : $sansiveria1->nama <br>";
echo "Warna Daun : $sansiveria1->warna_daun <br>"; 
echo "Jenis Akar : $sansiveria1->akar <br>";
echo "<br>";
echo $sansiveria1->keindahan();
echo "<br>";
echo $sansiveria1->fungsi();
echo "<hr><br>";

$lidah_buaya = new lidah_buaya ("Lidah Buaya", "Hijau", "Akar Serabut");
echo "Nama Tanaman : $lidah_buaya->nama <br>";
echo "Warna Daun : $lidah_buaya->warna_daun <br>"; 
echo "Jenis Akar : $lidah_buaya->akar <br>";
echo "<br>";
echo $lidah_buaya->keindahan();
echo "<br>";
echo $lidah_buaya->fungsi();
echo "<br>";
echo "<hr><hr>";
echo "<br>";
?>