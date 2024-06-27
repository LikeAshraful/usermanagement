<?php
include_once __DIR__ . '/../models/User.php';

class UserController {
    private $db;
    private $user;

    public function __construct($db) {
        $this->db   = $db;
        $this->user = new User($db);
    }

    public function createUser($username, $email, $password) {
        $this->user->username = $username;
        $this->user->email    = $email;
        $this->user->password = $password;

        if ($this->user->create()) {
            return "User created successfully.";
        } else {
            return "Failed to create user.";
        }

    }

    public function getUsers() {
        $stmt  = $this->user->read();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    public function updateUser($id, $username, $email, $password) {
        $this->user->id       = $id;
        $this->user->username = $username;
        $this->user->email    = $email;
        $this->user->password = $password;

        if ($this->user->update()) {
            return "User updated successfully.";
        } else {
            return "Failed to update user.";
        }

    }

    public function deleteUser($id) {
        $this->user->id = $id;

        if ($this->user->delete()) {
            return "User deleted successfully.";
        } else {
            return "Failed to delete user.";
        }

    }

}

?>
