<?php
$host = "localhost";
$host = "ctf_mysql";
$db_username = "root";
$db_password = "password";
$db_name = "database";
$mysqli = mysqli_connect($host, $db_username, $db_password, $db_name); 
if ($mysqli->connect_errno) {
    // The connection failed. What do you want to do?
    // You could contact yourself (email?), log the error, show a nice page, etc.
    // You do not want to reveal sensitive information

    // Let's try this:
    echo "Sorry, this website is experiencing problems.";

    // Something you should not do on a public site, but this example will show you
    // anyways, is print out MySQL error related information -- you might log this
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";

    // You might want to show them something nice, but we will simply exit
    exit;
}

$user=$_POST["UserId"];
$user=addslashes(htmlspecialchars($user));
$pass=$_POST["Password"];
$sql = "select * from q0users where username='$user' and password='$pass';";
error_log("QUERY:" . $sql);

if (!$result = $mysqli->query($sql)) {
    // Oh no! The query failed.
    echo "Sorry, the website is experiencing problems.";

    // Again, do not do this on a public site, but we'll show you how
    // to get the error information
    echo "Error: Our query failed to execute and here is why: \n";
    echo "Query: " . $sql . "\n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    exit;
}

// Phew, we made it. We know our MySQL connection and query
// succeeded, but do we have a result?
if ($result->num_rows === 0) {
    // Oh, no rows! Sometimes that's expected and okay, sometimes
    // it is not. You decide. In this case, maybe actor_id was too
    // large?
    echo "Executing statementL " . $sql;
	echo "Incorrect username: " . $user . ' Password:' . $pass . "\n";
    exit;
}

// Now, we know only one result will exist in this example so let's
// fetch it into an associated array where the array's keys are the
// table's column names
$row = $result->fetch_assoc();
$user = $row["username"];
echo "You are logged in as <span style='color:red;'>".$user."</span> </strong><br><br>";

if ($user == "admin") {
    echo "<table border='1'><thead><td>username</td><Td>password</td></thead>";
    $sql = "select * from q0users;";
    $result = $mysqli->query($sql);
    while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$row["username"]."</td><td>".$row["password"]."</td></tr>";
    }
    echo "</table>";
} else if ($user == "hint") {
    $hintUrl = "https://drive.google.com/drive/folders/1gdZHpZx-qq2CoSOHUiCcwhPefg_OlVWJ?usp=sharing";
    echo "Hints:<br><br>";
    echo "1. Source code: <a href='".$hintUrl."'>".$hintUrl."</a><br><br><br>";
    echo "2. Password field is vulnerable <br><br><br>";
    echo "3. How table is created (password is omitted): <br>";
    echo "CREATE TABLE IF NOT EXISTS `q0users` (
  		`username` varchar(30) NOT NULL,
  		`password` varchar(40) DEFAULT NULL,
  		PRIMARY KEY (`username`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;<br>";
    echo "INSERT INTO `q0users` VALUES ('admin', 'xxx'),('user', 'xxx'),('hint', 'xxx'),('flag', 'xxx');<br><br><br>";


} 

echo "To get a flag, login as <span styl='color:red;'>admin<span>";


?>
