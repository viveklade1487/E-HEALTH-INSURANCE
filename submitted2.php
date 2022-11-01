<html>
<head><title>Submitted Form</title></head>
<body style="background-color: black; color: white;">
<a href="services.php" style="display: block; width: 35px; float:right ; padding: 8px; background-color: #f8ffbd; text-decoration: none; border:1px solid gray; margin: 3px; ">Back</a>
<?php
    
    $name=$_REQUEST['fname'];
    $mob=$_REQUEST['mobile'];
    $mail=$_REQUEST['email'];
        
	$conn = new mysqli('localhost', 'root', '', 'customers');
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
    
    $sql = "INSERT INTO customer2 VALUES ('$name','$mail','$mob')";
    if(mysqli_query($conn, $sql)){
		echo "Submitted succesfully!";
	} else{
		$temp= "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}
        mysqli_close($conn);
?>
    </body>
</html>
