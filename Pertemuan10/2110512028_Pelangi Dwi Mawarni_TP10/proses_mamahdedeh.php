<?php
    $nama = $_POST['nama'];
    $menu = $_POST['menu'];

    $beli = 0;
    foreach ($_POST['menu'] as $name => $value){
        $beli += $value;
    }

    $diskon = 0.10;
    if($beli == 13000){
        $jumlahpotongan = $beli * $diskon;
        $total = $beli - $jumlahpotongan;
    }
?>

<html>
    <head>
        <title>Pesanan</title>
        <style>
            body {
                background-color: #B0E0E6;
                margin-top: 50px;
            }

            .pesanan{
                width: 300px;
                margin: auto;
                border: 1px solid black;
                padding: 30px;
                border-radius: 8px;
                background-color: white;
            }

            .total{
                text-align: center;
            }

            .beli{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="pesanan">
        <h1 class="total">Total Harga</h1>
        <?php
        echo "<h2 class='beli'>Rp $beli</h2>";
        echo "<hr>";

        if($beli < 7000){
            echo "<h2>Selamat Makan $nama, by Mamah Dedeh</h2>";
        }elseif($beli >= 7000 && $beli < 13000){
            echo "<h2>Hi, $nama</h2>";
            echo "<h1>Bonus : </h1>";
            echo "<ul>";
            echo "<li>Minuman Gratis : Teh Manis Dingin</li>";
            echo "</ul>";
        }elseif($beli == 13000){
            echo "<h2>Hi, $nama</h2>";
            echo "<h1>Bonus : </h1>";
            echo "<ul>";
            echo "<li>Minuman Gratis: Teh Manis Dingin</li>";
            echo "<li>Diskon : Rp $jumlahpotongan</li>";
            echo "<li>Harga Sekarang : Rp $total</li>";
            echo "</ul>";
        }
        ?>
        </div>
    </body>
</html>