<html>
    <body>
        <form method="POST" action="search2.php">
            <!-- Blood Group: <input type="text" name="blood_group"><br> -->
            District <select name="district" class="form-control">
  <option value="thiruvananthapuram">Thiruvananthapuram</option>
  <option value="kollam">Kollam</option>
  <option value="pathanamthitta">Pathanamthitta</option>
  <option value="alappuzha">Alappuzha</option>
  <option value="kottayam">Kottayam</option>
  <option value="idukki">Idukki</option>
  <option value="ernakulam">Ernakulam</option>
  <option value="thrissur">Thrissur</option>
  <option value="palakkad">Palakkad</option>
  <option value="malappuram">Malappuram</option>
  <option value="kozhikode">Kozhikode</option>
  <option value="wayanad">Wayanad</option>
  <option value="kannur">Kannur</option>
  <option value="kasaragod">Kasaragod</option>
</select><br>

            Blood group <select name="blood_group" class="form-control" id="Blood group">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                       </select><br>
            
            <input type="submit" name="submit" value="Search">
        </form>
          
    </body>
</html>
<?php

?>