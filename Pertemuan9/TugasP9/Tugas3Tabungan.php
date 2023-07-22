<html>
    <body>
        <?php
            //nama : Pelangi Dwi Mawarni
            //NIM : 2110512028

            $jumlahUang = 1575250;
            $seratus = 100000;
            $gocap = 50000;
            $duaPuluh = 20000;
            $limaRibu = 5000;
            $seperak = 100;
            $limaPuluh = 50;

            $a = 0;
            $b = 0;
            $c = 0;
            $d = 0;
            $e = 0;
            $f = 0;

            echo "Jumlah Tabungan : ".$jumlahUang."<br>";

            for($f = 0; $jumlahUang >= $limaPuluh; $f++){
                for($e = 0; $jumlahUang >= $seperak; $e++){
                    for($d = 0; $jumlahUang >= $limaRibu; $d++){
                        for($c = 0; $jumlahUang >= $duaPuluh; $c++){
                            for($b = 0; $jumlahUang >= $gocap; $b++){
                                for($a = 0; $jumlahUang >= $seratus; $a++){
                                    $jumlahUang -= $seratus;
                                }
                                $jumlahUang -= $gocap;
                            }
                            $jumlahUang -= $duaPuluh;
                        }
                        $jumlahUang -= $limaRibu;
                    }
                    $jumlahUang -= $seperak;
                }
                $jumlahUang -= $limaPuluh;
            }
            echo "Jumlah Rp. 100.000 : ".$a. "<br>";
            echo "Jumlah Rp. 50.000 : ".$b. "<br>";
            echo "Jumlah Rp. 20.000 : ".$c. "<br>";
            echo "Jumlah Rp. 5.000 : ".$d. "<br>";
            echo "Jumlah Rp. 100 : ".$e. "<br>";
            echo "Jumlah Rp. 50 : ".$f. "<br>";
        ?>
    </body>
</html>