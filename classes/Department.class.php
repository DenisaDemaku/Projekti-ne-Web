<?php

class Department {

  private $title;
  private $entertext;
  private $file;
  private $fileNameNew;
  private $telephone;
  private $errorCount;

  public function __construct($title, $entertext, $file, $telephone){
    $this->title = $title;
    $this->entertext = $entertext;
    $this->file = $file;
    $this->telephone = $telephone;
  }

public function uploadImage(){

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png');

  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize < 1000000) {
        $this->fileNameNew = uniqid('', true). "." .$fileActualExt;
        $fileDestination = '../img/blog/'.$this->fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
      } else {
          header("Location: ../department.php?file=big");
        //echo "Your file is too big!";
      }
    } else {
      header("Location: ../department.php?file=error");
      //echo "There was an error uploading your file!";
    }
  } else {
    header("Location: ../department.php?file=error");
  }
}

public function newDepartmentPost() {
  $this->connection = new DBConnection();

    $this->sql = 'INSERT INTO department (title, telephone, entertext, imageurl) VALUES (:title, :telephone, :entertext, :imageurl)';
    $this->query = $this->connection->getConnection()->prepare($this->sql);
    $this->query->bindParam('title', $this->title);
    $this->query->bindParam('telephone', $this->telephone);
    $this->query->bindParam('entertext', $this->entertext);
    $this->query->bindParam('imageurl', $this->fileNameNew);

    if($this->query->execute()) {
        header("Location: ../department.php?submit=success");
    } else {
        header("Location: ../department.php?submit=failed");
    }
}

public function DepartmentValidation(){
  if (empty($_POST['title'])) {
    header("Location: ../department.php?title=empty");
    $this->errorCount++;
  }

  if (empty($_POST['entertext'])) {
    header("Location: ../department.php?entertext=empty");
    $this->errorCount++;
  }

  if ($this->errorCount > 0){
  return true;
  }
  else return false;
}

}
