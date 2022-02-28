<?php

class Signup {
  private $name;
  private $email;
  private $password;
  private $user_type;
  private $connection;
  private $sql;
  private $query;
  private $user;
  private $sqlCheck;
  private $queryCheck;
  private $userCheck;
  private $userError;

  public function __construct($name, $email, $password){
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  public function checkEmailDatabse(){
    $this->connection = new DBConnection();
    //$this->userError = "";
    $this->sqlCheck = 'SELECT email FROM users WHERE email = :email';
    $this->queryCheck = $this->connection->getConnection()->prepare($this->sqlCheck);
    $this->queryCheck->bindParam(':email', $this->email);
    $this->queryCheck->execute();
    $this->user = $this->queryCheck->fetch();

    if($this->user['email'] == $this->email){
      $this->userError = "User already exists";
      header("Location: ../signup.php?submit=exists");
      return true;
    }
    return false;
  }

  public function doSignup(){

    $this->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $this->user_type = 'normal';

    $this->connection = new DBConnection();

      $this->sql = 'INSERT INTO users (name, email, password, user_type) VALUES (:name, :email, :password, :user_type)';
      $this->query = $this->connection->getConnection()->prepare($this->sql);
      $this->query->bindParam('name', $this->name);
      $this->query->bindParam('email', $this->email);
      $this->query->bindParam('password', $this->password);
      $this->query->bindParam('user_type', $this->user_type);

      if($this->query->execute()) {
          header("Location: ../signup.php?submit=success");
      } else {
          header("Location: ../signup.php?submit=failed");
      }




  }
}
