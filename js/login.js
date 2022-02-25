function validateLogin() {
    var email = document.forms["loginForm"]["email"].value;
    var emailValidate = /^.+@.+..+$/;
    if (!email.match(emailValidate)) {
      alert("E-mail must be filled out.");
      return false;
    }

    var password = document.forms["loginForm"]["password"].value;
    var passValidate = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    if (!password.match(passValidate)) {
      alert("Password must have 6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter.");
      return false;
    }

    return true;
  }

