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
            <li><a href="/" class="not-active">Home</a></li>
            <li><a href="/about" class="active">About</a></li>
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
    <main class="main-about transition-fade" id="swup">
        <div class="aboutUs">
            <h1 class="aboutUs__title">About Us</h1>
            <p class="aboutUs__text">The COVID-19 Mask Initiative was created by and is run by high school
                students
                in
                the Pittsburgh area. Our goal is to mobilize local crafters and sewers to make masks for nursing
                homes
                and personal care facilities in need of supplies and save lives.
            </p>
            <img class="aboutUs__image" src="../img/masksLarge.png" alt="Sewing Machine Large">
        </div>

        <div class="container">
            <div class="ourTeam">
                <h1 class="ourTeam__title">Our Team</h1>
                <div class="ourTeam__person">
                    <div class="ourTeam__person_container">
                        <img class="ourTeam__person_container-svg" src="../svg/lydia.svg" id="lydiaSvg"
                            alt="Lydia Illustration">
                        <h3 class="ourTeam__person_container-title">Lydia Berger
                            <div class="ourTeam__person_container-title-school">Senior at
                                Norwin High School</div>
                        </h3>

                    </div>
                    <p class="ourTeam__person_paragraph">Before this project, Lydia’s primary programming experience
                        was in
                        Python and Haskell. However, after the COVID-19 crisis began, she decided to learn HTML and CSS
                        to
                        create the original site with Amish and make a difference. She met Amish Sethi through the
                        Pittsburgh
                        COVID-19
                        DataWorks Project, and they decided to team up to work on the project. Her goal is to help
                        nursing
                        homes in the Pittsburgh area and beyond.</p>
                </div>
                <div class="ourTeam__person">
                    <div class="ourTeam__person_container">
                        <img class="ourTeam__person_container-svg" src="../svg/amish.svg" id="amishSvg"
                            alt="Amish Illustration">
                        <h3 class="ourTeam__person_container-title">Amish Sethi<div
                                class="ourTeam__person_container-title-school">Junior at
                                Pine-Richland High School</div>
                        </h3>

                    </div>
                    <p class="ourTeam__person_paragraph">Amish has been coding since he was nine and has a passion for
                        using his coding knowledge to good use. He met Lydia during the Pittsburgh Covid-19
                        DataWorks
                        Project, an online and collaborative data science project hosted by the University of
                        Pittsburgh.
                        After meeting, they decided to work together to help nursing homes in the Pittsburgh area.</p>
                </div>
                <div class="ourTeam__person">
                    <div class="ourTeam__person_container">
                        <img class="ourTeam__person_container-svg" src="../svg/justin.svg" id="justinSvg"
                            alt="Justin Illustration">
                        <h3 class="ourTeam__person_container-title">Justin
                            Puthenpurayil
                            <div class="ourTeam__person_container-title-school">Junior at
                                Pine-Richland High School</div>
                        </h3>

                    </div>
                    <p class="ourTeam__person_paragraph">Justin learned how to write HTML and CSS in his freshman year
                        of
                        high school. He was brought in to work on this project by his friend Amish, and he has been
                        redesigning and
                        revamping the original website. He hopes to see this website help nursing homes get
                        masks
                        and become a better web developer through this project. </p>
                </div>
            </div>
        </div>

        <div class="whyWeCare">
            <h2 class="whyWeCare__title">Why We Care</h2>
            <p class="whyWeCare__paragraphOne">We care because we're all in this together. In these difficult times,
                we
                are all facing similar struggles. We can't fix everything, but we can band together and, little by
                little, mask by mask, save lives. Together, we really can make a difference, and together we can support
                each other to get through this crisis.</p>
            <h3 class="whyWeCare__nursingHome">Why Nursing Homes & Personal Care Facilities </h3>
            <p class="whyWeCare__paragraphTwo">Nursing homes and personal care facilities have been hit particularly
                hard by COVID-19. In Pennsylvania alone, over half of deaths from COVID-19 have been residents of
                nursing homes and personal care homes. At the same time, many of these facilities lack adequate
                protective equipment such as masks for staff and residents, compounding the problem. <span><a
                        data-content="The New York Times"
                        href="https://www.nytimes.com/2020/04/17/us/coronavirus-nursing-homes.html" target="_blank">The
                        New
                        York
                        Times</a> writes about the dire situation nursing homes and residents are facing with COVID-19
                </span>
            </p>
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
    </main>

    <script src="../js/app.js"></script>
</body>

</html>