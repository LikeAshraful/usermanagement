<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index.php" method="POST">
        <input type="hidden" name="action" value="update">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?= $user['username'] ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= $user['email'] ?>" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Update User</button>
    </form>
</body>
</html>
