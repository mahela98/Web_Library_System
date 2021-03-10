
// global variable
var vlidation;

//email validation
function emailValidation(e) {
    var x=document.forms["myForm"]["email"].value;
    var atpos=x.indexOf("@");
    var dotpos=x.lastIndexOf(".");
    console.log(this.value);
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
    {
    this.className = "form-control red";
   vlidation = 1;
    }else {
  this.className = " form-control green";
  vlidation = 0;
 }
}


//call when form submited
function validateForm(){
    if (vlidation==1) {
        return false;
    }else {
        return true;
    }
}

document.getElementById("email").addEventListener("keyup",emailValidation);
