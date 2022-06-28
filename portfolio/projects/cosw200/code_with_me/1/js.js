// Code Challenge 1 - Alert
alert("I love this JavaScript class");

//Code Challenge 2 - Variable Output
var myName = "Mario Morales"
console.log(myName);

//Code Challenge #3 Geometry Function
function calculateArea(length, width){
  area = length * width
  document.write("<p>The total area is " + area + ".</p>");
}

calculateArea(100, 15);
calculateArea(25, 15);

//Code challenge #4 JavaScript Magic
var getPracticeMsg = document.getElementById("practice");
var newMsg = "Game of Thrones";
getPracticeMsg.textContent = newMsg;

//Code Challenge #5 Change the Season
var season = "summer";
switch (season){
  case "fall": document.write("Light jacket and jeans");
    break;
  case "winter":
    document.write("Snow jacket and snow pants");
    break;
    case "spring":
    document.write("Shirt and jeans");
    break;
    case "summer":
    document.write("Surf shorts and a surfboard");
    break;
  default:
    document.write("We don't have your season, sorry!")
}