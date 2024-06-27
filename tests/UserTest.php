<?php
use PHPUnit\Framework\TestCase;
include_once '../src/models/User.php';

class UserTest extends TestCase {
    private $db;
    private $user;

    protected function setUp(): void {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->user = new User($this->db);
    }

    public function testCreateUser() {
        $this->user->username = "testuser";
        $this->user->email = "test@example.com";
        $this->user->password = "password";

        $this->assertTrue($this->user->create());
    }

    public function testReadUsers() {
        $stmt = $this->user->read();
        $this->assertGreaterThan(0, $stmt->rowCount());
    }

    public function testUpdateUser() {
        $this->user->id = 1;
        $this->user->username = "updateduser";
        $this->user->email = "updated@example.com";
        $this->user->password = "newpassword";

        $this->assertTrue($this->user->update());
    }

    public function testDeleteUser() {
        $this->user->id = 1;
        $this->assertTrue($this->user->delete());
    }
}
?>
