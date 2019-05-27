<!-- 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
23/05/19
V1.6
-->


<?php require("includes/header.php"); ?>
	
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
		
<?php require("includes/footer.php"); ?>
