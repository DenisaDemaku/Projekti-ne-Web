function validateSignup() {
    var name = document.forms["signupForm"]["name"].value;
    var nameValidate = /^[a-zA-Z]{2,}$/;
    if (!name.match(nameValidate)){
          alert("Name: Only letters allowed. Must be more than 2 characters.");
          return false;
    }

    var email = document.forms["signupForm"]["email"].value;
    var emailValidate = /^.+@.+..+$/;
    if (!email.match(emailValidate)) {
      alert("Please write a valid email.");
      return false;
    }

    var password = document.forms["signupForm"]["password"].value;
    var passValidate = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    if (!password.match(passValidate)) {
      alert("Password must have 6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter.");
      return false;
    }

    var confirmpassword = document.forms["signupForm"]["confirmpassword"].value;
    if (!confirmpassword.match(password)) {
      alert("Please confirm your password.");
      return false;
    }

    return true;
  }
