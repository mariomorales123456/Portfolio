/*Character Skill Generator Program
The purpose of this homework assignment is to provide you with practice with objects and functions and give you the chance to work with the Math object method such as Random (which we are now experts at, right?). 

You will be creating a character skill generator program for a role playing game. Don't be afraid to put some personality into this, or customize any of it to your gaming environment (Zombies, Harry Potter, D&D, WOW, etc.) of choice. I have even had people create custom cars, ice cream sundaes, outfits -- the list is endless as long as it can fit into the requirements below. Have some fun! That is the best way to learn. 

For those of you who might not be familiar with role playing games... here (Links to an external site.)Links to an external site. is where the inspiration for this assignment comes from. Disclaimer - I was never a big D&D player, but most of my college friends were, so I am pretty well versed with the concept of rolling a character. I have always liked the cool dice though! I prefer WOW and video game based character creation. 

For Beginners
Before you start coding do the following on paper:

Create a list of character races - minimum of 4 (human, elf, troll, undead -- whatever you wish)
Choose a list of character classes - minimum of 4 (paladin, ranger, rogue, wizard - whatever you wish)
Create a list of at least 4 abilities (strength, dexterity, constitution, intelligence, wisdom, charisma - again, whatever you wish)
The way you want to do this - create an object for your character which should have the following properties:

race
class
age
ability1 (name this whatever you chose as your ability)
ability2 (name this whatever you chose as your ability)
ability3 (name this whatever you chose as your ability)
ability4 (name this whatever you chose as your ability)
Then to create the values for these items in your object do the following:

For race and class, choose a random item from your list (see my CodePen for a hint)
For the age property, assign a randomly generated number for age of your character (say between 10 and 50).
Randomly assign values for all 4 of your abilities. These should all be done separately. (see my CodePen for a hint)
Output detailed character information to the screen. 
Then ask at least 2 questions for a storyline similar to our Choose Your Own Adventure game.*/

function character(){
  var characterRaceList = ["Orc", "Human", "Elf", "Dwarf",]
  var characterClassList = ["Archer", "Swordsman", "Axeman", "Berserker",]
  this.charRace = characterRaceList[Math.floor(Math.random()*characterRaceList.length)];
  this.charClass = characterClassList[Math.floor(Math.random()*characterClassList.length)];
  this.age = Math.floor((Math.random() * 40) + 10);
  this.strength = Math.floor((Math.random() * 10) + 1);
  this.dexterity = Math.floor((Math.random() * 10) + 1);
  this.stamina = Math.floor((Math.random() * 10) + 1);
  this.intelligence = Math.floor((Math.random() * 10) + 1);
}

var beginGame = confirm("Do you want to play?");
if (beginGame == true){
  var yourCharacter = new character();
  document.write("<p>You are a new adventurer with these stats: </p>");
  document.write("<p> Race: " + yourCharacter.charRace + ".</p>")
  document.write("<p> Class: " + yourCharacter.charClass + ".</p>")
  document.write("<p> Age: " + yourCharacter.age + ".</p>")
  document.write("<p> Strength: " + yourCharacter.strength + ".</p>")
  document.write("<p> Dexterity: " + yourCharacter.dexterity + ".</p>")
  document.write("<p> Stamina: " + yourCharacter.stamina + ".</p>")
  document.write("<p> Intelligence: " + yourCharacter.intelligence + ".</p>")
  document.write("<p> You're numerical stats are rated between 1 and 10. One being the worst and 10 being the best. Keep this in mind! It may affect the following two questions.</p>")
  var question1 = confirm("As a new adventurer you are asked to investigate a local disturbance in the woods. Do you take the job? Yes/No.");
  if (question1 == true){
    if (yourCharacter.intelligence < 4){alert("You character isn't very intelligent though...");}
    else if (yourCharacter.age > 35){alert("You character is old enough to be a seasoned pro.");}
    else if (yourCharacter.stamina < 4){alert("It'll be tough with your character stamina, hopefully you make it.");}
    var question2 = confirm("You make it the woods, you happen about 2 lost children. Do you take them to their home? Yes/No")
          if (question2 == true){alert("You take them to their parents, a happy ending.");}
          else {alert("You leave them there, but let the town know about their location.");}
        
  }
  else {
    if (yourCharacter.intelligence < 4){alert("You character isn't very intelligent though, wise choice.");}
    else if (yourCharacter.age > 35){alert("You character is old and can't be bothered.");}
    else if (yourCharacter.stamina < 4){alert("Your character will get much too tired anyways.");}
    var question2 = confirm("How about the local pub then? Yes/No.");
          if (question2 == true){alert("You have a jolly time.");}
          else {alert("You go home, it is very boring.");}
  
}
}
else{
  alert("Maybe next time.");
}


