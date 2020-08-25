<!DOCTYPE html>
<html>
<body>

<h2>DONATE MASKS</h2>

<form action="/participate/submit">
  <label for="Name">Name:</label><br>
  <input type="text" id="Name" name="Name" value="{{Auth::user()->name}}"><br>
  <label for="Email">Email:</label><br>
  <input type="text" id="email" name="email" value="{{Auth::user()->email}}"><br>
  <label for="Phone">Phone Number:</label><br>
  <input type="text" id="phone" name="phone" value="111-111-1111"><br>
  <label for="Address">Address:</label><br>
  <input type="text" id="address" name="address" value="111 Street, Pittsburgh, PA 15219"><br>
  <label for="NursingHome">Nursing Home to Donate To:</label><br>
  <input type="text" id="nhome" name="nhome" value="{{$nursing_home}}"><br>
  <label for="masks">Number of Masks:</label><br>
  <input type="text" id="nmasks" name="nmasks" value="0"><br>
  <label for="mats">Other materials:</label><br>
  <input type="text" id="mats" name="mats" value="30 gowns, 10 dollars, etc."><br>
  <label><input type="radio" name="delivery" value="mail in" checked="checked">Mail in Masks</label>
  <label><input type="radio" name="delivery" value="drop off">Drop off Masks</label><br>
  <label><input type="radio" name="myself" value="He/She will handle delivery on my own" checked="checked">I will handle delivery on my own</label>
  <label><input type="radio" name="myself" value="He/She will need someone else to drop off">I need someone else to drop off my masks (Please only check this if you are within 20 miles of Wexford, PA)</label><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>
