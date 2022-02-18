<?php

class Contact {
  private $name;
  private $email;
  private $city;
  private $gender;
  private $entertext;

  private $connection;
  private $sql;
  private $query;


  public function __construct($name, $email, $city,  $gender, $entertext){
    $this->name = $name;
    $this->email = $email;
    $this->city = $city;
    $this->gender = $gender;
    $this->entertext = $entertext;
  }

  public function doContact(){

    $this->connection = new DBConnection();

      $this->sql = 'INSERT INTO contact (name, email, city, gender, entertext) VALUES (:name, :email, :city, :gender, :entertext)';
      $this->query = $this->connection->getConnection()->prepare($this->sql);
      $this->query->bindParam('name', $this->name);
      $this->query->bindParam('email', $this->email);
      $this->query->bindParam('city', $this->city);
      $this->query->bindParam('gender', $this->gender);
      $this->query->bindParam('entertext', $this->entertext);

      if($this->query->execute()) {
          header("Location: ../contact.php?submit=success");
      } else {
          hheader("Location: ../contact.php?submit=failed");
      }

  }
}
