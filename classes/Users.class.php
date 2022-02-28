<?php

class Users {
  private $connection;
  private $query;
  private $users;
  public $user;

public function fetchUsers(){
  $this->connection = new DBConnection();
  $this->query = $this->connection->getConnection()->query('SELECT * FROM users');
  $this->users = $this->query->fetchAll();
}

public function echoUsers(){

  foreach($this->users as $user) {
    $id = $user['id'];
    echo "
    <hr>
    <p>Name: {$user['name']}</p>
    <p>Email: {$user['email']} </p>
    <a href=admin-edit_user.php?id={$id}>Edit</a>
    <p></p>
    <a href=admin-delete_user.php?id={$id}>Delete</a>";
}
}

public function addUsers(){
  $this->connection = new DBConnection();

  if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
      $user_type = $_POST['user_type'];

      $sql = 'INSERT INTO users (name, email, password, user_type) VALUES (:name, :email, :password, :user_type)';
      $query = $this->connection->getConnection()->prepare($sql);
      $query->bindParam('name', $name);
      $query->bindParam('email', $email);
      $query->bindParam('password', $password);
      $query->bindParam('user_type', $user_type);

      $query->execute();
      header("Location: admin-users.php");
      }
}

public function fetchUserID(){
  if(isset($_GET['id'])){
      $id = $_GET['id'];
  }

  $this->connection = new DBConnection();

  $sql = 'SELECT * FROM users WHERE id = :id';
  $query = $this->connection->getConnection()->prepare($sql);
  $query->execute(['id' => $id]);

  $this->user = $query->fetch();
}

public function editUser(){
  $this->connection = new DBConnection();
  if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $user_type = $_POST['user_type'];
        $id = $_GET['id'];

        $sql = 'UPDATE users SET name = :name, email = :email, user_type = :user_type WHERE id = :id ';
        $query = $this->connection->getConnection()->prepare($sql);
        $query->bindParam('name', $name);
        $query->bindParam('email', $email);
        $query->bindParam('user_type', $user_type);
        $query->bindParam('id', $id);

        $query->execute();

        header("Location: admin-users.php");
    }
}


}
