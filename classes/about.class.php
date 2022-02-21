<?php

class About {
  private $connection;
  private $result;
  private $row;
  private $query;

  public function AboutUsTitle() {
    $this->connection = new DBConnection();
    $this->query = "SELECT title FROM aboutus";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["title"]);
        }
      }
  }
  public function AboutUsDesc1() {
    $this->connection = new DBConnection();
    $this->query = "SELECT desc1 FROM aboutus";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["desc1"]);
        }
      }
  }
  public function AboutUsDesc2() {
    $this->connection = new DBConnection();
    $this->query = "SELECT desc2 FROM aboutus";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["desc2"]);
        }
      }
  }
  public function AboutUsDesc3() {
    $this->connection = new DBConnection();
    $this->query = "SELECT desc3 FROM aboutus";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["desc3"]);
        }
      }
  }
  public function AboutUsDesc4() {
    $this->connection = new DBConnection();
    $this->query = "SELECT desc4 FROM aboutus";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["desc4"]);
        }
      }
  }

}
