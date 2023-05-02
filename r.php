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
    echo "<h2>Classes:</h2>";

    //creating start of form
    echo "<form action = \"r2.php\" method = \"post\">"; // <form action = "register.php" method = "post">

    //declare a counter that starts at 1
    $count = 1;

  // output data of each row
  while($row = $result->fetch_assoc()) {
    //store the value of secion #
    $cnum = $row["section #"];
    //create a String variable that stores student + count e.g student 1, student2,...
    //$id = "student".$count; //ignored for the time being
    //Creates checkboxes
    echo "<input type=\"checkbox\" name = \"classList[]\" value = \"$cnum\">";
    //Displays row information as labels
	//joy has upper case T and i have lowercase t for start time
    echo "<label for = \"$cnum\">Class number: " . $cnum. " - " . $row["Start time"]. " - " .
		$row["End time"]. ", ". $row["Teacher"]. " - " . $row["classform"] . " - " . 
		$row["subject"]. ".</label>"."<br><br>";
     //increment counter
     $count = $count + 1;
  }

  echo "<input type = \"submit\" value = \"Register\">";

  //</form> end of form
  echo "</form>";
} else {
  echo "0 results";
}
$conn->close();
?>