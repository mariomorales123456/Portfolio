/*Create a webpage and output a list of 5 desirable qualities that you think JavaScript programmers should have. Output that list using either the CSS layout from the book or through one you have created on your own. You should be able to see all 5 of these items in your HTML code when you view the source.
Modify the HTML to reflect that this is qualities of Javascript programmer and not a grocery list. Be creative - go out and search for an image of a programmer or coding and include it on the page to make it look pretty.
Output the number of items in the list somewhere on the page.
Interactivity
Create a button that will call a function that will ask for user input to add more qualities to the list. They should be able to continue to click the button and add items that will continue to add to the list.  Add the elements to the bottom of the list. Add a paragraph confirming that an item was added to the list. 
Create a second button that will call a function that will highlight three random qualities using Math.random() from the list. Be sure to first check that there are three items on the list or you might run into some problems. The highlight should be a different background color (similar to "cool" in the example) or somehow noticeably different. Additionally add a paragraph that says "The top qualities are highlighted below" somewhere on the page.
Create a third button that will call a function that will randomly remove 1 of the qualities from the list. Add a paragraph that confirms an item was removed.*/

////////////////Adding to the list button////////////////////////

function addToList(){
  document.getElementById("confirm").textContent = ""; // clears update message to blank
  var input = prompt("Please enter an item to add to the list."); //prompts for addition to list
  if (input != null){ //  if no input code doesn't continue
  var newNode = document.createElement("Li");                 // Create a <li> node
var newTextNode = document.createTextNode(input);         // Create a text node
newNode.appendChild(newTextNode);          // Append the text to <li>
document.getElementById("qualitiesList").appendChild(newNode);     // Append <li> to <ul> with id="qualitiesList"
    
var lengthOfList = document.getElementById("qualitiesList").getElementsByTagName("li").length; 
    
    newNode.setAttribute("id", lengthOfList); //sets ID of ul length
  document.getElementById("confirm").textContent = input + " added to list."; //lets user know list was updated
  console.log(lengthOfList); // DEBUG logs ul length
console.log(input); // DEBUG logs constents of new li addition
  }
}

document.getElementById("addToListButton").onclick = addToList; //triggers function on clicking button

//////////////////////////Highlighting button /////////////////////////////////////

elementID = null;

function selectRandomLi(x){ //selects random element ID
  var lengthOfList = document.getElementById("qualitiesList").getElementsByTagName("li").length;
  
  do {
  var newElementID = Math.floor((Math.random() * lengthOfList) + x);
    if (newElementID != elementID){      //does not allow it to duplicate same number
      elementID = newElementID;
      break;
    }
}
  while (newElementID = elementID);  //continues the do/while loop until it finds an original number from the last one
  
}

function highlightOneLi(){         //changes backgorund color of element ID            
  document.getElementById(elementID).style.backgroundColor = "blue";
}

function resetBackground(){
   var lengthOfList = document.getElementById("qualitiesList").getElementsByTagName("li").length; 
  
for (var i = 1; i <= lengthOfList; i++) {
  document.getElementById(i).style.backgroundColor = "584f4d";  //for loop resetting all fields to original background color
}
}

function selectThreeHighlights(){
  resetBackground();  //resets all backgrounds
  for (var i = 1; i <= 3; i++){ // loops 3 times
    selectRandomLi(1);  // finds a random element ID of ul/li
    highlightOneLi();  // highlights the element ID previously selected (chagnes background)
    console.log(elementID); //debug testing generated numbers
  }
  elementID = null;
}

document.getElementById("highlightButton").onclick = selectThreeHighlights; //triggers selectThreeHighlights



///////////////////////////////////delete button /////////////////////////////////////////

function deleteRandom(){
  document.getElementById("highlightButton").disabled = true;  //highlight button disabled it'll cause bugs once a delete happens
  selectRandomLi(1);  // finds a random element ID of ul/li
  
 var list = document.getElementById("qualitiesList");
  
 
  document.getElementById("confirm").innerHTML = list.childNodes[elementID].innerHTML + " removed from list."; //lets user know list was updated
  
    list.removeChild(list.childNodes[elementID]);
}


document.getElementById("deleteButton").onclick = deleteRandom; //triggers  deleteRandom