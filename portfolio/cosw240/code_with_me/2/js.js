//Challenge #6
var answer1 = prompt("What is 5 + 5");
if(answer1 == 10){
  alert("Correct!");
}
else if(answer1 == null){
  alert("Maybe next time.");
}
else {
  alert("Incorrect.")
}
//Challenge #7

if (confirm("Do you want to play an adventure game?")){
  
var adventure = prompt("You enter a dark swamp. You see a light on ahead. Do you decide to run toward it (R), do you sneak towards it (S), or do you prepare yourself for battle (B)?");
  
 if (adventure == null){
   alert("You cancelled the adventure");
 }
  else if (adventure == "R"){
    alert("You run in, triggering the Swamp King and he is mad. Unfortunately you were ill-prepared to face him in battle and fall.");
  }
  else if (adventure == "S"){
    alert("You sneak towards the light, your prescense wakes up the Swamp King, but he is confused since you are so well hidden. You are able to sneak around him and avoid battle. ");
  }
  else if (adventure == "B"){
    alert("You prepare for battle. The light approaches you instead, revealing a walking lantern. You cut it in half and receive some loot.")
  }
  else {
    alert("Sorry wrong input.")
  }
}
else {
    alert("Maybe next time.");
  }
//Challenge #8-1
document.write("<h3>Challenge #8-1</h3>");
for (var i = 1; i <= 15; i++){
  document.write(i + " ");
}
document.write("<br>");
//Challenge #8-2
document.write("<h3>Challenge #8-2</h3>");
var v = 2;
while (v <= 20){
  document.write(v + " ");
  v += 2;
}
document.write("<br>");
//Challenge #8-3
var secretVar = 5;
do {
  var secretAnswer = prompt("Can you guess what number I'm thinking about that's between 1 and 10?");
  if (secretAnswer == null){
    alert("Maybe next time.");
    break;
  }
  else if (isNaN(secretAnswer)){
    alert("Wrong input, try again.")
  }
else if (secretAnswer > secretVar){
    alert("Too high! Try Again!");
  } 
  else if (secretAnswer < secretVar){
    alert("Too Low! Try Again!");
  }  
  else {
    alert("Good job! That's it!");
  }
}
while (secretVar != secretAnswer);


