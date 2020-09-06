<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/style.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Home - Nursing Home Mask Initiative</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <script defer src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>
    <script src="../js/SwupOverlayTheme.js"></script>
    <script defer src="../js/swup.js"></script>
</head>

<body>
    <nav class="nav">
        <a href="/"><img class="nav__logo" src="../img/tempLogo.png" alt="Temporary Logo"></a>
        <ul class="nav__links">
            <li><a href="/" class="active">Home</a></li>
            <li><a href="/about" class="not-active">About</a></li>
            <li><a href="/participate" class="not-active">Participate</a></li>
            <li><a href="/resources" class="not-active">Resources</a></li>
            <li><a href="/donate" class="not-active">Donate</a></li>
            <li><a href="/contact" class="not-active">Contact</a></li>
            @if(!Auth::check())
            <li><a href="/register" id="registerButton">Register</a></li>
            <li><a href="/login" id="loginButton">Login</a></li>
            @endif
            @if(Auth::check())
            <form method="GET" action="{{Auth::logout()}}">
                <li><input class="logoutButton" type="submit" value="Logout"></li>
            </form>
            @endif
        </ul>
        <div class="menu">
            <h4>Menu</h4>
        </div>
    </nav>
    <main class="main-home transition-fade" id="swup">
        <div class="hero">
            <div class="hero__textContainer">
                <h2 class="hero__textContainer_title">Nursing Home Mask Initiative</h2>
                <p class="hero__textContainer_text">Nursing home residents and caretakers need masks. It’s up to <span
                        class="hero__textContainer_text-bold">us</span> to help.</p>
            </div>
            <a class="hero__btn" href="/participate" onclick="changeNavBar('participate');">Learn More</a>
        </div>

        <div class="arrow">
            <h4 class="arrow__text">More</h4>
            <svg class="arrow__svg" viewBox="0 0 65 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="33" y1="32.6985" x2="62.6985" y2="3.00002" stroke="#4B2073" stroke-width="3"
                    stroke-linecap="round" />
                <line x1="2.12132" y1="3" x2="31.8198" y2="32.6985" stroke="#4B2073" stroke-width="3"
                    stroke-linecap="round" />
            </svg>
        </div>

        <div class="ourMission">
            <h1 class="ourMission__title">Our Mission</h1>
            <div class="ourMission__text">We want to save lives by helping crafters and sewers like you make masks
                for nursing homes and personal care facilities in need.</div>
        </div>

        <h1 class="getInvolvedTitle">Get Involved</h1>
        <div class="getInvolved">
            <div class="getInvolved__donate">
                <div class="getInvolved__donate_image">
                    <img src="../svg/donate.svg" alt="Piggy Bank">
                </div>
                <a href="/donate"><button class="getInvolved__donate_button"
                        onclick="changeNavBar('donate');">Donate</button></a>
            </div>
            <div class="getInvolved__sew">
                <div class="getInvolved__sew_image">
                    <img src="../svg/sew.svg" alt="Sewing Machine">
                </div>
                <a href="/participate"><button class="getInvolved__sew_button"
                        onclick="changeNavBar('participate');">Sew</button></a>
            </div>
            <div class="getInvolved__learn">
                <div class="getInvolved__learn_image">
                    <img src="../svg/learn.svg" alt="Brain">
                </div>
                <a href="/resources"><button class="getInvolved__learn_button"
                        onclick="changeNavBar('resources');">Learn</button></a>
            </div>
        </div>
        {{dd(Auth::check())}}

        <footer class="footer">
            <h2 class="footer__title">&copy Nursing Home Mask Initiative</h2>
            <div class="footer__svg">
                <a href="https://www.instagram.com/covid19maskinitiative/?hl=en" target="_blank"><img
                        src="../svg/instagram.svg" alt="Instagram Icon" class="footerMain__svg_instagram"></a>
                <a href="https://twitter.com/covid_mask" target="_blank"><img src="../svg/twitter.svg"
                        alt="Twitter Icon" class="footerMain__svg_twitter"></a>
                <a href="#" target="_blank"><img src="../svg/facebook.svg" alt="Facebook Icon"
                        class="footerMain__svg_facebook"></a>
            </div>
        </footer>
    </main>

    <script src="../js/app.js"></script>
</body>

</html>