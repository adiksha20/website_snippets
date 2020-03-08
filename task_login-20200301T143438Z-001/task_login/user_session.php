<?php

//$date = date('F d, Y, g:i:s a');
//echo "Today " .$date."<br />";
include_once('dbh1.php');



if(!isset($_SESSION['username']))
{
	echo "Not a session";
}
else
{
	
	$temp_username = $_SESSION['username'];
	
	$sql = "SELECT first_name,last_name, email,city FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<table><tr><th>FirstName</th><th>LastName</th><th>email</th><th>city</th></tr>";
    // output data of eacsath row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td> " . $row["first_name"]. "  </td><td> " . $row["last_name"]. "</td><td> " . $row["email"]. "</td><td>" .$row["city"]. "</td></tr>";
    }
     echo "</table>";
} else {
    echo "0 results";
}
}



	
?>



