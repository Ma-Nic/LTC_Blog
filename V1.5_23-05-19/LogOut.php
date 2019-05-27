<!-- 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
23/05/19
V1.5
-->


<!DOCTYPE html>
<html lang - "en">
	<head>
		<script src="js/ltc_js.js" type="text/javascript"></script>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset = "UTF-8">

		<link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="styles/ltc_css.css">

	<title>The Local Theater Company</title>

	</head>
	
	<body>

 		<?php
			// Reset the session -- https://php.net/session_destroy
			session_start();

			// Unset all of the session variables.
			$_SESSION = array();

			// Delete the session cookie
			if (ini_get("session.use_cookies")) {
				$params = session_get_cookie_params();
				setcookie(session_name(), '', time() - 42000,
					$params["path"], $params["domain"],
					$params["secure"], $params["httponly"]
				);
			}
			// Finally, destroy the session.
			session_destroy();
			header("Location:index");
		?>
		
		
	</body>
</html>
