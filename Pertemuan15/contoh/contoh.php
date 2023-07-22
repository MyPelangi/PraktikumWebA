<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="stylesheet" href="style_contoh.css">

</head>
<body>
    
<header>

    <div class="header-1">

        <a href="#" class="logo"> LOGO </a>

        <form action="">
            <input type="search" placeholder="search here" id="search">
            <label for="search" class="fas fa-search"></label>
        </form>

    </div>

    <div class="header-2">

        <div id="menu" class="fas fa-bars" onclick="navToggle();"></div>

        <nav class="navbar">
            <ul>
                <li><a onclick="navToggle();" href="#">home</a></li>
                <li><a onclick="navToggle();" href="#">about</a></li>
                <li><a onclick="navToggle();" href="#">contact</a></li>
                <li><a onclick="navToggle();" href="#">gallery</a></li>
                <li><a onclick="navToggle();" href="#">login</a></li>
            </ul>
        </nav>

        <div class="icons">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-github"></a>
        </div>

    </div>

</header>

<div class="content"></div>


<script>

let menu = document.querySelector('#menu')
let navbar = document.querySelector('.navbar');
let header2 = document.querySelector('.header-2');

function navToggle(){
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('nav-toggle');
}

window.addEventListener('scroll',function(){

    menu.classList.remove('fa-times');
    navbar.classList.remove('nav-toggle');

    if(window.scrollY > 60){
        header2.classList.add('sticky');
    }else{
        header2.classList.remove('sticky');
    }

});


</script>



















</body>
</html>