<!DOCTYPE html>


<html lang="en">

  <head>
    <div id="skip"> <a href="#main_text" title="Skip to main content">Skip to main content</a> </div>
     <!-- Links bootstrap css and js, jquery, style.css stylesheet, and FA-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <script src="https://kit.fontawesome.com/a4e9715686.js" crossorigin="anonymous"></script>
    <script src="scripts.js" type="text/javascript"></script>
    <!-- metas -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Pragma" content="no-cache">
    <!-- title -->
    <title>Nursing Home Mask Initiative</title>
  </head>




  <section class="bottom_background_home">

    <header>
    <!-- Website header -->
    <section class="top_background_home">

      <div class="row">

       <div class="col-xs">
          <!-- Website Name -->

          <h1>Nursing Home Mask Initiative</h1>

        </div>
         <img src="Masks-Large.png" class=".img-fluid" alt="Sewing machine and homemade masks" srcset="Masks-Small.png" 480w, "Masks-Medium.png" 780w, "Masks-Large.png" 1280w>

    </section>


    <!-- Navbar -->

        <nav class="navbar .navbar-expand{-sm|-md|-lg|-xl} sticky-top">
          <div class="navbar-inner">
          <ul class="nav nav-justified flex-sm-column nav-pills">


          <li class="nav-item"><a role="button" class="flex-sm-fill text-sm-center nav-link active" href="/home" title="Go to homepage">Home</a></li>
            <li class="nav-item"><a role="button" class="flex-sm-fill text-sm-center nav-link" href="/about" title="Go to about page">About</a></li>
            <li class="nav-item"><a role="button" class="flex-sm-fill text-sm-center nav-link" href="/get_involved" title="Go to participate page">Participate</a></li>
            <li class="nav-item"><a role="button" class="flex-sm-fill text-sm-center nav-link" href="/resources" title="Go to resources page">Resources</a></li>
            <li class="nav-item"><a role="button" class="flex-sm-fill text-sm-center nav-link" href="/donate" title="Go to donate page">Donate</a></li>
            <li class="nav-item"><a role="button" class="flex-sm-fill text-sm-center nav-link" href="/contact" title="Go to contact page">Contact</a></li>
	        <li class="nav-item"><a role="button" class="flex-sm-fill text-sm-center nav-link" href="/request" title="Go to request page">Request</a></li>

          </ul>
          </div>
        </nav>

      </div>

    </header>
  </section>



  <body>

    <main>
    <!-- Website Text -->

    <article class="container main_text" id="main_text">

      <h2>Get Involved</h2>

      <br>

      <h4>Find the participating nursing home or personal care facility in need nearest to you</h4>

      <br>
      <br>
      <br>

      <h3>How Do I Get Involved?</h3>

      <br>

      <p>Input your zip code into the search bar above our data table to see the nursing homes and personal care facilities closest to you, their needs, and their addresses. When you make your masks, deliver them by mail or drop-off to whichever nearby facility you choose.</p>

      <br>


      <h3>Mask Delivery and Packaging Instructions</h3>

      <br>
 
      <p>Each nursing home or personal care facility's specific delivery instructions are listed under 'Other information' in the table.</p>
      <br>


      <h3>Mask Packaging Instructions</h3>

      <br>

      <p>When nursing homes and personal care facilities specify their preferred method of mask packaging, instructions will go here.</p>

      <br>
      <br>
      <br>

      <div class="text-center">
      <label for="myInput">Input your zipcode to find nearby nursing homes and personal care facilities</label>
      <br>
      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Enter your zipcode">
      </div>

      <div style="overflow-x:auto">
      <table id="myTable">
        <caption>Nursing Homes and Personal Care Facilities, their locations, and their needs</caption>
        <tr>
          <th scope="col">Nursing Home</th>
          <th scope="col">Needs</th>
          <th scope="col">Address</th>
          <th scope="col">Zip Code</th>
          <th scope="col">Preferred Mask Type</th>
          <th scope="col">Mask Fabric Preference</th>
          <th scope="col">Mailing Address</th>
          <th scope="col">Other Information</th>
        </tr>

      @foreach($homes as $row)
        <tr>
          @foreach($row as $value)
            <td>{{$value}}</td>
          @endforeach
        </tr>
      @endforeach
      </table>
      </div>

      <br>
    </article>
    </main>
  </body>

  <!-- Links footer html from includefooter.js -->
  <footer>
    <p style= "text-indent: 0px;"> &copy; Nursing Homes Mask Initiative 2020 </p>
  </footer>
</html>

<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  
  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>