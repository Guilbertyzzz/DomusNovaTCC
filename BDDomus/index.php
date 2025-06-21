<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>
<h2>Users</h2>
<a href="create.php">Add New User</a>
<table border="1" cellpadding="10">
    <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Password</th><th>Actions</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM users");
    while($row = $result->fetch_assoc()):
    ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= htmlspecialchars($row['name']) ?></td>
        <td><?= htmlspecialchars($row['email']) ?></td>
        <td><?= htmlspecialchars($row['password']) ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
            <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
</body>
</html>
