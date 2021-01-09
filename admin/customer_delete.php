<?php

		include "connect.php";
		$sql = "delete from users where id = '$_GET[id]'";
		mysqli_query($con,$sql);
		header('location:content_customer.php?function=customer_manage');
?>