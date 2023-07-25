<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = 'gba5094';
$password = 'Gme19delpen';
$host = 'localhost';
$dbname = 'gba5094_431W';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = 'SELECT clname, cfname, id, dateofreservation FROM reservations';
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

?>
<!DOCTYPE html>
<html>
    <head>
	<style>
	h1 {text-align: center;}
        <title>PHP MySQL Query Data Demo</title>
	</style>
    </head>
    <body>
	<h1>GEISHA HOTEL</h1>
        <div id="container">
            <h2>Current reservations</h2>
            <table border=1 cellspacing=5 cellpadding=5>
                <thead>
                    <tr>
                        <th>Last name</th>
                        <th>First name</th>
                        <th>ID</th>
		       <th>Reservation Date</th>
                        <th>Delete?</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['clname']) ?></td>
                            <td><?php echo htmlspecialchars($row['cfname']); ?></td>
                            <td><?php echo htmlspecialchars($row['id']); ?></td>
			   <td><?php echo htmlspecialchars($row['dateofreservation']); ?></td>
                            <td><?php echo '<form action="/delete.php" method="post"><input type="submit" value="DELETE"><input type="hidden" name="id" value="' . htmlspecialchars($row['id']) . '"></form>'; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
		<br><h2>Insert a new user:</h2>
		<form action="/insert.php" method="post">
			<table>
				<tr><td>First name:</td><td><input type="text" id="cfname" name="cfname" value="?"></td></tr>
				<tr><td>Last name:</td><td><input type="text" id="clname" name="clname" value="?"></td></tr>
				<tr><td>Login ID:</td><td><input type="text" id="id" name="id" value="?"></td></tr>
				<tr><td>Date:</td><td><input type="text" id="dateofresrvation" name="dateofreservation" value="?"></td></tr>
			</table>
			<input type="submit" value="INSERT">
		</form>
		<br>
		<br><br><br>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = 'gba5094';
$password = 'Gme19delpen';
$host = 'localhost';
$dbname = 'gba5094_431W';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = 'SELECT id, roomtype, guestcapacity, roomprice FROM roomOP';
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

?>
		<h2>Current reservations</h2>
            <table border=1 cellspacing=5 cellpadding=5>
                <thead>
                    <tr>
                        <th>Guest ID</th>
                        <th>Room Type</th>
                        <th>Guest Capacity</th>
		       <th>Room Price</th>
                        <th>Delete?</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['id']) ?></td>
                            <td><?php echo htmlspecialchars($row['roomtype']); ?></td>
                            <td><?php echo htmlspecialchars($row['guestcapacity']); ?></td>
			   <td><?php echo htmlspecialchars($row['roomprice']); ?></td>
                            <td><?php echo '<form action="/delete.php" method="post"><input type="submit" value="DELETE"><input type="hidden" name="id" value="' . htmlspecialchars($row['id']) . '"></form>'; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
		<br><h2>Add a new user:</h2>
		<form action="/roomOPinsert.php" method="post">
			<table>
				<tr><td>Guest ID:</td><td><input type="text" id="id" name="id" value="?"></td></tr>
				<tr><td>Room Type:</td><td><input type="text" id="roomtype" name="roomtype" value="?"></td></tr>
				<tr><td>Guest Capacity:</td><td><input type="text" id="guestcapacity" name="guestcapacity" value="?"></td></tr>
				<tr><td>Room Price:</td><td><input type="text" id="roomprice" name="roomprice" value="?"></td></tr>
			</table>
			<input type="submit" value="INSERT">
		</form>
		<br>
		<br><br><br>
	<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = 'gba5094';
$password = 'Gme19delpen';
$host = 'localhost';
$dbname = 'gba5094_431W';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = 'SELECT fname, lname, Numberofbeds, Rate FROM ExtraBed';
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

?>
		<h2>Extra Beds</h2>
            <table border=1 cellspacing=5 cellpadding=5>
                <thead>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Number of extra beds</th>
		       <th>Rate</th>
                        <th>Delete?</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['fname']) ?></td>
                            <td><?php echo htmlspecialchars($row['lname']); ?></td>
                            <td><?php echo htmlspecialchars($row['Numberofbeds']); ?></td>
			   				<td><?php echo htmlspecialchars($row['Rate']); ?></td>
                            <td><?php echo '<form action="/delete.php" method="post"><input type="submit" value="DELETE"><input type="hidden" name="id" value="' . htmlspecialchars($row['fname']) . '"></form>'; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
		<br><h2>Insert a new user:</h2>
		<form action="/insert.php" method="post">
			<table>
				<tr><td>First name:</td><td><input type="text" id="fname" name="fname" value="?"></td></tr>
				<tr><td>Last name:</td><td><input type="text" id="lname" name="lname" value="?"></td></tr>
				<tr><td>Number of extra beds:</td><td><input type="text" id="Numberofbeds" name="Numberofbeds" value="?"></td></tr>
				<tr><td>Rate:</td><td><input type="text" id="Rate" name="Rate" value="?"></td></tr>
			</table>
			<input type="submit" value="INSERT">
		</form>
		<br>
		<br><br><br>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = 'gba5094';
$password = 'Gme19delpen';
$host = 'localhost';
$dbname = 'gba5094_431W';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = 'SELECT fname, lname, Petkind FROM Pets';
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

