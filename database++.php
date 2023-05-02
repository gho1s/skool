<?php
$servername = "localhost";
$username = "gho1s";
$password = "trust123";
$dbname = "school_days";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
/*
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}
*/
mysqli_close($conn);
?>
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
    <ul>
        <li><a href="SkoolDays.HTML">Home</a></li>
        <li><a href="database++.php">Academics</a></li>
        <li><a href="Fac.HTML">Facility</a></li>   
        <li><a href="Admin.HTML">Administration</a></li> 
        <li><a href="Reg.HTML">Registration</a></li>    
    </ul>
<!-- History Page -->
<p><b>Welcome to --- Elementary School</b></p>

<!--  Page -->
<p></p>


  

    <!-- This is a comment -->

</form>

</html>

<?php
$servername = "localhost";
$username = "gho1s";
$password = "trust123";
$dbname = "school_days";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM classes";
$result = $conn->query($sql);   //table snapshot is stored in object $result

if ($result->num_rows > 0) {
    echo "<h2>Class list:</h2>";

    //creating start of form
    echo "<form action = \"delete.php\" method = \"post\">"; // <form action = "delete.php" method = "post">

    //declare a counter that starts at 1
    $count = 1;

  // output data of each row
  while($row = $result->fetch_assoc()) {
    //store the value of vnumber
    $section = $row["section #"];
    //create a String variable that stores student + count e.g student 1, student2,...
    //$id = "student".$count; //ignored for the time being
    //Creates checkboxes
    echo "<input type=\"checkbox\" name = \"classList[]\" value = \"$section\">";
    //Displays row information as labels
    echo "<label for = \"$section\">id: " . $section. " - Teacher: " . $row["Start time"]. " " . $row["End time"].
     ", ". $row["Teacher"]. " - " . $row["classform"] . " credits.</label>"."<br><br>";
     //increment counter
     $count = $count + 1;
  }

  echo "<input type = \"submit\" value = \"Delete record\">";
  
  echo "<input type = \"submit\" value = \"input record\">";

  //</form> end of form
  echo "</form>";
} else {
  echo "0 results";
}
$conn->close();
?>
