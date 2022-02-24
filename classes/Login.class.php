<?php

class Login {
  private $email;
  private $password;
  private $message;
  private $user_type;
  private $test;
  private $connection;
  private $sql;
  private $query;
  private $user;

  public function __construct($email, $password){
    $this->email = $email;
    $this->password = $password;
  }

  public function doLogin(){

        $this->message = '';
        $this->user_type = '';

        $this->connection = new DBConnection();
        $this->sql = 'SELECT id,name,email,password,user_type FROM users WHERE email = :email';
        $this->query = $this->connection->getConnection()->prepare($this->sql);
        $this->query->bindParam(':email', $this->email);
        $this->query->execute();

        $this->user = $this->query->fetch();

        if($this->user != null && password_verify($this->password, $this->user['password']) ){

            $_SESSION['user_id'] = $this->user['id'];
            $_SESSION['name'] = $this->user['name'];
            $_SESSION['user_type'] = $this->user['user_type'];

            header("Location: ../index.php");

        } else {
            header("Location: ../login.php?submit=error");
        }

  }
}
