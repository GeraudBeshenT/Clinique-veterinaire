<?php

	$con=mysqli_connect('localhost','root','','admin');

	if (!$con)
	{
		die('Please check your connection'.mysqli_error($con));
	}
?>