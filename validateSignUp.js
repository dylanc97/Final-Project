//Homework 4 by Amanda Avagliano
//Functions
//check name feild
function checkName(){
    const myName = document.getElementById("name").value;
    if (myName.charAt(0)===myName.charAt(0).toUpperCase()){
        removeError(1);
    }
    else{
        addError(1);
    }
}
//check username feild
function checkUser(){
    const myUser = document.getElementById("username").value;
    if (myUser.length >= 8)
        removeError(2);
    else
        addError(2);
}
//check budget feild
function checkBudget(){
    const myBudget = document.getElementById("price").value;
    if (isNaN(myBudget)){
        addError(3);
    }
    else if (parseInt(myBudget) < 1000){
        addError(4);
    }
    else {
        removeError(3);
        removeError(4);
    }
}

//check password feild
function checkPass(){
    const myPass = document.getElementById("password").value;
    if (myPass.length >= 10)
        removeError(5);
    else
        addError(5);
}

//check if form is filled out properly, if not, don't submit
function checkEnter(event){
    let myErrors = false;
    
    removeError(6);
    
    const errors = document.querySelectorAll("div.error");
    for (let i=0; i<errors.length; i++){
        if (errors[i].style.display === "block")
            myErrors = true;
    }
    
    if (document.getElementById("name").value.length === 0){
        myErrors = true;
        addError(1);
    }
    if (document.getElementById("username").value.length === 0){
       
        myErrors = true;
        addError(2);
    }
    if (document.getElementById("price").value.length === 0){
    
        myErrors = true;
        addError(3);
    }
    if (document.getElementById("password").value.length === 0){
       
        myErrors = true;
        addError(5);
    }
    
    if (myErrors){
        addError(6);
        event.preventDefault();
        return false;
    }
    return true;
}

//remove error message
function removeError(num){
    const errNum = parseInt(num);
    const error = document.getElementById("err" + errNum);
    error.style.display = "none";
}
//add error message
function addError(num){
    const errNum = parseInt(num);
    const error = document.getElementById("err" + errNum);
    error.style.display = "block";
}

function showResults(){
    
    //write new HTML
    let newHTML = "<p>Your name is: "
    newHTML += "<span class=\"output\">"
    newHTML +=document.getElementById("name").value;
    newHTML +="</span></p>"
    newHTML +="<p>Your username is: "
    newHTML += "<span class=\"output\">"
    newHTML +=document.getElementById("username").value;
    newHTML +="</span></p>"
    newHTML +="<p>Your password has: "
    newHTML += "<span class=\"output\">"
    newHTML +=document.getElementById("password").value.length;
    newHTML +=" characters</span></p>"
    newHTML +="<p>Your age is: "
    newHTML += "<span class=\"output\">"
    newHTML +=document.getElementById("age").value;
    newHTML +="</span></p>"
    newHTML +="<p>Your bio: "
    newHTML += "<span class=\"output\">"
    newHTML +=document.getElementById("bio").value;
    newHTML +="</span></p>"
    newHTML +="<p>You gender is: "
    newHTML += "<span class=\"output\">"
    newHTML +=myGender;
    newHTML +="</span></p>"
    newHTML +="<p>Certification: "
    newHTML += "<span class=\"output\">"
    newHTML +=myDog;
    newHTML +="</span></p>"
    newHTML +="<p>Your favorite dog breed is: "
    newHTML += "<span class=\"output\">"
    newHTML +=myBreed;
    newHTML +="</span></p>"
    
    //replace HTML
    document.getElementById("results").innerHTML = newHTML;
}
//Events

//add event listener for the name input
const nameInput = document.getElementById("name")
nameInput.addEventListener('keyup', checkName, false);

//add event listener for the username input
const usernameInput = document.getElementById("username")
usernameInput.addEventListener('keyup', checkUser, false);

//add event listener for the password input
const passInput = document.getElementById("password")
passInput.addEventListener('keyup', checkPass, false);

//add event listener for the budget input
const budgetInput = document.getElementById("price")
budgetInput.addEventListener('keyup', checkBudget, false);

//add event listener for submit button
const subBtn = document.getElementById("signUp");
subBtn.addEventListener('submit', checkEnter, false);
