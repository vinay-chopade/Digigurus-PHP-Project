function first() {
  var fname = document.myform.fname;
  var letters = /^[A-Za-z]+$/;
  if (fname.value.match(letters)) {
    document.myform.lname.focus();
    return true;
  } else {
    alert("Firstname must have alphabet characters only");
    // document.myform.fname.focus();
    return false;
  }
}

function last() {
  var lname = document.myform.lname;
  var letters = /^[A-Za-z]+$/;
  if (lname.value.match(letters)) {
    document.myform.email.focus();
    return true;
  } else {
    alert("Lastname must have alphabet characters only");
    // document.myform.email.focus();
    return false;
  }
}

function ValidateEmail(inputText) {
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (inputText.value.match(mailformat)) {
    alert("Valid email address!");
    document.myform.comment.focus();
    return true;
  } else {
    alert("You have entered an invalid email address!");
    // document.myform.email.focus();
    return false;
  }
}


// register

  function firstr() {
   
    var firstName = document.myregis.fnm;;
    var letters = /^[A-Za-z\s\-']+$/;
    if (firstName.value.match(letters)) {
      document.getElementsByName("lnm").focus();
      return true;
    } else if (firstName.value === "") {
      alert("Please enter your first name");
      firstName.focus();
    return false;
  } else {
    alert("First name must have alphabetical characters, spaces, hyphens, or apostrophes only");
    firstName.focus();
    return false;
  }
}


function lastr() {
  var lnamer = document.myregis.lnm;
  var letters = /^[A-Za-z]+$/;
  if (lnamer.value.match(letters)) {
    // document.myregis.emailreg.focus();
    // return true;
  } else {
    alert("Lastname must have alphabet characters only");
    // document.myregis.lnm.focus();
    // return false;
  }
}

function ValidateEmailr(inputText) {
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (inputText.value.match(mailformat)) {
    alert("Valid email address!");
    return true;
  } else {
    alert("You have entered an invalid email address!");
    return false;
  }
}

function validateUsername(username) {
  // Username must contain only alphanumeric characters and underscores
  const regex = /^[a-zA-Z0-9_]+$/;

  if (!username || !regex.test(username)) {
    // If the username is empty or doesn't match the regex, it is invalid
    return false;
  }

  // If the username passes all checks, it is valid
  return true;
}