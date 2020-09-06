<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Donate - Nursing Home Mask Initiative</title>
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
            <li><a href="/" class="not-active">Home</a></li>
            <li><a href="/about" class="not-active">About</a></li>
            <li><a href="/participate" class="not-active">Participate</a></li>
            <li><a href="/resources" class="not-active">Resources</a></li>
            <li><a href="/donate" class="active">Donate</a></li>
            <li><a href="/contact" class="not-active">Contact</a></li>
            <li><a href="/register" id="registerButton">Register</a></li>
            <li><a href="/login" id="loginButton">Login</a></li>
        </ul>
        <div class="menu">
            <h4>Menu</h4>
        </div>
    </nav>
    <main class="main-donate transition-fade" id="swup">
        <div class="donate">
            <h1 class="donate__title">Donate</h1>
            <p class="donate__text">If you aren't a crafter but still want to help, the listed organizations are taking
                monetary donations that will help save lives</p>
        </div>

        <div class="container-organizations">
            <div class="organizations">
                <h2 class="organizations__title">Organizations</h2>
                <p class="organizations__text"><span class="organizations__text_link"><a
                            href="https://operationfacemask.com/donate/" target="_blank"
                            data-content="Operation Facemask">Operation
                            Facemask</a> is a Pittsburgh-based group of volunteers working to meet the city's mask
                        needs.
                        They accept monetary donation, and donation of materials. </span></p>
                <p class="organizations__text"><span class="organizations__text_link"><a
                            href="https://www.nndoh.org/donate.html" target="_blank"
                            data-content="The Navajo Nation COVID-19 Fund">The Navajo Nation COVID-19 Fund</a> has been
                        established to help the Navajo Nation respond to
                        the COVID-19 pandemic. </span></p>
                <p class="organizations__text"><span class="organizations__text_link"><a
                            href="https://www.globallinks.org/donate" target="_blank" data-content="Global Links">Global
                            Links</a> is
                        accepting monetary donations for the COVID-19 response. Donate to their pandemic response or to
                        their other lifesaving projects</span></p>
            </div>
        </div>

        <div class="donateInformation">
            <h2 class="donateInformation__title">Other Information</h2>
            <p class="donateInformation__text"><span class="donateInformation__text_link"><a
                        data-content="COVID-19 Giving Guide"
                        href="https://www.forbes.com/sites/morgansimon/2020/04/14/covid-19-giving-guide-how-to-donate-to-reach-the-most-marginalized/#70d6b9271a72"
                        target="_blank">COVID-19
                        Giving Guide</a></span></p>
            <p class="donateInformation__text"><span class="donateInformation__text_link"><a
                        data-content="How to Help Fellow Yinzers During the Pandemic"
                        href="https://nextpittsburgh.com/features/heres-how-you-can-help-others-in-pittsburgh-during-the-coronavirus-crisis/"
                        target="_blank">How
                        to Help Fellow Yinzers During the Pandemic</a></span></p>
        </div>

        <footer class="footerMain">
            <h2 class="footerMain__title">&copy Nursing Home Mask Initiative</h2>
            <div class="footerMain__svg">
                <a href="https://www.instagram.com/covid19maskinitiative/?hl=en" target="_blank"><img
                        src="../svg/instagram.svg" alt="Instagram Icon" class="footerMain__svg_instagram"></a>
                <a href="https://twitter.com/covid_mask" target="_blank"><img src="../svg/twitter.svg"
                        alt="Twitter Icon" class="footerMain__svg_twitter"></a>
                <a href="#" target="_blank"><img src="../svg/facebook.svg" alt="Facebook Icon"
                        class="footerMain__svg_facebook"></a>
            </div>
        </footer>

        <script src="../js/app.js"></script>
    </main>
</body>