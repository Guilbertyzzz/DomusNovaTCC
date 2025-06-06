<?php
include 'db.php';
$id = (int)$_GET['id'];

$userResult = $conn->query("SELECT * FROM users WHERE id = $id");
$user = $userResult->fetch_assoc();

if (!$user) {
    echo "User not found!";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);

    $conn->query("UPDATE users SET name='$name', email='$email' WHERE id=$id");
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><title>Edit User</title></head>
<body>
<h2>Edit User</h2>
<form method="POST">
    Name: <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>" required><br><br>
    Email: <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required><br><br>
    <button type="submit">Update</button>
</form>
</body>
</html>