?>
		<h2>Pets</h2>
            <table border=1 cellspacing=5 cellpadding=5>
                <thead>
                    <tr>
                        <th>First Name </th>
                        <th>Last Name</th>
                        <th>Type of Pet</th>
                        <th>Delete?</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['fname']) ?></td>
                            <td><?php echo htmlspecialchars($row['lname']); ?></td>
                            <td><?php echo htmlspecialchars($row['Petkind']); ?></td>
			   
                            <td><?php echo '<form action="/delete.php" method="post"><input type="submit" value="DELETE"><input type="hidden" name="fname" value="' . htmlspecialchars($row['fname']) . '"></form>'; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
		<br><h2>Insert a new user:</h2>
		<form action="/insert.php" method="post">
			<table>
				<tr><td>First Name:</td><td><input type="text" id="fname" name="fname" value="?"></td></tr>
				<tr><td>Last Name:</td><td><input type="text" id="lname" name="lname" value="?"></td></tr>
				<tr><td>Type of Pet:</td><td><input type="text" id="Petkind" name="Petkind" value="?"></td></tr>

			</table>
			<input type="submit" value="INSERT">
		</form>
		<br>
		<br><br><br>
		
		<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = 'gba5094';
$password = 'Gme19delpen';
$host = 'localhost';
$dbname = 'gba5094_431W';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = 'SELECT fname, lname, date, valetORstandard FROM parking';
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

?>
		<h2>Parking</h2>
            <table border=1 cellspacing=5 cellpadding=5>
                <thead>
                    <tr>
                        <th>First Name </th>
                        <th>Last Name</th>
                        <th>Date</th>
                        <th>Parking Type</th>
                        <th>Delete?</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['fname']) ?></td>
                            <td><?php echo htmlspecialchars($row['lname']); ?></td>
                            <td><?php echo htmlspecialchars($row['date']); ?></td>
			   				<td><?php echo htmlspecialchars($row['valetORstandard']) ?></td>
                            <td><?php echo '<form action="/delete.php" method="post"><input type="submit" value="DELETE"><input type="hidden" name="fname" value="' . htmlspecialchars($row['fname']) . '"></form>'; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
		<br><h2>Insert a new user:</h2>
		<form action="/insert.php" method="post">
			<table>
				<tr><td>First Name:</td><td><input type="text" id="fname" name="fname" value="?"></td></tr>
				<tr><td>Last Name:</td><td><input type="text" id="lname" name="lname" value="?"></td></tr>
				<tr><td>Date:</td><td><input type="text" id="date" name="date" value="?"></td></tr>
				<tr><td>Parking Type:</td><td><input type="text" id="valetORstandard" name="valetORstandard" value="?"></td></tr>
			</table>
			<input type="submit" value="INSERT">
		</form>
		<br>
		<br><br><br>
		
		<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = 'gba5094';
$password = 'Gme19delpen';
$host = 'localhost';
$dbname = 'gba5094_431W';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = 'SELECT fname, lname, Restaurantname FROM restaurant';
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

?>
		<h2>Restaurant</h2>
            <table border=1 cellspacing=5 cellpadding=5>
                <thead>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Restaurant</th>
		       
                        <th>Delete?</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['fname']) ?></td>
                            <td><?php echo htmlspecialchars($row['lname']); ?></td>
                            <td><?php echo htmlspecialchars($row['Restaurantname']); ?></td>
                            <td><?php echo '<form action="/delete.php" method="post"><input type="submit" value="DELETE"><input type="hidden" name="id" value="' . htmlspecialchars($row['fname']) . '"></form>'; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
		<br><h2>Insert a new user:</h2>
		<form action="/insert.php" method="post">
			<table>
				<tr><td>First name:</td><td><input type="text" id="fname" name="fname" value="?"></td></tr>
				<tr><td>Last name:</td><td><input type="text" id="lname" name="lname" value="?"></td></tr>
				<tr><td>Restaurant name:</td><td><input type="text" id="Restaurantname" name="Restaurantname" value="?"></td></tr>

			</table>
			<input type="submit" value="INSERT">
		</form>
		<br>
		<br><br><br>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = 'gba5094';
$password = 'Gme19delpen';
$host = 'localhost';
$dbname = 'gba5094_431W';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = 'SELECT fname, lname, restaurant, allergies, Date, Time FROM foodallergies';
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

?>
		<h2>Food allergy</h2>
            <table border=1 cellspacing=5 cellpadding=5>
                <thead>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Restaurant</th>
		       			<th>Allergy</th>
		       			<th>Date</th>
		       			<th>Time</th>
                        <th>Delete?</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['fname']) ?></td>
                            <td><?php echo htmlspecialchars($row['lname']); ?></td>
                            <td><?php echo htmlspecialchars($row['restaurant']); ?></td>
                            <td><?php echo htmlspecialchars($row['allergies']); ?></td>
                            <td><?php echo htmlspecialchars($row['Date']); ?></td>
                            <td><?php echo htmlspecialchars($row['Time']); ?></td>
                            <td><?php echo '<form action="/delete.php" method="post"><input type="submit" value="DELETE"><input type="hidden" name="id" value="' . htmlspecialchars($row['fname']) . '"></form>'; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
		<br><h2>Insert a new user:</h2>
		<form action="/insert.php" method="post">
			<table>
				<tr><td>First name:</td><td><input type="text" id="fname" name="fname" value="?"></td></tr>
				<tr><td>Last name:</td><td><input type="text" id="lname" name="lname" value="?"></td></tr>
				<tr><td>Restaurant name:</td><td><input type="text" id="restaurant" name="restaurant" value="?"></td></tr>
				<tr><td>Allergy?:</td><td><input type="text" id="allergies" name="allergies" value="?"></td></tr>
				<tr><td>Date:</td><td><input type="text" id="Date" name="Date" value="?"></td></tr>
				<tr><td>Time:</td><td><input type="text" id="Time" name="Time" value="?"></td></tr>

			</table>
			<input type="submit" value="INSERT">
		</form>
		<br>
		<br><br><br>

    </body>
</div>
</html>