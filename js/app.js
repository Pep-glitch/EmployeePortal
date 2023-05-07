 //For Select Options
    document.getElementById('deptNameID').addEventListener("change", function ()
    {
    document.getElementById('deptID').selectedIndex = document.getElementById('deptNameID').selectedIndex;
    }, false);
 //IDs for all input fields
 
 const  employeeID = document.getElementById('employeeID').value;
 const  addressID = document.getElementById('addressID').value;
 const  contact = document.getElementById('contactID').value;
 
 //IDs for all errors
 
 const  employeeIDError = document.getElementById('employeeError');
 const  addressError = document.getElementById('addressError');
 const  contactError = document.getElementById('contactError');

function hide()
{
    var x = document.getElementById("project-btn");
    var y = document.getElementById("section1");
    if(y.display === "none")
    {
      y.style.display ="block"; 
      //console.log("ALL is WELL"); 
    }
    else
    {
        y.style.display = "none";
    }
}
function formValidation()
{
  let isStringValid = validateStrings();
  return isStringValid;
}
function validateFirstname()
{
    const firstName = document.getElementById('firstnameID').value;
    const firstNameError = document.getElementById('firstnameError');
    var validString = /^[a-zA-Z]+$/;
    if(!firstName.match(validString))
    {
      firstNameError.textContent ="Only Alphabet Allowed";
      return false;
    }
    else
    {
     firstNameError.textContent ="";
     return true; 
    } 
}
function validateLastname()
{
  const  lastName = document.getElementById('lastnameID').value;
  const  lastNameError = document.getElementById('lastnameError');
  var validString = /^[a-zA-Z]+$/;
  if(!lastName.match(validString))
    {
      lastNameError.textContent ="Only Alphabet Allowed";
      return false;
    }
    else
    {
     lastNameError.textContent ="";
     return true; 
    }
}
function validateStatus()
{
  const maritalStatus = document.getElementById('statusID').value;
  const statusError = document.getElementById('statusError');
  var validString = /^[a-zA-Z]+$/;
  if(!maritalStatus.match(validString))
    {
      statusError.textContent ="Only Alphabet Allowed";
      return false;
    }
    else
    {
     statusError.textContent ="";
     return true; 
    }
}
function validateSchool()
{
  const school =document.getElementById('schoolID').value;
  const schoolError =document.getElementById('schoolError');
  var validString = /^[a-zA-Z ]+$/;
  if(!school.match(validString))
    {
      schoolError.textContent ="Only Alphabet Allowed";
      return false;
    }
    else
    {
     schoolError.textContent ="";
     return true; 
    }
}
function validateJob()
{
  const  jobTitle = document.getElementById('jobID').value;
  const  jobTitleError = document.getElementById('jobError');
  var validString = /^[a-zA-Z ]+$/;
  if(!jobTitle.match(validString))
    {
      jobTitleError.textContent ="Only Alphabet Allowed";
      return false;
    }
    else
    {
     jobTitleError.textContent ="";
     return true; 
    }
}
function validateRole()
{
  const  role = document.getElementById('roleID').value;
  const  roleError = document.getElementById('roleError');
  var validString = /^[a-zA-Z ]+$/;
  if(!role.match(validString))
  {
    roleError.textContent ="Only Alphabet Allowed";
    return false;
  }
  else
  {
   roleError.textContent ="";
   return true; 
  }
}
function validateMajor()
{
  const  major = document.getElementById('majorID').value;
  const  majorError = document.getElementById('majorError');
  var validString = /^[a-zA-Z ]+$/;
  if(!major.match(validString))
  {
    majorError.textContent ="Only Alphabet Allowed";
    return false;
  }
  else
  {
   majorError.textContent ="";
   return true; 
  }
}
function validateEducation()
{
  const  education = document.getElementById('educationID').value;
  const  educationError = document.getElementById('educationError');
  var validString = /^[a-zA-Z ]+$/;
  if(!education.match(validString))
    {
      educationError.textContent ="Only Alphabet Allowed";
      return false;
    }
    else
    {
     educationError.textContent ="";
     return true; 
    }
}
function validateBirth()
{
  const  placeOfBirth = document.getElementById('birthID').value;
  const  placeOfBirthError = document.getElementById('birthError');
  var validString = /^[a-zA-Z ]+$/;
  if(!placeOfBirth.match(validString))
  {
    placeOfBirthError.textContent ="Only Alphabet Allowed";
    return false;
  }
  else
  {
   placeOfBirthError.textContent ="";
   return true; 
  }
}
function validateState()
{
  const  employeeState = document.getElementById('stateID').value;
  const  employeeStateError = document.getElementById('stateError');
  var validString = /^[a-zA-Z ]+$/;
  if(!employeeState.match(validString))
    {
      employeeStateError.textContent ="Only Alphabet Allowed";
      return false;
    }
    else
    {
     employeeStateError.textContent ="";
     return true; 
    }
}
function validateCity()
{
  const  employeeCity = document.getElementById('cityID').value;
  const  employeeCityError = document.getElementById('cityError');
  var validString = /^[a-zA-Z ]+$/;
  if(!employeeCity.match(validString))
  {
    employeeCityError.textContent ="Only Alphabet Allowed";
    return false;
  }
  else
  {
    employeeCityError.textContent ="";
   return true; 
  }
}
function validateEmail()
{
   const  email = document.getElementById('emailID').value;
   const  emailError = document.getElementById('emailError');
   var validString = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
   if(!email.match(validString))
    {
      emailError.textContent ="Enter Valid Email";
      return false;
    }
    else
    {
      emailError.textContent ="";
      return true; 
    }
}
function validateHeight()
{
  const  height = document.getElementById('heightID').value;
  const  heightError = document.getElementById('heightError');
  var validNumber = "/^[0-9]*$/";
  if(!height.match(validNumber))
  {
    heightError.textContent ="";
    return true;
  }
  else
  {
    heightError.textContent = "Only Numbers";
    return false;
  }
}