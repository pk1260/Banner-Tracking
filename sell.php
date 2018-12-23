<?
// Create connection
// $user = "c1702pascal";
// $pwd = "12345";
// $db = "c1702BannerTracking";

$user = "root";
$pwd = "";
$db = "BannerTracking";

$conn = new mysqli('localhost', $user, $pwd, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE Statistics SET value=value+1 WHERE name='sell'";

$conn->query($sql);

header('Location: services.php');
?>
