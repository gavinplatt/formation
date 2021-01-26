<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    $db = "Error connecting to DB: " . $conn->connect_error;
} else {
    $db = "DB is connected!";
}
?>

<h1 class="mb-4">Valet is installed!</h1>
<h2>
    You are running PHP <?php echo phpversion()?><br/>
    <?php echo $db?>
</h2>
