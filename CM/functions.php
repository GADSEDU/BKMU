<?php

function check_login($con) {
	if (isset($_SESSION['userName'])) {
		# code...
		$userName = $_SESSION['userName'];

		$query = "select * from login where userName = '$userName' limit 1";

		$result = mysqli_query($con, $query);
		if ($result && mysqli_num_rows($result) > 0) {
			# code...
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}

		// redirect to login
		header("Location: login.php");
		die;
	}
}
