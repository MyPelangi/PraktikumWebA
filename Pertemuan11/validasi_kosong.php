<html>
    <head>
        <title>Form Validasi</title>
        <style type="text/css">
            body{
                background-color: cornsilk;
                align-items: center;
            }

            h3{
                text-align: center;
                margin: 20px auto;
            }

            table{
                background-color: #ffffff;
                width:fit-content;
                padding: 25px;
                margin: auto;
                display: flexbox;
                border-radius: 10px;
                border: 3px solid coral;
            }

            tr{
                margin: 5px;
            }

            td{
                padding: 5px;
            }

            input[type="submit"] {
		        background: #28d;
		        border-color: transparent;
                color: #fff;
                cursor: pointer;
                padding: 5px;
                border-radius: 10px;
            }

            input[type="submit"]:hover {
                background: #17c;
            }
        </style>
    </head>
    <!-- di php dan HTML pake name, kalau ke css atau js pake id/class -->
    <body>
        <marquee>Pelangi Dwi Mawarni - 2110512028_A</marquee>
        <h3>Form Register</h3>

        <form action="validasi_satu.php" method="POST">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td colspan=3 align="center">
                        <input type="submit" name="submit" value="Register">
                    </td>
                </tr>
            </table>
            
        </form>
        </body>
</html>