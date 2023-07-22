<html>
    <body>
        <?php
        // echo untuk print
        // kutip adalah string
            echo "Selamat";
        // $ untuk inisialisasi variabel di php
            $nama='nji';
            echo "<br>";
        // . itu seperti + di javascript untuk menambahkan variabel
            echo "nama saya <b>".$nama."</b>";

            $barang = "televisi";
        ?>
        
        <p><?= $barang; ?></p> <!-- = sebagai pengganti echo untuk menampilkan di html-->
    </body>
</html>