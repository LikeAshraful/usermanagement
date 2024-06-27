// login_handler.php
<?php
session_start();
include_once 'database.php';

$database = new Database();
$db = $database->getConnection();
include_once 'models/User.php';

$user = new User($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $db->prepare("SELECT id, password FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            header('Location: index.php');
            exit();
        } else {
            echo "Invalid credentials.";
        }
    } else {
        echo "Invalid credentials.";
    }
}
?>


