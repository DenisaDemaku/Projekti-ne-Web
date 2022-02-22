<?php

class Home {
  private $connection;
  private $result;
  private $row;
  private $query;

  public function SectionOneTitle() {
    $this->connection = new DBConnection();
    $this->query = "SELECT title FROM section1";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["title"]);
        }
      }
  }

  public function SectionOneSmallTitle() {
    $this->connection = new DBConnection();
    $this->query = "SELECT smalltitle FROM section1";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["smalltitle"]);
        }
      }
  }
  public function SectionOneButtonOne() {
    $this->connection = new DBConnection();
    $this->query = "SELECT button1 FROM section1";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["button1"]);
        }
      }
  }
  public function SectionOneButtonTwo() {
    $this->connection = new DBConnection();
    $this->query = "SELECT button2 FROM section1";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["button2"]);
        }
      }
  }


  public function OurServicesTitle() {
    $this->connection = new DBConnection();
    $this->query = "SELECT ourservicesmaintitle FROM ourservices";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["ourservicesmaintitle"]);
        }
      }
  }

  public function OurServicesTitleOne() {
    $this->connection = new DBConnection();
    $this->query = "SELECT ourservicestitleone FROM ourservices";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["ourservicestitleone"]);
        }
      }
  }
  public function OurServicesDescOne() {
    $this->connection = new DBConnection();
    $this->query = "SELECT ourservicesdescone FROM ourservices";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["ourservicesdescone"]);
        }
      }
  }
  public function OurServicesTitleTwo() {
    $this->connection = new DBConnection();
    $this->query = "SELECT ourservicestitletwo FROM ourservices";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["ourservicestitletwo"]);
        }
      }
  }
  public function OurServicesDescTwo() {
    $this->connection = new DBConnection();
    $this->query = "SELECT ourservicesdesctwo FROM ourservices";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["ourservicesdesctwo"]);
        }
      }
  }
  public function OurServicesTitleThree() {
    $this->connection = new DBConnection();
    $this->query = "SELECT ourservicestitlethree FROM ourservices";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["ourservicestitlethree"]);
        }
      }
  }
  public function OurServicesDescThree() {
    $this->connection = new DBConnection();
    $this->query = "SELECT ourservicesdescthree FROM ourservices";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["ourservicesdescthree"]);
        }
      }
  }
  public function SectionTwoTitle() {
    $this->connection = new DBConnection();
    $this->query = "SELECT title FROM section2";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["title"]);
        }
      }
  }
  public function SectionTwoDesc() {
    $this->connection = new DBConnection();
    $this->query = "SELECT description FROM section2";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["description"]);
        }
      }
  }
  public function OurStaffTitle() {
    $this->connection = new DBConnection();
    $this->query = "SELECT title FROM ourstaff";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["title"]);
        }
      }
  }
  public function OurStaff1Name() {
    $this->connection = new DBConnection();
    $this->query = "SELECT staff1name FROM ourstaff";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["staff1name"]);
        }
      }
  }
  public function OurStaff1position() {
    $this->connection = new DBConnection();
    $this->query = "SELECT staff1position FROM ourstaff";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["staff1position"]);
        }
      }
  }
  public function OurStaff2Name() {
    $this->connection = new DBConnection();
    $this->query = "SELECT staff2name FROM ourstaff";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["staff2name"]);
        }
      }
  }
  public function OurStaff2position() {
    $this->connection = new DBConnection();
    $this->query = "SELECT staff2position FROM ourstaff";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["staff2position"]);
        }
      }
  }
  public function OurStaff3Name() {
    $this->connection = new DBConnection();
    $this->query = "SELECT staff3name FROM ourstaff";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["staff3name"]);
        }
      }
  }
  public function OurStaff3position() {
    $this->connection = new DBConnection();
    $this->query = "SELECT staff3position FROM ourstaff";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["staff3position"]);
        }
      }
  }
  public function SectionThreeTitle() {
    $this->connection = new DBConnection();
    $this->query = "SELECT title FROM section3";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["title"]);
        }
      }
  }
  public function SectionThreeDesc() {
    $this->connection = new DBConnection();
    $this->query = "SELECT description FROM section3";

    if ($this->result = $this->connection->getConnection()->query($this->query)) {
        while ($this->row = $this->result->fetch(PDO::FETCH_ASSOC)) {
            echo ($this->row["description"]);
        }
      }
  }

}
