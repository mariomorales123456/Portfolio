/*Create a second program and ask the user for two numeric inputs and then output to the webpage the value of those two numbers when added together (show something like 1 + 2 = 3) and then display those two numbers multiplied together (1 * 2 = 2). Sample output should look something like the following but based on the input received from the website user:

1 + 2 = 3
1 * 2 = 2 

Use the example from the Duckett book (Links to an external site.)Links to an external site. to get started. You are welcome to also use the CSS, images and page layout from the book example, but you are encouraged to "make it your own". Right click on the browser window and choose View Source to see links to both the CSS and the JS files that are associated with the webpage.*/

function addMult(x, y){
  var add = parseInt(x) + parseInt(y);
  var mult = x * y;
  document.write(x + " + " + y + " = " + add);
  document.write("<br>");
  document.write(x + " * " + y + " = " + mult);
}

addMult(prompt("Enter a number"), prompt("Enter a number"));
