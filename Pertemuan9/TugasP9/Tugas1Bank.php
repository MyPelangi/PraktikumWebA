<html>
    <body>
        <?php
            //nama : Pelangi Dwi Mawarni
            //NIM : 2110512028
            
            $saldoAwal = 1000000;
            $bunga = 0.03;
            $bulan = 11;
            $saldoAkhir = $saldoAwal + ($saldoAwal*$bunga*$bulan);

            echo "Saldo akhir setelah ".$bulan." bulan adalah : Rp. ".$saldoAkhir.",-";
        ?>
    </body>
</html>