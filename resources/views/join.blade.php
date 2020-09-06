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

  <main class="main-join transition-fade" id="swup">
    <div class="donateMasks">
      <h1 class="donateMasks__title">Donate Masks</h1>
      <div class="donateMasks__text">Fill out the form to donate masks</div>
    </div>

    <form method="GET" action="/participate/submit" class="donateMasksContainer">
      <div class="donateMasksFlexContainer">
        <div class="donateMasksFormContainer">
          <input type="text" id="Name" name="Name" value="{{Auth::user()->name}}" class="donateMasksFormContainer__form"
            placeholder="Name">
          <label for="Name" class="donateMasksFormContainer__label">Name</label>
        </div>
        <div class="donateMasksFormContainer donateMasksMarginContainer">
          <input type="text" id="email" name="email" value="{{Auth::user()->email}}"
            class="donateMasksFormContainer__form" placeholder="Email">
          <label for="email" class="donateMasksFormContainer__label">Email</label>
        </div>
      </div>
      <div class="donateMasksFlexContainer">
        <div class="donateMasksFormContainer">
          <input type="text" id="phone" name="phone" class="donateMasksFormContainer__form" placeholder="Phone Number"
            onkeypress="return isNumber(event);" maxlength="10" value="">
          <label for="phone" class="donateMasksFormContainer__label">Phone Number</label>
        </div>
        <label class="customSelect" for="nhome" id="dropdownMenu">
          <select id="nhome" name="options" name="nhome">
              @php
              $curPageName = $_SERVER['REQUEST_URI'];
              $page = explode('/', $curPageName);
              $user = $page[2];
              $nursingHome = str_replace('%20', ' ', $user);
              @endphp
            <option value="{{$nursingHome}}">
              {{$nursingHome}}
            </option>
            @foreach($homes as $row)
            @foreach($row as $value)
            @if($value == json_decode(json_encode($row), true)['Name'] && $value !== $nursingHome)
            <option value="{{$value}}">
              {{$value}}
            </option>
            @endif
            @endforeach
            @endforeach
          </select>
        </label>
      </div>
      <div class="donateMasksFlexContainer">
        <div class="donateMasksFormContainer" id="numberOfMasks">
          <input type="text" id="nmasks" name="nmasks" value="" class="donateMasksFormContainer__form"
            placeholder="Number of Masks">
          <label for="nmasks" class="donateMasksFormContainer__label">Number of Masks</label>
        </div>
        <div class="donateMasksFormContainer donateMasksMarginContainer">
          <input type="text" id="mats" name="mats" value="" class="donateMasksFormContainer__form"
            placeholder="Other Materials" id="otherMatsInput">
          <label for="mats" class="donateMasksFormContainer__label" id="otherMatsLabel">Other Materials</label>
        </div>
      </div>
      <div class="donateMasksButtonFlexContainer">
        <label class="donateMasksRadio" id="mailInMasks">
          <input type="radio" name="delivery" value="mail in" checked>
          <span>Mail in Masks</span>
        </label>
        <label class="donateMasksRadio" id="dropOffMasks">
          <input type="radio" name="delivery" value="drop off">
          <span>Drop off Masks</span>
        </label>
      </div>
      <div class="checkboxContainer">
        <input type="checkbox" id="check" class="checkbox" name="check" onclick="needDeliveryAlert();"
          autocomplete="off">
        <label for="check" class="checkboxLabel">
          <svg viewBox="0,0,50,50" id="checkboxArrow">
            <path d="M5 30 L 20 45 L 45 5"></path>
          </svg>
        </label>
        <span class="checkboxText">Needs Masks Dropped Off*</span>
      </div>

      <input class="submitButton" type="submit" value="Submit">
    </form>
  </main>

  <script src="../js/app.js"></script>
</body>

</html>