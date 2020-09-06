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
            <li><a href="/register" id="registerButton">Register</a></li>
            <li><a href="/login" id="loginButton">Login</a></li>
        </ul>
        <div class="menu">
            <h4>Menu</h4>
        </div>
    </nav>

    <main class="main-login" id="swup">
        <div class="login">
            <div class="login__title">Reset Password</div>
            <div class="login__text">Enter your email and we will send you an email to reset your password</div>
        </div>

        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" class="loginForm">
            @csrf

            <div class="loginEmail">
                <input type="text" id="email" name="email" class="loginEmail__form @error('email') is-invalid @enderror"
                    placeholder="Email" required value="">
                <label for="email" class="loginEmail__label">Email</label>
            </div>

            @error('email')
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text:  '{{$message}}',
                    showClass: {
                        popup: "animate__animated animate__fadeIn animate__faster "
                    },
                    hideClass: {
                        popup: "animate__animated animate__fadeOut animate__faster"
                    },
                    confirmButtonColor: "#ff6961",
                });
            </script>
            @enderror

            <input class="resetButton" type="submit" value="Reset">
        </form>
    </main>
    <script src="../js/app.js"></script>
</body>

</html>