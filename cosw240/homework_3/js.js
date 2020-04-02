/*Create a program in CodePen that prompts for the input of a 15+ character string from a user and performs the following functions to it:

STRING METHODS

Check to see if the string meets the 15 character limit. If it does not, send a message and ask for another string.
Output the original string as it was entered onto the web page document.
Output the original string in all lower case letters. Do not change the original string value.
Output the original string in all upper case letters. Do not change the original string value.
Output a message indicating the total characters within the string.
Output the characters between index 5 and index 10.
Output 5 characters starting from position 8.
Combine the string with another string of your choice. Output the new string. 
Finally, split your string into an array for the 2nd part of the assignment.
ARRAY METHODS

Output the original array values.
Output the total number of items in the array.
Remove the first item in the array. Output the new array values.
Add the word "banana" to the end of the array. Output the new array values.
Reverse the elements in the array. Output the new array values.
 */

var string = prompt("Please enter a phrase that is 15 characters or longer.");
//STRING METHODS
while (string.length < 15){
  alert("Sorry that was not the correct length.")
  string = prompt("Please enter a phrase that is 15 characters or longer.");
}
document.write("<p>Your phrase: " + string + "</p>");
document.write("<p>Upper case: " + string.toUpperCase() + "</p>");
document.write("<p>Lower case: " + string.toLowerCase() + "</p>");
document.write("<p> Phrase length: " + string.length + "</p>");
document.write("<p>Letters from position 4 to 9: " + string.slice(5, 11)+ "</p>");
document.write("<p>Letters from position 8 to 13: " + string.substr(7, 5)+ "</p>");
var string2 = string + " and another string of my choice";
document.write("<p>" + string2 + "</p>");
var array = string2.split(" ")
//ARRAY METHODS
document.write("<p>Array: " + array + "</p>");
document.write("<p>Array length: " + array.length + "</p>");
array.shift();
document.write("<p>Array shift: " + array + "</p>");
array.push("banana");
document.write("<p>Array push: " + array + "</p>");
array.reverse();
document.write("<p>Array reverse: " + array + "</p>");




