<?php

class SignupValidation {
  private $nameErr;
  private $emailErr;
  private $passwordErr;
  private $confirmPasswordErr;
  private $showError;
  private $nameCheck;
  private $emailCheck;
  private $passwordCheck;
  private $errorCount;

  public function doSignupValidation() {
    $this->nameErr = "";
    $this->emailError = "";
    $this->passwordErr = "";
    $this->confirmPasswordErr ="";
    $this->nameCheck = test_input($_POST["name"]);
    $this->emailCheck = test_input($_POST["email"]);
    $this->passwordCheck = test_input($_POST["password"]);

    if (empty($_POST['name'])) {
        $this->nameErr = "Name is required<br>";
        header("Location: ../signup.php?name=empty");
        $this->errorCount++;
    }
    else if (!preg_match("/^[a-zA-Z]{2,}$/",$this->nameCheck)) {
      $this->nameErr = "Name: Only letters allowed. Must be more than 2 characters.<br>";
      header("Location: ../signup.php?name=invalid");
      $this->errorCount++;
    }

    if (empty($_POST['email'])) {
      $this->emailErr = "Email is required<br>";
      header("Location: ../signup.php?email=empty");
      $this->errorCount++;
    }
    else if (!preg_match("/^.+@.+..+$/",$this->emailCheck)) {
      $this->emailErr = "Please write a valid email.<br>";
      header("Location: ../signup.php?email=invalid");
      $this->errorCount++;
    }

    if (empty($_POST['password'])) {
      $this->passwordErr = "Password is required<br>";
      header("Location: ../signup.php?password=empty");
      $this->errorCount++;
    }
    else if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/",$this->passwordCheck)) {
      $this->passwordErr = "Password must have 6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter.<br>";
     header("Location: ../signup.php?password=invalid");
      $this->errorCount++;
    }

    if (empty($_POST['confirmpassword'])) {
      $this->confirmPasswordErr = "Confirm password is required<br>";
 header("Location: ../signup.php?confirmpass=empty");
      $this->errorCount++;
    }
    else if ($_POST['password'] != $_POST['confirmpassword']) {
      $this->confirmPasswordErr = "Passwords do not match.<br>";
     header("Location: ../signup.php?confirmpass=invalid");
      $this->errorCount++;
    }

    $this->showError = $this->nameErr . $this->emailErr . $this->passwordErr . $this->confirmPasswordErr;

    if ($this->errorCount > 0){
    return true;
    }
    else return false;

}
}
