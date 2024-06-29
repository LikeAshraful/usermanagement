<?php
use PHPUnit\Framework\TestCase;

include_once __DIR__ . '/../models/User.php';
include_once __DIR__ . '/../database.php';

class UserTest extends TestCase {
    private $db;
    private $user;

    protected function setUp(): void {
        $database   = new Database();
        $this->db   = $database->getConnection();
        $this->user = new User($this->db);
    }

    public function testCreateUser() {
        $this->user->username = "admin";
        $this->user->email    = "admin@example.com";
        $this->user->password = md5("12345678"); // Ensure to hash the password

        $this->assertTrue($this->user->create());
    }

    public function testReadUsers() {
        $stmt = $this->user->read();
        $this->assertGreaterThan(0, $stmt->rowCount());
    }

    public function testUpdateUser() {
        $this->user->id       = 1;
        $this->user->username = "updateduser";
        $this->user->email    = "updated@example.com";
        $this->user->password = md5("newpassword"); // Ensure to hash the password

        $this->assertTrue($this->user->update());
    }

    public function testDeleteUser() {
        $this->user->id = 1;
        $this->assertTrue($this->user->delete());
    }
}
?>
