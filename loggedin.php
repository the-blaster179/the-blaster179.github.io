<?PHP

require_once('./includes/session.inc.php');

?>

<html>
	<head>
		<title>Welcome</title>
	</head>
	<body>
		<style type="text/css">
		H1.h1
		{
			font-size:16px;
			cursor:default;
			font-family:Calibri;
			color:000000;
		}
		p.p
		{
			font-size:12px;
			cursor:default;
			font-family:Arial;
			color:000000;
		}
		body
		{
			font-size:12px;
			font-family:Tahoma;
			background-color:FFFFBB;
			text-align:justify;
			vertical-align:baseline;
			margin-top:6px;
			margin-bottom:6px;
			margin-left:6px;
			margin-right:6px;
		}
		</style>
		
		<form action="loggedin.php" method="post">
			<div align="left"><input type="submit" name="logout" value="Log out" />
		</form>
		
		<?PHP
			$user = $_SESSION['user'];
			$pass = $_SESSION['pass'];
			
			if(!isset($_SESSION['user']) and !isset($_SESSION['pass'])) {
				die("<script>location.href = 'index.php'</script>");
				ob_flush();
				session_destroy();
			} else {
				echo "<p style=\"font-family:Tahoma;font-color:black\">Hello there, <b>" . $user . ".";
				echo "<p style=\"font-family:Tahoma;font-color:black\">Your encrypted password is: " . $pass;
				echo "<p style=\"font-family:Arial;font-color:darkgray\">Click the home button to return to the log in page. Please note that you will be automatically logged out.</p>";
			}
			
			if(isset($_POST['logout'])){
				ob_flush();
				session_destroy();
				die("<script>location.href = 'index.php'</script");
			}
		?>