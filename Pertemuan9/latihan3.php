<html>
    <body>
        <?php
            $sabun = 10000;
            $detergen = 9000;
            $pewangi = 5000;

            $jsabun = 3;
            $jdetergen = 1;
            $jpewangi = 2;

            $tsabun = $sabun*$jsabun;
            $tdet = $detergen*$jdetergen;
            $tpewangi = $pewangi*$jpewangi;

            $total = $tsabun+$tdet+$tpewangi;
        ?>

        <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>
                Produk
            </td>
            <td>
                Harga
            </td>
            <td>
                Jumlah
            </td>
            <td>
                Total
            </td>
        </tr>
        <tr>
            <td>
                sabun
            </td>
            <td>
                <?= $sabun; ?>
            </td>
            <td align="center">
                <?= $jsabun; ?>
            </td>
            <td>
                <?= $tsabun; ?>
            </td>
        </tr>
        <tr>
            <td>
                detergen
            </td>
            <td>
                <?= $detergen; ?>
            </td>
            <td align="center">
                <?= $jdetergen; ?>
            </td>
            <td>
                <?= $tdet; ?>
            </td>
        </tr>
        <tr>
            <td>
                pewangi
            </td>
            <td>
            <?= $pewangi; ?>
            </td>
            <td align="center">
            <?= $jpewangi; ?>
            </td>
            <td>
                <?= $tpewangi; ?>
            </td>
        </tr>
        <tr>
            <td colspan ="3">
                jumlah
            </td>
            <td>
                <?= $total; ?>
            </td>
        </tr>
    </table>
    </body>
</html>