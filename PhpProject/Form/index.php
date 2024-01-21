<?php
class User {
   private $role = "Admin";
   private $username;
   private $password;

   public function register($username, $password) {
      $this->username = $username;
      $this->password = $password;
      echo "Berhasil Daftar\n";
   }

   protected function getRole() {
      return $this->role;
   }

   public function notification() {
      echo "User created by User\n";
   }
}

class Admin extends User {
   public function createdUser($username, $password) {
      parent::register($username, $password);
   }

   public function notification() {
      echo "User created by " . $this->getRole() . "\n";
   }
}

$user1 = new User();
$username1 = "user1"; // Ganti dengan nilai yang sesuai
$password1 = "password1"; // Ganti dengan nilai yang sesuai
$user1->register($username1, $password1);
$user1->notification();

$user2 = new Admin();
$username2 = "user2"; // Ganti dengan nilai yang sesuai
$password2 = "password2"; // Ganti dengan nilai yang sesuai
$user2->register($username2, $password2);
$user2->notification();
?>
