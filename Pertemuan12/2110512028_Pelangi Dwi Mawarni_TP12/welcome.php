<?php
    //session dimulai
    session_start();

    //cek session untuk memeriksa user telah melakukan login atau belum
    if(!isset($_SESSION['username'])){// jika tidak ada session username
        header("location: index.php");//redirect ke halaman index
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
                display: flexbox;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            div{
                width: 500px;
                margin: 0 auto;
                background-color: #fff;
                padding: 25px;
                border: 1px solid #333;
                border-radius: 600px;
                box-shadow: 0 20px 20px rgba(0, 0, 0, 0.1);
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
                margin-left: 40%;
                justify-content: center;
                align-items: center;
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
        <div>
        <h1>Selamat datang <?php echo $_SESSION['nama']; ?></h1>
        <h4>Anda berhasil login ke dalam aplikasi.</h4>
        <a href="logout.php">Logout</a>
        </div>
    </body>
</html>