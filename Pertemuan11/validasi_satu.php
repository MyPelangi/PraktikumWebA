<?php
    $nama="";
    $username="";
    $password="";

    $ErrorNama="";
    $ErrorUser="";
    $ErrorPass="";

    $notifBerhasil="";

    //function trim untuk menghandle spasi di awal dan akhir, jd kalo ada spasi akan dihapus sama trim ini
    if(isset($_POST['submit'])){
        $nama = trim($_POST['nama']);
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        if(empty($nama)){
            $ErrorNama="<font color='red'>NAMA belum diisi!!</font>";  
        }
        if(empty($username)){
            $ErrorUser="<font color='red'>USERNAME belum diisi!!</font>";
        }
        if(empty($password)){
            $ErrorPass="<font color='red'>PASSWORD belum diisi!!</font>";
        }

        if(!empty($nama) and !empty($username) and !empty($password)){
            $notifBerhasil="<font color='blue'>Data Telah Ter Registrasi!</font>";
        }
    }
?>

<html>
    <head>
        <title>Hasil Registrasi</title>
        <style>
            body{
                background-color: cornsilk;
                align-items: center;
            }

            h3{
                text-align: center;
                margin: 20px auto;
            }

            p{
                color: red;
                text-align: center;
                background-color: #ffffff;
                
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
        </style>
    </head>
    <body>
        <marquee>Pelangi Dwi Mawarni - 2110512028_A</marquee>
        <h3>Data Registrasi</h3>
        <table>
            <tr>
                <td colspan="3" align="center">
                    <p><?= $notifBerhasil; ?></p>
                    <p><?= $ErrorNama; ?></p>
                    <p><?= $ErrorUser; ?></p>
                    <p><?= $ErrorPass; ?></p>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $nama; ?></td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><?= $username; ?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><?= $password; ?></td>
            </tr>
        </table>
    </body>
</html>
