<html>
    <body>
        <?php
            //nama : Pelangi Dwi Mawarni
            //NIM : 2110512028
            
            $bilangan = 100;
            $pembagi = 3;
            $hasilBagi = number_format($bilangan/$pembagi);
            $sisaBagi = $bilangan%$pembagi;

            echo $bilangan." dibagi dengan ".$pembagi." adalah ".$hasilBagi." sisa ".$sisaBagi;
        ?>
    </body>
</html>
   

while($jumlahUang >= $seratus){
                $jumlahUang -= $seratus;
                $a++;
            }
            while($jumlahUang >= $gocap){
                $jumlahUang -= $gocap;
                $b++;
            }
            while($jumlahUang >= $duaPuluh){
                $jumlahUang -= $duaPuluh;
                $c++;
            }
            while($jumlahUang >= $limaRibu){
                $jumlahUang -= $limaRibu;
                $d++;
            }
            while($jumlahUang >= $seperak){
                $jumlahUang -= $seperak;
                $e++;
            }
            while($jumlahUang >= $limaPuluh){
                $jumlahUang -= $limaPuluh;
                $f++;
            }
            