<?php
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$address = $_POST['address'];
    $item = $_POST['item'];
    $price = $_POST['price'];
                
	// Database connection
	$conn = new mysqli('localhost','root', '','register');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into user(name,  mobile,  email,  address,  item,  price) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $name,  $mobile,  $email,  $address,  $item,  $price);
		$execval = $stmt->execute();
		echo $execval;
		echo "<strong>";
        echo "Dear customer";
        echo    "</strong>";
        echo "<br>";
        echo "<br>";

        echo "<strong>";
        echo "Thanks for placing order in G.COM";
        echo    "</strong>";
        echo"<br>";
        echo "<br>";

    

    echo"Your order will be delivered to your address within 3 working days.";
    echo"<br>";
    echo"If you have any issues about your order you can cotact us at +91 9123456789 or write a mail to contactus@gmail.com";
    echo"<br>";  
    echo "<br>";
    echo    "<strong>";    
    echo"Thanks for visiting G.COM";
    echo    "</strong>";    
		$stmt->close();
		$conn->close();
	}
?>