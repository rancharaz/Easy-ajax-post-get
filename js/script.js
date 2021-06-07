 
 function submitForm(){
     
    event.preventDefault();

    let inputName = document.querySelector("#username").value;
    let inputNumber = document.querySelector("#phone").value;
    let inputEmail = document.querySelector("#email").value;

    let atpos = inputEmail.indexOf("@");
    let dotpos = inputEmail.lastIndexOf(".");

    
   if (inputName !== "") {
    $("#username").css("border", "2px solid green");
  
   } else { 
    $("#inputFalse").modal("show")
    $("#username").css("border", "2px solid red");
   
   }
if (inputNumber.length <= 9) {
    $("#inputFalse").modal("show")
    $("#phone").css("border", "2px solid red");
     return false;
} else {
    $("#phone").css("border", "2px solid green");
    
}

if (atpos < 1 || (dotpos - atpos < 2)) {

    $("#inputFalse").modal("show")
    $("#email").css("border", "2px solid red")
    return false;
}else{
    $("#email").css("border", "2px solid green");
     
}
postData();
 }