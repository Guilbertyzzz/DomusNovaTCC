<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Create User</title></head>
<body>
<h2>Create User</h2>
<form method="POST" action="">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    <button type="submit">Save</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);

    $conn->query("INSERT INTO users (name, email) VALUES ('$name', '$email')");
    header("Location: index.php");
    exit;
}
?>
</body>
</html>
