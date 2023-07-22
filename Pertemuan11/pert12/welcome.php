<?php
    //session dimulai
    session_start();

    //cek session untuk memeriksa user telah melakukan login atau belum
    if(isset($_SESSION['username'])){// jika tidak ada session username
        header("location: Session_Cookies_index.php");//redirect ke halaman index
    }
?>

<html>
    <head>
        <title>Halaman Setelah Login</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f2f2f2;
                padding: 20px;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            h1 {
                font-size: 28px;
                text-align: center;
                margin-bottom: 20px;
                color: #333;
            }

            h4 {
                font-size: 16px;
                text-align: center;
                color: #666;
                margin-bottom: 30px;
            }

            a {
                display: inline-block;
                padding: 10px 20px;
                background-color: #4CAF50;
                color: #fff;
                text-decoration: none;
                border-radius: 3px;
                transition: background-color 0.3s;
            }

            a:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body>
        <h1>Selamat datang <?php echo $_SESSION['nama']; ?></h1>
        <h4>Anda berhasil login ke dalam aplikasi.</h4>
        <a href="logout.php">Logout</a>
    </body>
</html>