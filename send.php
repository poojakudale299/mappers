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
	        window.location="send.html";
		}
   		</script>
	</head>
	<body>
		<div class="instruction">
			<?php

				if(!$con = mysqli_connect("localhost","root","","bills"))
					echo "not connected";
				else
				{
					$serveremail = mysqli_real_escape_string($con,$_POST['server1']);
					$useremail = mysqli_real_escape_string($con,$_POST['user1']);
					$total = mysqli_real_escape_string($con,$_POST["total"]);
					$query = "SELECT * FROM send where user = '$toemail'";

					if($result=mysqli_query($con,$query))
					{
						if(mysqli_num_rows($result)==1)
						{
							echo "EMAIL ALREADY EXISTS";
							?>
							<script>
				            setTimeout('Redirectprev()', 1500);

							</script>

							<?php
						}

						else
						{
							$query1 = "INSERT INTO send(server1,user1,total) VALUES('$serveremail','$useremail','$total')";
							if(mysqli_query($con,$query1))
							{
								echo "REGISTERED SUCESSFULLY<br />";
								?>
								<script>
				           		 setTimeout('Redirectprev()', 1500);

								</script>

								<?php
							}
							else
							{
								echo "ERROR...TRY AGAIN LATER";
								?>
								<script>
				          		  setTimeout('Redirectprev()', 1500);

								</script>

								<?php
							}
						}
			    }
			}
				
			?>
		</div>
</body>
</html>