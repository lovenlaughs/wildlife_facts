<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<?php
		$first = $_POST['first'];
		$last = $_POST['last'];
		$email = $_POST['email'];
        $inquiry = $_POST['inquiry'];
    
		$send = "tiffany.brown.ucf@knights.ucf.edu";
		
    mail ($send, $inquiry, "From: " . $first . $last . $email);
		echo "Thank you! We will get back to you shortly";
?>
<br>
<button><a href = "contact.html">Go Back</a></button>

</body>
</html>