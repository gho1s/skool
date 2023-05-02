<?php
$servername = "localhost";
$username = "Proff_AM_356";
$password = "1234";
$dbname = "unidb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo "Connection Failed!";
    die("Connection failed: " . $conn->connect_error);
}
echo "Hello";
$vnumber = $_POST['vnum'];
$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$class = $_POST['classification'];
$major = $_POST['major'];
$credits = $_POST['credits'];
$gpa = $_POST['gpa'];
$address = $_POST['address'];
$phone = $_POST['phone'];

echo $vnumber . "<br>";
echo $firstName . "<br>";
echo $lastName . "<br>";
echo $class . "<br>";
echo $major . "<br>";
echo $credits . "<br>";
echo $gpa . "<br>";
echo $address . "<br>";
echo $phone . "<br>";

$sql = "INSERT INTO student (vnumber, first_name, last_name, classification, major, credits, gpa, address, phone)
VALUES ('$vnumber', '$firstName', '$lastName', '$class', '$major', '$credits', '$gpa', '$address', '$phone')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>