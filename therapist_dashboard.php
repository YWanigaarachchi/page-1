<?php
session_start();
if ($_SESSION['user_role'] !== 'therapist') {
    header("Location: login.php");
    exit;
}
$name = $_SESSION['user_name'];
?>
<!DOCTYPE html>
<html>
<head><title>Therapist Dashboard</title></head>
<body>
    <h2>Welcome, <?php echo $name; ?> (Therapist)</h2>
    <p>View assigned appointments or inquiries (feature coming soon)</p>
    <a href="logout.php">Logout</a>
</body>
</html>
