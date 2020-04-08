/*Your Assignment

Write your code in CodePen for easy sharing OR create it your favorite code editor and then upload to a webserver for sharing.
You will be sharing this. Keep it PG-13. 
Have fun.
Be creative.
Requirements:

You must ask the following questions at the beginning of the game and do something based on the input received.

Name
You must ask if they are ready to get started/play, etc..
Create a story and ask for input on what the user would like to do. Have at least FIVE different choices in the story. Use a minimum of three FUNCTIONS and three IF statements but you will likely want to use more, depending on how you set it up. Output a different path in the story based on their input.*/

name = prompt("Hello! What is your name?");
document.write("<h3>Welcome to my Bank Heist adventure " + name + ".</h3>");
if (confirm("Do you want to play?")){
  scoreToLose = 0;
  var answer = prompt("How long do you want to prepare for this quest? Enter a number between 0 and 100 days.");
  var answer2 = prompt("Do you go through the front door (1) or tunnel underneath (2).")
  if (answer2 == 1){
  frontDoor(difficulty(answer));
  }
  else{
    tunnel(difficulty(answer));
  }
  var answer3 = prompt("Do you use explosives to enter the vault (1) or instead safecrack it? (2)");
  if (answer3 == 1){
    bomb(difficulty(answer))
  }
  else{
    safeCrack(difficulty(answer))
  }
  var answer4 = prompt("Do you grab the loot as quickly as possible (1) or do you take your time looking for the most valuable assets? (2)");
  if (answer4 == 1){
    document.write("<p>You grab as much cash as you can possibly can and make your way back.</p>");
    scoreToLose = scoreToLose + 2;
  }
  else {
    document.write("<p>You take your time to carefully pick through documents and the most expensive items</p>");
    scoreToLose = scoreToLose + 5;
  }
  var answer5 = prompt("You make it outside, do you use your getaway vehicle (1) or run for it? (2)");
  scoreToLose - difficulty(answer);
  if (answer5 == 1){
    scoreToLose = scoreToLose + 1;
    if(scoreToLose < 15){
    document.write("<p>You make it to your vehicle and make a clean getaway!</p>");
    }
    else {
      document.write("<p>As you try to get to your vehicle, you are apprehended for your crimes :(.</p>");
    }
  }
  else {
    scoreToLose = scoreToLose + 5;
    if(scoreToLose < 15){
    document.write("<p>You make a dash in to the crowd, and incredibly you are able to get away clean!</p>");
    }
    else {
      document.write("<p>As you try to get away on foot, you are apprehended for your crimes :(.</p>");
  }
  }
}
  else {
  alert("Maybe next time.");
    document.write("<p>Maybe we'll play next time.</p>")
}
  
  

function difficulty(answer){
  if (answer >= 65){
    return 7;
  }
  if (answer >= 35){
    return 4;
  }
  if (answer >= 10){
    return 2;
  }
  if (answer >= 0){
    return 1;
  }
}

function frontDoor(difficulty){
  document.write("<p>You drive up to the front of the bank, walk out of your vehicle to the front door and boldly crash through.</p>");
  var guards = Math.floor((Math.random() * 10) + 1);
  var currentGuards = guards - difficulty;
  if (currentGuards < 0){
    currentGuards = 0;
  }
  document.write("<p>There was supposed to be " + guards + " guards but your preperation beforehand means there is " + currentGuards + ".</p>");
  escapedGuards = 0;
  if(currentGuards != 0){
  var escapedGuards = Math.floor((Math.random() * currentGuards) + 1);
  document.write("<p>You manage overcome the guards but " + escapedGuards + " escapes.</p>");
    scoreToLose = scoreToLose + escapedGuards;
  }
}
function tunnel(difficulty){
  document.write("<p>You rent the building next to the bank and begin tunneling discreetly.</p>");
  var heardBy = Math.floor((Math.random() * 10) + 1);
  var reportedBy = heardBy - difficulty;
  if(reportedBy < 0){
    reportedBy = 0;
  }
  document.write("<p>You are heard by " + heardBy + " however through your careful planning " + reportedBy + " reported suspcious activity.</p>");
  document.write("<p>Unforunately you find that you no choice but to tunnel to the bank vault door.</p>");
  scoreToLose = scoreToLose + reportedBy; 
}
function bomb(difficulty){
  var bombTime = Math.floor((Math.random() * 10) + 1);
  var shortened = bombTime - difficulty;
  if (shortened < 0){
    shortened = 0;
  }
  document.write("<p>You choose to use a bomb to open the vault door. Your preperation in advance means that it will take " + shortened + " minutes. </p>");
  
  for (var i = 1; i <= shortened; i++){
    document.write("Tick... Tock...");
  }
 document.write("<p>Boom! The vault door opens.</p>");
  scoreToLose = scoreToLose + shortened;
}

function safeCrack(difficulty){
  var safeCrack = Math.floor((Math.random() * 10) + 1);
  var shortened = safeCrack - difficulty;
  if (shortened < 0){
    shortened = 0;
  }
  document.write("<p>You choose to try to safecrack. Thanks to your preperation it will only take " + shortened + " minutes. </p>");
  
  for (var i = 1; i <= shortened; i++){
    document.write("Click... Click...");
  }
 document.write("<p>Success! The vault door opens.</p>");
  scoreToLose = scoreToLose + shortened;
}