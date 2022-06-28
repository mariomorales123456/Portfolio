/*This assignment combines several of the examples from the book into one large example where you will need to create a product or special deal that you are marketing to a website user. Use some creativity here to come up with something you think would be of interest to our classmates. It can be a website subscription, a product, a service, etc. Feel free to use the CSS from the book or create your own. Use the links in the assignment below to see the working code example from our book.

Using the examples in Chapter 6 in the Javascript & jQuery textbook and use Chapters 28-33 in the Absolute Beginner's Guide as your reference guide, code a page to do the following:

1) Upon loading the page, display a pop up message/note alerting users to a special deal they can get on something you are selling. Site users should just be able to close the window and continue onto the page. This should be similar to our textbook program as shown on page 277 (Links to an external site.)Links to an external site.. 

2) Create a form that asks for a username, password, and a repeat password. Use focus and blur to display a message that states that the username should be at least 8 characters long and checks that the input meets the requirement. 

3) Add an input for password and repeat password. Use focus and blur to display a message that states that the passwords should be at least 5 characters long. Check that the length meets the requirement and that the password matches with the repeat password input. See page 275's code for an example (Links to an external site.)Links to an external site..  Note: the example does not show how to check if password/repeat password are the same, but you should be able to figure that out with a simple comparison check and an if statement. 

4) Add a select input that provides the user with 2 options for whatever your special deal is -- and encourage them to get the higher price item similar to the example on page 282-283 (Links to an external site.)Links to an external site..

5) Finally, add an agree to terms checkbox similar to the example from the book.*/

//--------------------------------#1-----------------------------------------------
// Create the HTML for the message
var msg = '<div class="header"><a id="close" href="#">close X</a></div>';
msg += '<div><h2>SPECIALS ON LAPTOPS</h2>';
msg += '<img src="https://c.s-microsoft.com/en-us/CMSImages/EN-US_asus_ux370_hol18_382x258.jpg?version=d16b052c-9c73-49fd-71c4-1706da137a41">';
msg += '<br>'
msg += '<br>'
msg += "<h2>SIGN UP TODAY</h2>";

var ad = document.createElement('div');       // Create a new element
ad.setAttribute('id', 'note');                // Add an id of note
ad.innerHTML = msg;                           // Add the message
document.body.appendChild(ad);                // Add it to the page

function closePopup() {                          // Declare function
  document.body.removeChild(ad);              // Remove the note
}

var adClose = document.getElementById('close');   // Get the close button
adClose.addEventListener('click', closePopup, false);// Click close-clear note

//---------------------------#2---------------------------------------------------

function notQuiteUsername(){
  var username = document.getElementById("username");
  if (username.value.length < 8) { //function for focus
    document.getElementById("usernameReminder").textContent = "Username needs to be 8 characters or longer.";
  }
  else {
    document.getElementById("usernameReminder").textContent = "";
  }
}

function requiredLengthUsername(){ //function for blur
  var username = document.getElementById("username");
  if (username.value.length < 8) {
    document.getElementById("usernameReminder").textContent = "Username not long enough.";
  }
  else {
    document.getElementById("usernameReminder").textContent = "";
  }
}


document.getElementById("username").addEventListener("blur",requiredLengthUsername) // adding events
document.getElementById("username").addEventListener("focus",notQuiteUsername) // adding events

//---------------------------#3---------------------------------------------------

//~~~~~~~~~~~~~~~~~~~~password~~~~~~~~~~~~~~~~
function warnings(){
  var password = document.getElementById("password");
  var cpassword = document.getElementById("cpassword");
  if (password.value.length < 5) { //function for blur
    document.getElementById("passwordReminder").textContent = "password not long enough.";
  }
  else if (password.value.length != cpassword.value.length) {
    document.getElementById("passwordReminder").textContent = "Passwords do not match";
  }
  else {
    document.getElementById("passwordReminder").textContent = "";
  }
}

function requiredLengthPassword(){ //function for focus
  var password = document.getElementById("password");
  if (password.value.length < 5) {
    document.getElementById("passwordReminder").textContent = "Password needs to be 5 characters or longer.";
  }
  else {
    document.getElementById("passwordReminder").textContent = "";
  }
}

document.getElementById("password").addEventListener("blur",warnings) // adding events
document.getElementById("password").addEventListener("focus",requiredLengthPassword) // adding events

//~~~~~~~~~~~~~~~~~confirm password~~~~~~~~~~~~~~~~~~~~~~~~~~

function cwarnings(){
  var cpassword = document.getElementById("cpassword");
  var cpassword = document.getElementById("cpassword");
  if (cpassword.value.length < 5) { //function for blur
    document.getElementById("cpasswordReminder").textContent = "password not long enough.";
  }
  else if (password.value.length != cpassword.value.length) {
    document.getElementById("cpasswordReminder").textContent = "Passwords do not match";
  }
  else {
    document.getElementById("cpasswordReminder").textContent = "";
  }
}

function requiredLengthcPassword(){ //function for focus
  var cpassword = document.getElementById("cpassword");
  if (cpassword.value.length < 5) {
    document.getElementById("cpasswordReminder").textContent = "Password needs to be 5 characters or longer.";
  }
  else {
    document.getElementById("cpasswordReminder").textContent = "";
  }
}

document.getElementById("cpassword").addEventListener("blur",cwarnings) // adding events
document.getElementById("cpassword").addEventListener("focus",requiredLengthcPassword) // adding events



//---------------------------#4---------------------------------------------------

function recommend(){
  var selectPackage = document.getElementById("package");
  var index0 = selectPackage.options[selectPackage.selectedIndex].value;
  if (index0 === "L2017"){
    var packageHint = document.getElementById("packageHint");
    packageHint.innerHTML = "Save money by buying newer more efficient models!";
  } 
  else {
    var packageHint = document.getElementById("packageHint");
    packageHint.innerHTML = "Good choice!";
  }
}

var packageTrigger = document.getElementById("package");

packageTrigger.addEventListener("change",recommend,false);

//-------------------------#5---------------------------------
var termsCheckbox = document.getElementById("terms");

function terms(){
  if (!termsCheckbox.checked){
    document.getElementById("termsHint").innerHTML = "You must agree to terms & conditions by checking this box.";
  }
  else {
    document.getElementById("termsHint").innerHTML = "";
  }
}

var nextButton = document.getElementById("nextButton");

nextButton.addEventListener("click", terms);

termsCheckbox.addEventListener("blur", terms);
