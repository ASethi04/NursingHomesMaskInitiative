<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Dashboard - Nursing Home Mask Initiative</title>
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
            <li><a href="/donate" class="not-active">Donate</a></li>
            <li><a href="/contact" class="not-active">Contact</a></li>
            <li><a href="/register" id="registerButton">Register</a></li>
            <li><a href="/login" id="loginButton">Login</a></li>
        </ul>
        <div class="menu">
            <h4>Menu</h4>
        </div>
    </nav>

    <main class="main-dashboard transition-fade" id="swup">
        <div class="dashboard">
            <h2 class="dashboard__title">Welcome Justin</h2>
            <p class="dashboard__text">Find your goals, current orders, and past orders here. Remember to press
                fulfilled once you complete an order</p>
        </div>

        <div class="dashboardCards">
            <div class="currentGoal">
                <h3 class="currentGoal__title">Current Goal</h3>
                <div class="currentGoal__barContainer">
                    <div class="text-container">
                        <p class="currentGoal__barContainer_level">Level 2</p>
                        <p class="currentGoal__barContainer_goal">10 / 20 Masks</p>
                    </div>
                    <div class="currentGoal__barContainer_bar">
                        <div class="currentGoal__barContainer_bar-width"></div>
                    </div>
                </div>
                <a class="currentGoal__button" href="/participate">Donate More Masks</a>
            </div>

            <div class="currentOrders">
                <h3 class="currentOrders__title">Current Orders</h3>
                <h4 class="currentOrders__nursingHome" id="firstNursingHome">Redstone Highlands</h4>
                <p class="currentOrders__masks">24 Masks</p>
                <div class="currentOrders__buttons">
                    <a href="" class="currentOrders__buttons_fulfilled">Fulfilled</a>
                    <a href="" class="currentOrders__buttons_cancel">Cancel</a>
                </div>
            </div>

            <div class="pastOrders">
                <h3 class="pastOrders__title">Past Orders</h3>
                <h4 class="pastOrders__nursingHome" id="firstNursingHome">Ark Manor</h4>
                <p class="pastOrders__masks">10 Masks</p>
                <a class="pastOrders__buttonFulfilled">Fulfilled</a>
                <h4 class="pastOrders__nursingHome">Legionnaire Manor</h4>
                <p class="pastOrders__masks">30 Masks</p>
                <a class="pastOrders__buttonCancelled">Cancelled</a>
            </div>
        </div>

        <footer class="footerMain">
            <h2 class="footerMain__title">&copy Nursing Home Mask Initiative</h2>
            <div class="footerMain__svg">
                <a href="https://www.instagram.com/covid19maskinitiative/?hl=en"><img src="../svg/instagram.svg"
                        alt="Instagram Icon" class="footerMain__svg_instagram"></a>
                <a href="https://twitter.com/covid_mask"><img src="../svg/twitter.svg" alt="Twitter Icon"
                        class="footerMain__svg_twitter"></a>
                <a href="#"><img src="../svg/facebook.svg" alt="Facebook Icon" class="footerMain__svg_facebook"></a>
            </div>
        </footer>
    </main>

    <script src="../js/app.js"></script>
</body>