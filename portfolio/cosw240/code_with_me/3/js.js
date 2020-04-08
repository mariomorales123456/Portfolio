//Code Challenge #1
function twoNumbers(){
var number1 = prompt("Please type in a number.");
  if(isNaN(number1)){
    alert("That is not a number.");
  }
var number2 = prompt("Please type in a number.");
  if(isNaN(number2)){
    alert("That is not a number.");
  }
  if(number1 == number2){
    alert("The numbers are the same.");
  }
  else{alert("The largest number is " + Math.max(number1, number2));
      }
}

twoNumbers();
//Code Challenge #2
function secret(){
  secretNum = 96;
  alert("My secret number is " + secretNum);
}

secret();
alert("My secret number is " + secretNum);