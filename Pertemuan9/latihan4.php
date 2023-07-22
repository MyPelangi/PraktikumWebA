<html>
    <body>
        <?php
        $jumlah_bintang = 10;

            for($baris=1; $baris<=$jumlah_bintang; $baris++){
                for($kolom=1; $kolom>=$baris; $kolom++){
                    echo "_";
                }
                for($bintang=$jumlah_bintang; $bintang>=$baris; $bintang--){
                    if($bintang%2==0){
                        echo "<font style='color:red'>*</font>";
                    }else{
                        echo "*";
                    }
                }
                echo"<br>";
            }
        ?>
    </body>
</html>