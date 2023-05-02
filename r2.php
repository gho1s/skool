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

//create an object that stores checkboxes information only if
//atleast one checkbox is selected
//remember this will be cla
if (isset($_POST['classList'])){
    $aClass = $_POST['classList'];
}

//If aStudent, which is all checkbox data is empty print message
  
  if(empty($aClass)) 
  {
    echo("You didn't select any students.");
  } 
  else //if not empty, loop through checkbox list and display information per checkbox.
  {
    $N = count($aClass);

    echo("You selected $N student(s): <br>");
    for($i=0; $i < $N; $i++)
    {
      //store V number in a variable
      $cnum = $aClass[$i];

		echo $cnum;
      //using $vnum construct a query that will delete the student with
      //$vnum as a vnumber field
      //$sql = "DELETE FROM student WHERE vnumber = '$vnum'";

      //run query
      //if ($conn->query($sql) === TRUE) {
      //  echo "Record deleted successfully";
      //} else {
      //  echo "Error deleting record: " . $conn->error;
      //}

    }
  }

//include 'display.php';

?>