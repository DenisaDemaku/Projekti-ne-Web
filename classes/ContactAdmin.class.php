<?php

class ContactAdmin {
  private $connection;
  private $query;
  private $contacts;
  private $contact;

public function fetchContacts(){
  $this->connection = new DBConnection();
  $this->query = $this->connection->getConnection()->query('SELECT * FROM contact');
  $this->contacts = $this->query->fetchAll();
}

public function echoContacts(){

  foreach($this->contacts as $contact) {
    echo "
    <hr>
    <p>Name: {$contact['name']}</p>
    <p>Email: {$contact['email']} </p>
    <p>City: {$contact['city']} </p>
    <p>Gender: {$contact['gender']} </p>
    <p>Text: {$contact['entertext']} </p>
    ";
}
}
}
