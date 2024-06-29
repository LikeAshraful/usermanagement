<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add User</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Add User</h1>
    <form class="form" action="../index.php" method="POST">
        <input type="hidden" name="action" value="create">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Add User</button>
    </form>
    <a href="../index.php">Back to List</a>
</body>
</html>
