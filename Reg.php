<!DOCTYPE html>
<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: blueviolet;
      }
      
      li {
        float: left;
      }
      
      li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }
      
      /* Change the link color to #111 (black) on hover */
      li a:hover {
        background-color: rgb(168, 116, 218);
      }
</style>
<html>

   <!-- Nav_Bar -->
<ul>
    <li><a href="SkoolDays.HTML">Home</a></li>
    <li><a href="Acad.HTML">Academics</a></li>
    <li><a href="Fac.HTML">Facility</a></li>   
    <li><a href="Admin.HTML">Administration</a></li> 
    <li><a href="r.php">Registration</a></li>        
</ul>

    <!-- Insert_Form -->
<form action = "skoolday.php" method="skooldays">

    <!-- Sign-up Page -->

    <label for="SNID">Student Number ID: </label><br>
    <input type="text" id="SNID" name="SNID"><br>

    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname"><br>

    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname"><br>

    <label for="addr">Address:</label><br>
    <input type="text" id="addr" name="addr"><br>

    <label for="city">City:</label><br>
    <input type="text" id="city" name="city"><br>

    <label for="state">State:</label><br>
    <input type="text" id="state" name="state"><br>

    <!-- Grade Levels -->

    <label for="classification">Classification</label><br>
    <select id="classification" name="classification">
        <option value="none">---</option>
        <option value="PK">PRE-K</option>
        <option value="KG">KINDERGARTEN</option>
        <option value="FS">FIRST GRADE</option>
        <option value="SC">SECOND GRADE</option>
        <option value="TR">THIRD GRADE</option>
        <option value="FR">FORTH GRADE</option>
        <option value="F">FIFTH GRADE</option>
    </select>
    <br>

    <!-- GPA -->

    <label for="gpa">GPA</label><br>
    <input type="number" step="any" id="gpa" name="gpa" placeholder="0.000" min="0" max="4"><br><br>

    <!-- Submit button -->

    <input type="submit" value="Register">

    <!-- This is a comment -->

     <!-- Submit button -->


</form>
</html>