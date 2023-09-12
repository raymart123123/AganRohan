<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

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
          /* @font-face {
            font-family: 'CustomFont';
            src: url('/Font/MOGAMBO!.ttf') format('truetype');
        } */


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

        .box-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 10px;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
        }

        .box {
            flex: 1;
            min-width: calc(33.33% - 20px);
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 10px;
            margin: 10px;
            color: #fff;
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

        .content-boxes {
            display: flex;
            justify-content: space-between;
            width: 80%;
            margin: 20px auto;
            margin-top: 20px;
        }

        .content-box {
            border-radius: 10px;
            padding: 20px;
            color: #fff;
            width: 30%;
            text-align: center;
        }
        .content-box img {
    max-width: 35%;

    border-radius: 10px;
    margin-bottom: 10px;
    position: relative;
    transition: transform 0.3s ease-in-out;
}


.content-box img:hover {
    transform: scale(1.20);
    z-index: 1;
}

.content-box a {
    text-decoration: none;
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

        .top-20 {
            width: 80%;
            margin: 20px auto;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.5);
            padding: 20px;
            color: #fff;
            text-align: left;
        }

        .top-20 h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .top-20-list {
            list-style: none;
            padding: 0;
        }

        .top-20-list-item {
            margin-bottom: 10px;
            font-size: 16px;
            display: flex;
            align-items: center;
        }

        .top-20-list-item img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
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

            .box {
                min-width: calc(50% - 20px);
                margin: 10px auto;
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

          .login-button img {
            transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
        }

        .navbar-links li.login-link:hover .login-button img {
            transform: scale(1.1);
            opacity: 0.8;
        }


        .navbar-links li.login-link a:hover {
            border-color: transparent;
            color: #fff;
        }
        .server-info {
                background-color: rgba(0, 0, 0, 0.6);
                border-radius: 20px;
                margin: 20px auto;
                padding: 20px;
                color: #fff;
                text-align: center;
                width: 80%;
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
                width: 100%;
                margin: 40px auto;
                border-collapse: collapse;
            }

            .server-table th,
            .server-table td {
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


            .stars i {
                color: blue;
                cursor: pointer;
            }


            .ratings {
                text-align: center;
                margin-top: 10px;
            }
            .news-article {
                background-color: rgba(0, 0, 0, 0.6);
                border-radius: 10px;
                padding: 10px;
                color: #fff;
                text-align: center;
                margin: 10px auto;
                max-width: 100%;
                align-items: 2;
            }


            .news-article h2 {
                font-size: 24px;
                margin-bottom: 15px;
            }
            .news-article img {
                max-width: 100%;
                height: 200px;
                display: block;
                margin: 0 auto;
            }

            #particles-js {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
                }


    </style>
</head>
<body>

    <div class="navbar">
        <div id="particles-js"></div>
        <div class="logo">
            <img src="/images/loggo1.png" alt="Your Logo">
        </div>
        <ul class="navbar-links">
            <li class="dashboard-link"><a href="/home" class="dashboard-link">Home</a></li>
            <li class="itemmall-link"><a href="/login" class="itemmall-link">BadgeMall</a></li>
            <li class="itemmall-link"><a href="javascript:void(0);" id="information-link">Information</a></li>

            <li class="itemmall-link"><a href="javascript:void(0);" onclick="scrollToDownload()">Download</a></li>

        </ul>
        <ul class="navbar-links right-links">

            <li class="register-link"><a href="/register" class="register-link">Register</a></li>
            <li class="login-link" style="margin-top: 8px;">
                <a href="/login" class="login-button">
                    <img src="/images/loginbtn.png" alt="Login" width="130" height="45" style="filter: brightness(0.8);">
                </a>
            </li>

    </div>
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
    <div id="download-container">

    </div>


    <div class="title-with-image">
        <img src="/images/feature-left-img.png" alt="Your Image Description">
        <h1 id="features-title">DOWNLOADS</h1>
        <img src="/images/feature-right-img.png" alt="Your Image Description">
    </div>
    <div class="content-boxes">
        <div class="content-box">
            <a href="https://drive.google.com/file/d/1NiahqjNAxT2txCy6Rmda2-rMC4ApmFau/view?usp=sharing" target="_blank">
                <img src="/images/megalink.png" alt="Image 1">
            </a>
            <h2>MEGA</h2>
            <div class="ratings">
                <span class="stars" data-rating="2"></span>
                <span class="rating-count">13</span>
            </div>
        </div>
        <div class="content-box">
            <a href="https://drive.google.com/file/d/1NiahqjNAxT2txCy6Rmda2-rMC4ApmFau/view?usp=sharing" target="_blank">
                <img src="/images/mediafirelink.jpg" alt="Image 2">
            </a>
            <h2>MEDIAFIRE</h2>
            <div class="ratings">
                <span class="stars" data-rating="3"></span>
                <span class="rating-count">36</span>
            </div>
        </div>
        <div class="content-box">
            <a href="https://drive.google.com/file/d/1NiahqjNAxT2txCy6Rmda2-rMC4ApmFau/view?usp=sharing" target="_blank">
                <img src="/images/ggdlink.png" alt="Image 3">
            </a>
            <h2>GOOGLEDRIVE</h2>
            <div class="ratings">
                <span class="stars" data-rating="5"></span>
                <span class="rating-count">36</span>
            </div>
        </div>

    </div>

    <div id="information-section">

    </div>
    <div class="server-info">
        <h1 id="server-info-title">INFORMATION</h1>
        <div class="news-articles">
            <div class="news-article">
                {{-- <h2>TEAM INFORMATION</h2> --}}
                <div class="landscape-image-container">
                    <div class="landscape-image-text">
                        <img src="/Classhero/gif3.gif" alt="Image 1" class="landscape-image">
                        {{-- <p>Team Member 1</p> --}}
                    {{-- </div>
                    <div class="landscape-image-text">
                        <img src="/Classhero/Human_male.gif" alt="Image 2" class="landscape-image">
                        <p>Team Member 2</p>
                    </div>
                    <div class="landscape-image-text">
                        <img src="/Classhero/Human_male.gif" alt="Image 3" class="landscape-image">
                        <p>Team Member 3</p>
                    </div>
                    <div class="landscape-image-text">
                        <img src="/Classhero/Human_male.gif" alt="Image 4" class="landscape-image">
                        <p>Team Member 4</p>
                    </div>
                    <div class="landscape-image-text">
                        <img src="/Classhero/Human_male.gif" alt="Image 5" class="landscape-image">
                        <p>Team Member 5</p>
                    </div>
                    <div class="landscape-image-text">
                        <img src="/Classhero/Human_male.gif" alt="Image 6" class="landscape-image">
                        <p>Team Member 6</p>
                    </div> --}}
                </div>
            </div>
            </div>
            <div class="news-article">
                <h2>SERVER INFORMATION</h2>
                <p>&#9830 PVP // PVE</p>
                <p>&#9830 Rally Points</p>
                <p>&#9830 Special Events </p>
                <p>&#9830 Friendly and Active Gamemaster</p>
                <p>&#9830 Advance Talisman</p>

            </div>
            <div class="news-article">
                <h2>SERVER RATES</h2>
                <p>&#9830 1-3 = 100%</p>
                <p>&#9830 4 = 85%</p>
                <p>&#9830 5 = 80%</p>
                <p>&#9830 6 = 70%</p>
                <p>&#9830 7 = 60%</p>
                <p>&#9830 8 = 55%</p>
                <p>&#9830 9 = 45%</p>
                <p>&#9830 10 = 40%</p>
                <p>&#9830 11 = 35%</p>
                <p>&#9830 12 = 30%</p>
                <p>&#9830 12 = 20%</p>
                <p>&#9830 13 = 7%</p>
                <p>&#9830 14 = 5%</p>
                <p>&#9830 15 = 1%</p>
                <img src="/images/loggo1.png" alt="Your Logo">


            </div>


                </tbody>
            </table>
        </div>

</div>
<footer style="background-color: rgba(0, 0, 0, 0.7); color: white; text-align: center; bottom: 0; left: 0; width: 100%;">
    <div style="padding: 5px; background-color: rgba(0, 0, 0, 0.8)">
        <p style="margin-right: 10px; margin-top: 15px; font-size: 15px;">&copy; 2023 Agan Rohan All Rights Reserved.</p>
        <div style="position: relative; top: -31px;">
            <a href="https://www.facebook.com/yourfacebookpage" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: white; margin-right: 320px; font-size: 15px;">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://discord.gg/yourdiscord" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: white; margin-right: 10px; font-size: 15px;">
                <i class="fab fa-discord"></i>
            </a>

        </div>
    </div>
</footer>
<div>



    </div>

    <script>
        $(document).ready(function(){
            $('.banner-slider').slick({
                autoplay: true,
                autoplaySpeed: 2000,
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
                console.log('Mobile button clicked');
                console.log($('.mobile-menu').hasClass('active'));
                $('.mobile-menu').toggleClass('active');
            });

            $('.banner-slider').slick({

            });
        });

        $(document).ready(function () {
            $('.tab-button').click(function () {
                const tabId = $(this).data('tab');
                $('.tab-button').removeClass('active');
                $(this).addClass('active');
                $('.tab-content').removeClass('active');
                $('#' + tabId).addClass('active');
            });
        });

     document.addEventListener("DOMContentLoaded", function () {
        const starsContainers = document.querySelectorAll(".stars[data-rating]");

        starsContainers.forEach(function (starsContainer) {
            const ratingCount = parseInt(starsContainer.getAttribute("data-rating"));

            for (let i = 1; i <= 5; i++) {
                const star = document.createElement("i");
                star.classList.add("far", "fa-star");


                if (i <= ratingCount) {
                    star.classList.add("fas");
                }

                starsContainer.appendChild(star);
            }
        });
    });

    function scrollToDownload() {

        const downloadContainer = document.getElementById('download-container');
        const containerPosition = downloadContainer.getBoundingClientRect();


        const scrollTop = containerPosition.top + window.scrollY - (window.innerHeight - downloadContainer.clientHeight) / 3;


        window.scrollTo({ top: scrollTop, behavior: 'smooth' });
    }
    document.addEventListener("DOMContentLoaded", function () {

    function scrollToInformation() {
        const informationSection = document.getElementById('information-section');

        if (informationSection) {
            const sectionPosition = informationSection.getBoundingClientRect();
            const scrollTop = sectionPosition.top + window.scrollY;

            window.scrollTo({ top: scrollTop, behavior: 'smooth' });
        }
    }


    const informationLink = document.getElementById('information-link');

    if (informationLink) {
        informationLink.addEventListener('click', scrollToInformation);
    }
});
particlesJS("particles-js", {
  particles: {
    number: {
      value: 40,
      density: {
        enable: true,
        value_area: 1000,
      },
    },
    size: {
      value: 2,
    },
    links: {
      color: "#ffffff",
    },
    move: {
      enable: true,
      speed: 3,
    },
  },
  interactivity: {
    detectsOn: "canvas",
    events: {
      onHover: {
        enable: true,
        mode: "repulse",
      },
      onClick: {
        enable: true,
        mode: "push",
      },
    },
    modes: {
      repulse: {
        distance: 100,
      },
    },
  },
});

    </script>

</body>
</html>
