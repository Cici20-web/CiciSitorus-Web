<?php
session_start();
include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="stylee.css">
    <title>Salow Studios | Responsive Portfolio Website</title>
</head>

<body>
    <nav>
        <div class="nav__content">
            <div class="logo"><a href="#">CICI SITORUS</a></div>
            <label for="check" class="checkbox">
                <i class="ri-menu-3-line"></i>
            </label>
            <input type="checkbox" name="check" id="check">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Resume</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </nav>
    <section class="section">
        <div class="section__container">
            <div class="content">
                <p class="subtitle">HELLO ALL</p>
                <h1 class="title"> I'm <span>Cici Sri Wandini Br Sitorus<br /> a</span> Full Stack Developer</h1>
                <p class="description">Welcome to my developer portfolio! I'm Cici, a coding wizard with a knack for
                    whipping up beautiful, responsive, and user-friendly websites. Whether it's a personal blog or an
                    e-commerce platform, I've got you covered. Let's turn your web dreams into reality-one line of code
                    at a time!</p>
                <div class="action__btns">
                    <button class="hire_me">Hire Me</button>
                    <button class="portfolio">Portfolio</button>
                </div>
            </div>
            <div class="image">
                <img src="assets/foto.jpg" alt="profile" />
            </div>
        </div>
    </section>

</body>

</html>