<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = 'gba5094';
$password = 'Gme19delpen';
$host = 'localhost';
$dbname = 'gba5094_431W';

?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP MySQL Query Data Demo</title>
    </head>
    <body>
		<p>
		<?php 
				echo "Inserting new user: " . $_POST["lname"] . " " . $_POST["fname"] . " " . $_POST["pid"] . " " . $_POST["date"] . " " . $_POST["ptype"] . "..."; 
				$sql = 'INSERT INTO parking (fname, lname, pid, date, ptype) ';
				$sql = $sql . 'VALUES ("'.$_POST["lname"] . '","' . $_POST["fname"] . '","' . $_POST["pid"] . '","' . $_POST["date"] . '","' . $_POST["ptype"] . '")';
				try {
					$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$conn->exec($sql);
					echo "New record created successfully";
			?>
				<p>You will be redirected in 3 seconds</p>
				<script>
					var timer = setTimeout(function() {
						window.location='start.php'
					}, 3000);
				</script>
			<?php
				} catch(PDOException $e) {
					echo $sql . "<br>" . $e->getMessage();
				}
				$conn = null;
			?>
		</p>
		</body>
</div>
</html>
