/*You will create a simple quiz game of at least 5 questions. You can do this any way you'd like (any sort of input/output method you prefer). Here is where creativity can come into the equation. The minimum requirement is a simple math quiz or trivia question game with 5 questions that keeps track of the player's score. Output the score either after each answer or at the end.

Use the examples from this week's learning resources and to get you started. Keep in mind that the questions should be simple answers - either numbers or single words. It is too hard to check to see if an answer is correct when there are many different answers that might work.

For those that want more of a challenge you can do something more complex like creating a random numbers and generating a random math question. Don't make it impossible though. Keep score and output the total number of questions correct at the end. */

if(confirm("Do you want to play the quiz game?")){
var correctAnswers = 0;
var answer1 = prompt("If you mix the color red and blue, what color is created?");
  if (answer1 == "purple"){
    correctAnswers++;
    alert("Correct");
  }
  else {
     alert("Sorry, incorrect.");
  }
var answer2 = prompt("What is the least amount of days a month can have?");
   if (answer2 == 28){
    correctAnswers++;
    alert("Correct");
  }
  else {
     alert("Sorry, incorrect.");
  }
var answer3 = prompt("What is the square root of 9?");
   if (answer3 == 3){
    correctAnswers++;
    alert("Correct");
  }
  else {
     alert("Sorry, incorrect.");
  }
var answer4 = prompt("If you're driving at 60mph, how many miles will you travel in 30 minutes? (number only)");
  if (answer4 == 30){
    correctAnswers++;
    alert("Correct");
  }
  else {
     alert("Sorry, incorrect.");
  }
var answer5 = prompt("You were carrying a baker's dozen donuts, but you fell down losing them all. How many did you lose?");
  if (answer5 == 13){
    correctAnswers++;
    alert("Correct");
  }
  else {
     alert("Sorry, incorrect.");
  }
  document.write("<p>You got " + correctAnswers + " correct!</p>");
}
else{
  alert("Maybe next time.")
}


