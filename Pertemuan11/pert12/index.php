<?php
    //session dimulai
    session_start();

    //cek session untuk memeriksa user telah login atau belum
    if(isset($_SESSION['username'])){//jika tidak ada session username
        header("location: welcome.php");// redirect ke halaman welcome.php
    }
?>

<html>
    <head>
        <title>Login</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f2f2f2;
            }

            h1 {
                color: #333;
                text-align: center;
                margin-top: 30px;
            }

            div {
                text-align: center;
                color: red;
                margin-bottom: 15px;
            }

            form {
                width: 500px;
                margin: 0 auto;
                background-color: #fff;
                padding: 25px;
                border: 1px solid #333;
                border-radius: 600px;
                box-shadow: 0 20px 20px rgba(0, 0, 0, 0.1);
            }

            label {
                font-weight: bold;
                margin-left: 70px;
            }

            input[type="text"],
            input[type="password"] {
                margin-left: 70px;
                width: 70%;
                padding: 8px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 3px;
            }

            input[type="submit"]{
                margin-left: 70px;
                display: block;
                width: 70%;
                padding: 10px;
                margin-bottom: 10px;
                border: none;
                border-radius: 3px;
                background-color: #4CAF50;
                color: #fff;
                cursor: pointer;
            }

            input[type="reset"]{
                margin-left: 70px;
                display: block;
                width: 70%;
                padding: 10px;
                margin-bottom: 10px;
                border: none;
                border-radius: 3px;
                background-color: red;
                color: #fff;
                cursor: pointer;
            }

            input[type="submit"]:hover,
            input[type="reset"]:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body>
        <h1>Silahkan Login</h1>
        <div>
            <?php
            //cek apakah terdapat cookie dengan nama message
            if(isset($_COOKIE["message"])){// jika ada
                echo $_COOKIE["message"];// tampilkan pesannya
            }
            ?>
        </div>

        <form method="post" action="Login.php">
            <label>Username</label><br>
            <input type="text" name="username" placeholder="Username"><br><br>
            <label>Password</label><br>
            <input type="password" name="password" placeholder="Password"><br><br>
            <input type="submit" name="login" value="Login">
            <input type="reset" name="cancel" value="Batal">
        </form>
    </body>
</html>