<?php
session_start();
if ($_SESSION['user_role'] !== 'admin') {
    header("Location: login.php");
    exit;
}
$name = $_SESSION['user_name'];
?>
<!DOCTYPE html>
<html>
<head><title>Admin Dashboard</title></head>
<body>
    <h2>Welcome, <?php echo $name; ?> (Admin)</h2>
    <a href="view_users.php">Manage Users</a><br>
    <a href="logout.php">Logout</a>
</body>
</html>
