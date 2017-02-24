<?php 
								if(isset($_POST['submit']))
								{
									$con=mysqli_connect("localhost","root","","web");
									echo "yess";
									if(!$con)
									{
										die("failed to connect". mysqli_connect_error());						
									}
									
									$sql="INSERT INTO feedback (Name,Email,Message) values ('$_POST[name]','$_POST[email]','$_POST[message]')";
									if(!mysqli_query($con,$sql))
									{
										die("failed to connect". mysqli_error($con));	
									}
									else
									{
										header("Location:index.php");
									}
								}
?>