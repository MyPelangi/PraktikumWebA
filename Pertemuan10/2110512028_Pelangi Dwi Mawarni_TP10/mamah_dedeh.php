<html>

<head>
    <title>Kantin Mamah Dedeh</title>
    <style type="text/css">
        body {
            background-color: #F08080;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .judul {
            margin: 40px auto 30px;
            text-align: center;
        }

        form {
            width: 300px;
            margin: auto;
            border: 1px solid black;
            padding: 30px;
            border-radius: 8px;
            background-color: white;
        }

        .menu{
            padding-right: 62px;
        }

        table {
            margin: auto;
        }

        table tr {
            line-height: 10px;
        }

        table td {
            padding: 10px;
        }

        input.button {
            width: 60%;
            padding: 6px 0px;
            border: 2px solid #F55200;
            border-radius: 6px;
            background-color: #F55200;
            color: #F7F7F7;
            font-size: 15px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .button:hover {
            background-color: #FF9E44;
            color: #202020;
            border: 2px solid #FF9E44;
        }
    </style>

    <script type="text/javascript">
        function formValidasi() {
            var nama = document.getElementById("nama").value;
            var menu = [];
            var checkboxes = document.querySelectorAll(
                "input[type=checkbox]:checked"
            );

            for (var i = 0; i < checkboxes.length; i++) {
                menu.push(checkboxes[i].value);
            }

            var validasiAngka = /^[0-9]+$/;
            var validasiHuruf = /^[a-zA-Z ]+$/;

            if (checkboxes.length == 0) {
                alert("Mohon Pilih Menu yang Tersedia.\nMenu Tidak Boleh Kosong!");
                return false;
            } else if (nama == "" || !nama.match(validasiHuruf)) {
                alert("Nama Tidak Boleh Kosong dan Harus Berupa Huruf!");
                document.getElementById("nama").value = "";
                return false;
            } else {
                console.log(nama + menu);
            }

        }
    </script>
</head>

<body>
    <marquee>2110512028 - PELANGI DWI MAWARNI - TP10</marquee>
    <h1 class="judul">Daftar Menu di Kantin Mamah Dedeh</h1>
    <form action="proses_mamahdedeh.php" method="POST" onsubmit="return formValidasi()">
        <table>
            <tr>
                <td align="center" class="menu"><b>Menu</b></td>
                <td align="center"><b>Harga</b></td>
            </tr>
            <tr>
                <td class="menu">
                    <input type="checkbox" name="menu[nasi]" value="2000"> Nasi
                </td>
                <td>Rp 2000</td>
            </tr>
            <tr>
                <td class="menu">
                    <input type="checkbox" name="menu[ikan bakar]" value="3000"> Ikan Bakar
                </td>
                <td>Rp 3000</td>
            </tr>
            <tr>
                <td class="menu">
                    <input type="checkbox" name="menu[ayam bakar]" value="4000"> Ayam Bakar
                </td>
                <td>Rp 4000</td>
                </td>
            </tr>
            <tr>
                <td class="menu">
                    <input type="checkbox" name="menu[sayur lodeh]" value="2000"> Sayur Lodeh
                </td>
                <td>Rp 2000</td>
                </td>
            </tr>
            <tr>
                <td class="menu">
                    <input type="checkbox" name="menu[tumis kangkung]" value="2000"> Tumis Kangkung
                </td>
                <td>Rp 2000</td>
                </td>
            </tr>
        </table>

        <hr>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td colspan=3 align="center">
                    <input type="submit" value="Bayar Sekarang" class="button">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>