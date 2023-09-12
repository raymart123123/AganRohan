<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OurBase</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <style>
        body {
            background-image: url('/images/welc.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            min-height: 100vh;
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.5);
            width: 100%;
            padding: 5px 1;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            font-size: 15px;
            padding: 10px 20px;
            border: 2px solid transparent;
            transition: border-color 0.3s;
        }

        .navbar a:hover {
            border-color: rgba(94, 93, 93, 0.5);
            color: #8b2f2f;
        }

        .logo {
            width: 90px;
            margin-left: 80px;
            height: 115px;
        }

        .logo img {
            width: 200px;
        }

        .navbar-links {
            display: flex;
            list-style: none;
        }

        .navbar-links li {
            margin-right: -190px;
        }

        .navbar-links li a {
            margin: 120px;
        }

        .navbar-links li.logout-link {
            margin-left: auto;
        }

        .right-links {
            margin-left: auto;
            display: flex;
            align-items: center;
        }

        .right-links li {
            margin-right: 130px;
        }

        .right-links li a {
            margin: -200px;
        }

        .content {
            color: #fff;
            text-align: center;
            font-size: 24px;
            margin-top: 20px;
        }

        .slideshow-container {
            position: relative;
            max-width: 100%;
            overflow: hidden;
        }

        .banner-slide {
            display: none;
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .banner-text {
            position: absolute;
            top: 50%;
            left: 20%;
            transform: translate(-50%, -50%);
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            font-family: 'CustomFont', Arial, sans-serif;
            font-size: 50px;
            font-weight: bold;
            text-shadow: 5px 2px 7px rgba(41, 147, 196, 0.5);
            -webkit-text-stroke: 4px black;
            text-stroke: 1px rgb(175, 35, 35);
            background: linear-gradient(transparent, transparent), rgba(0, 0, 0, 0.5);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        .banner h1 {
            font-family: 'CustomFont', Arial, sans-serif;
            color: #8b2f2f;
            font-size: 50px;
            font-weight: bold;
        }

        .banner-slide:nth-child(1) {
            animation-delay: 0s;
        }

        .banner-slide:nth-child(2) {
            animation-delay: 4s;
        }

        .banner-slide:nth-child(3) {
            animation-delay: 8s;
        }

        .banner-slide:nth-child(4) {
            animation-delay: 12s;
        }

        .banner-slide img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .dot-container {
            text-align: center;
            margin-top: 20px;
        }

        .dot {
            height: 10px;
            width: 10px;
            margin: 0 5px;
            background-color: #ffffff;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .dot.active {
            background-color: #ffffff;
        }

        .custom-dot {
            width: 8px;
            height: 8px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            cursor: pointer;
            margin: 0 5px;
        }

        .slick-active .custom-dot {
            background-color: #333;
        }

        .title-with-image {
            display: flex;
            align-items: center;
        }

        .title-with-image img {
            width: 80px;
            height: 70px;
            margin: 0 10px;
        }

        h1#features-title {
            font-family: 'CustomFont', Arial, sans-serif;
            font-size: 30px;
            font-weight: bold;
            color: #fff;
            text-shadow: -2px -2px 2px rgb(42, 124, 161), 2px 2px 6px rgba(255, 0, 0, 1);
            -webkit-text-stroke: 2px black;
            background: linear-gradient(transparent, transparent), rgba(0, 0, 0, 0.5);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar-links {
                margin-top: 20px;
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar a {
                margin: 5px 0;
                padding: 5px 20px;
                font-size: 14px;
            }

            .logo {
                margin-left: 20px;
            }
        }

        .mobile-menu {
            display: none;
        }

        .mobile-button {
            font-size: 24px;
            background: #383838;
            color: #fff;
            border: none;
            cursor: pointer;
            margin: 10px;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .mobile-links {
            display: none;
            flex-direction: column;
            align-items: flex-start;
            background-color: rgba(0, 0, 0, 0.7);
            position: absolute;
            top: 60px;
            left: 10px;
            z-index: 1;
            border-radius: 5px;
            padding: 10px;
        }

        @media (max-width: 991px) {
            .navbar {
                display: none;
            }

            .mobile-menu {
                display: flex;
                position: fixed;
                top: 0;
                left: 0;
                align-items: flex-start;
                justify-content: flex-start;
                z-index: 2;
            }

            .mobile-button {
                font-size: 24px;
                background: #4d4d4d;
                color: #fff;
                border: none;
                cursor: pointer;
                margin: 10px;
                padding: 5px 10px;
                border-radius: 5px;
                position: absolute;
                top: 10px;
                left: 10px;
                z-index: 3;
            }

            .mobile-links {
                display: none;
                flex-direction: column;
                align-items: flex-start;
                background-color: rgba(0, 0, 0, 0.7);
                position: absolute;
                top: 50px;
                left: 10px;
                z-index: 2;
                border-radius: 10px;
                padding: 10px;
                margin-top: 20px;
                margin-bottom: 10px;
            }

            .mobile-menu.active .mobile-links {
                display: flex;
            }
        }

        .mobile-links a {
            margin-bottom: 15px;
            text-decoration: none;
            color: #fff;
            font-size: 15px;
        }

        .tab-container {
            display: flex;
            flex-direction: column;
            width: 30%;
            margin: 50px 800px 50px 0;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.5);
            padding: 20px;
            color: #659fad;
            text-align: left;
        }

        .tabs {
            display: flex;
            align-items: center;
            margin-right: 50px;
        }

        .tab-button {
            background-color: transparent;
            border: none;
            padding: 5px 10px;
            color: #fff;
            cursor: pointer;
            margin-right: 10px;
            transition: background-color 0.3s ease;
        }

        .tab-button.active {
            background-color: #fff;
            color: #000;
        }

        .tab-content {
            display: none;
            padding: 10px;
            border: 1px solid #fff;
            border-radius: 5px;
            background-color: transparent;
            margin-bottom: 10px;
        }

        .tab-content.active {
            display: block;
        }

        .news-box {
            padding: 10px;
            border: 1px solid #fff;
            border-radius: 5px;
            background-color: transparent;
            margin-bottom: 10px;
        }

        .additional-content {
            margin-top: 20px;
            border-top: 1px solid #fff;
            padding-top: 20px;
        }

        .footer {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px 0;
            text-align: center;
            width: 100%;
            position: absolute;
            bottom: -1100px;
        }

        .footer-navlinks {
            list-style: none;
            padding: 0;
        }

        .footer-navlinks li {
            display: inline;
            margin-right: 20px;
        }

        .footer-navlinks a {
            text-decoration: none;
            color: #fff;
            font-size: 14px;
        }

        .footer-navlinks a:hover {
            border-bottom: 2px solid #fff;
        }

        .logout-button img {
            transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
        }

        .navbar-links li.logout-link:hover .logout-button img {
            transform: scale(1.1);
            opacity: 0.8;
        }

        .server-info {
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            margin: 20px auto;
            padding: 20px;
            color: #fff;
            text-align: center;
        }

        #server-info-title {
            font-size: 30px;
            font-weight: bold;
            color: #fff;
            text-shadow: -2px -2px 2px rgb(42, 124, 161), 2px 2px 6px rgba(255, 0, 0, 1);
            -webkit-text-stroke: 2px black;
            background: linear-gradient(transparent, transparent), rgba(0, 0, 0, 0.5);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        .server-table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        .server-table th, .server-table td {
            padding: 10px 20px;
            border: 1px solid #fff;
            color: #fff;
        }

        .server-table th {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .server-table tr:nth-child(even) {
            background-color: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src="/images/loggo1.png" alt="Your Logo">
        </div>
        <ul class="navbar-links">
            <li class="dashboard-link"><a href="/basee" class="dashboard-link">Home</a></li>
            <li class="itemmall-link"><a href="/itemmall" class="itemmall-link">BadgeMall</a></li>
            <li class="itemmall-link"><a href="/services" class="itemmall-link">Services</a></li>
        </ul>
        <ul class="navbar-links right-links">
            <li class="logout-link" style="margin-top: 10px;">
                <a href="/home" class="logout-button">
                    <img src="/images/logoutbtn.png" alt="Logout" width="98" height="38">
                </a>
            </li>
            <div id="top-left-corner" style="color: #fff; position: absolute; top: 34px; left: 1345px; pointer-events: none;">
                <p>Welcome, <strong style="color: #2187af;">{{ $loginId }}</strong></p>
            </div>
        </ul>
    </div>
    <div class="mobile-menu">
        <button class="mobile-button">&#9776;</button>
        <div class="mobile-links">
            <a href="/home">Home</a>
            <a href="/login">BadgeMall</a>
            <a href="/register">Register</a>
            <a href="/login">Login</a>
        </div>
    </div>
    <div class="slideshow-container">
        <div class="banner-slider">
            <div class="banner-slide">
                <img src="/images/bannerdekan.jpg" alt="Banner 1">
                <div class="banner-text">
                    <h1>DEKAN</h1>
                </div>
            </div>
            <div class="banner-slide">
                <img src="/images/bannerdhan.jpg" alt="Banner 2">
                <div class="banner-text">
                    <h1>DHAN</h1>
                </div>
            </div>
            <div class="banner-slide">
                <img src="/images/bannerelf.jpg" alt="Banner 3">
                <div class="banner-text">
                    <h1>ELF</h1>
                </div>
            </div>
            <div class="banner-slide">
                <img src="/images/bannerhuman.jpg" alt="Banner 4">
                <div class="banner-text">
                    <h1>HUMAN</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="title-with-image">
        <img src="/images/feature-left-img.png" alt="Your Image Description">
        <h1 id="features-title">RANKING</h1>
        <img src="/images/feature-right-img.png" alt="Your Image Description">
    </div>
    <div class="server-info">
        <table class="server-table">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Image</th>
                    <th>Player</th>
                    <th>Players Class</th>
                    <th>Level</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><img src="/Classhero/DarkElf_female.gif" alt="Server 1 Image"></td>
                    <td>Server 1</td>
                    <td>100</td>
                    <td>Online</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="/Classhero/DarkElf_female.gif" alt="Server 2 Image"></td>
                    <td>Server 2</td>
                    <td>85</td>
                    <td>Online</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="/Classhero/DarkElf_female.gif" alt="Server 2 Image"></td>
                    <td>Server 2</td>
                    <td>85</td>
                    <td>Online</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="/Classhero/DarkElf_female.gif" alt="Server 2 Image"></td>
                    <td>Server 2</td>
                    <td>85</td>
                    <td>Online</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="/Classhero/DarkElf_female.gif" alt="Server 2 Image"></td>
                    <td>Server 2</td>
                    <td>85</td>
                    <td>Online</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="/Classhero/DarkElf_female.gif" alt="Server 2 Image"></td>
                    <td>Server 2</td>
                    <td>85</td>
                    <td>Online</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="/Classhero/DarkElf_female.gif" alt="Server 2 Image"></td>
                    <td>Server 2</td>
                    <td>85</td>
                    <td>Online</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function(){
            $('.banner-slider').slick({
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: true,
                prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"></button>',
                nextArrow: '<button class="slick-next" aria-label="Next" type="button"></button>',
                dots: true,
                fade: true,
                cssEase: 'linear',
                customPaging : function(slider, i) {
                    return '<span class="custom-dot"></span>';
                },
            });
        });

        $(document).ready(function(){
            $('.mobile-button').click(function() {
                $('.mobile-menu').toggleClass('active');
            });

            $('.banner-slider').slick({

            });
        });
    </script>
</body>
</html>
