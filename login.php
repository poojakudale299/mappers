<html>
	<head>
		<title>BILL MANAGEMENT</title>
   		<link rel="icon" href="images/logo.jpg" type="image.jpg"/>
   		<style>
   		.instruction{
   			display: inline-block;
   			margin-top:20px;
   			margin-left: 20px;
   			box-shadow: 0px 0px 30px 2px #999999;
   			font-family: courier;
   			font-size: 30px;
   			font-weight: bold;
  			padding:20px;
   		}
   		</style>
   		<script>
   		function Redirectprev() {
	        window.location="login.html";
		}
		 function Redirectnext() {
		    window.location="profile.html";
		 }
   		</script>
	</head>
	<body>
		<div class="instruction">
		<?php

			if(!$con = mysqli_connect("localhost","root","","bills"))
			{

				echo "TRY AGAIN LATER...";
			?>

						<script>
				            setTimeout('Redirectprev()', 1500);

						</script>
	
			<?php 
			}
			else
			{
				$email = mysqli_real_escape_string($con,$_POST['email']);
				$password = mysqli_real_escape_string($con,$_POST["password"]);
				$query = "SELECT * FROM authentication where email = '$email'";
				$result = mysqli_query($con,$query);
				if(mysqli_num_rows($result)==1)
				{
					$row=mysqli_fetch_row($result);
					if($password==$row[3])
					{	
						echo "LOGIN IN SUCCESSFULL.....<br/>";
						
						echo "REDIRECTING TO SYSTEM CHECK.... ";
						session_start();
						$_SESSION["username"] = $row[1];
						$_SESSION["email"] = $row[2];
						?>

						<script>
				            setTimeout('Redirectnext()', 1500);

						</script>
	
					<?php 
					}
					else
					{
						echo "INVALID PASSWORD.<br/>";
						
						echo "TRY AGAIN...";
					?>
					<script>
				            setTimeout('Redirectprev()', 1500);

						</script>
						
					

					<?php
					}
				}else
				{
					echo 'EMAIL INVALID<br />';
					
					echo "TRY AGAIN...";
				?>
					<script>
				            setTimeout('Redirectprev()', 1500);

						</script>
						
									
				<?php
				}
			}

		?>
		</div>
	</body>
</html>
;