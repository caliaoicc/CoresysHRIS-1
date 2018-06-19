<?php
	$connection=mysqli_connect("localhost","admin","admin","db_coresys");
	if (mysqli_connect_errno()) {
		printf("Connection Failed: %s\n",mysqli_connect_error());
		exit();
	} else{
		//printf("Connection information: %s\n",mysqli_get_host_info($connection));
		}

?>
