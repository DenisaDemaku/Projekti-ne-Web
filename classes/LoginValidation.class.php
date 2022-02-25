<?php

class LoginValidation {
  private $emailErr;
  private $passwordErr;
  private $showError;
  private $emailCheck;
  private $passwordCheck;
  private $errorCount;

  public function doLoginValidation() {
    $this->emailError = "";
    $this->passwordErr = "";
    $this->emailCheck = test_input($_POST["email"]);
    $this->passwordCheck = test_input($_POST["password"]);

    if (empty($_POST['email'])) {
      $this->emailErr = "Email is required<br>";
      header("Location: ../login.php?email=empty");
      $this->errorCount++;
    }
    else if (!preg_match("/^.+@.+..+$/",$this->emailCheck)) {
      $this->emailErr = "Please write a valid email.<br>";
      header("Location: ../login.php?email=invalid");
      $this->errorCount++;
    }

    if (empty($_POST['password'])) {
      $this->passwordErr = "Password is required<br>";
      header("Location: ../login.php?password=empty");
      $this->errorCount++;
    }
    else if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/",$this->passwordCheck)) {
      $this->passwordErr = "Password must have 6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter.<br>";
      header("Location: ../login.php?password=invalid");
      $this->errorCount++;
    }

    $this->showError =  $this->emailErr . $this->passwordErr;

    if ($this->errorCount > 0){
    return true;
    }
    else return false;

}
}
