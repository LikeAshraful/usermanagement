<?php

session_start();

include_once 'database.php';
include_once 'controllers/UserController.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$database       = new Database();
$db             = $database->getConnection();
$userController = new UserController($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];

    if ($action == 'create') {
        $username = $_POST['username'];
        $email    = $_POST['email'];
        $password = $_POST['password'];
        $message  = $userController->createUser($username, $email, $password);
    } elseif ($action == 'update') {
        $id       = $_POST['id'];
        $username = $_POST['username'];
        $email    = $_POST['email'];
        $password = $_POST['password'];
        $message  = $userController->updateUser($id, $username, $email, $password);
    } elseif ($action == 'delete') {
        $id      = $_POST['id'];
        $message = $userController->deleteUser($id);
    }

}

$users = $userController->getUsers();

include 'views/list_users.php';

?>
