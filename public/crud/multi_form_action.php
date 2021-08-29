<?php 
include('header.php');
include_once("db_connect.php");
?>
<title>Doozy</title>
<style type="text/css">
 
  
    body {
        background-image: url("bg1.png");
        background-repeat: no-repeat;
        background-size: 2300px 1200px;
    }

</style>
<body>
<div class="container">
	<?php
	if (isset($_POST['submit'])) {	
	    
		/*$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
		$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
		$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
		$address = mysqli_real_escape_string($conn, $_POST['address']);	
		
		if(mysqli_query($conn, "INSERT INTO user(email, password, first_name, last_name, mobile, address) VALUES('".$email."', '" . $password . "', '". $first_name."', '".$last_name."', '".$mobile."', '". $address."')")) {
			echo "You're Registered Successfully!";
		} else {
			echo "Error in registering...Please try again later!";
		}*/
		
		
		$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
		$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		
		if(mysqli_query($conn, "INSERT INTO user_info(first_name, mobile, email) VALUES('". $first_name."', '".$mobile."', '". $email."')")) {
			//echo "You're Registered Successfully!";
			?>
			<div class="form-group"><br /><br /><br /><br /><br /><br />
        	    <img src="6.jpeg" alt="bg">
        	</div>
        	<script>
                 setTimeout(function(){
                    window.location.href = 'https://21kclass.com/public/crud/';
                 }, 3000);
              </script>
        	
			<?php
		} else {
			echo "Error in registering...Please try again later!";
		}
		
	}	
	?>	
</div>
</body>
