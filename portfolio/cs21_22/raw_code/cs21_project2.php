<div class="raw_code_container">
<pre>
//Mario Morales, Elisa Fernandez, Mario Sanchez, Diego Garcia
//7.19.2018
//CS21 50500

import java.util.*;

public class Guess{
    public static final int NUMBER = 100; //Constant - changes the range of numbers to pick from 
    public static int playerGuess = 0;  // bypasses scope rules, using playerGuess in game(); and main method
    public static int totalGames= 0; // bypasses scope rules, using totalGames in results(); and main method
    public static int totalGuesses = 0; // bypasses scope rules, using totalGames in results(); and main method
    public static int maxGuesses = 0; // bypasses scope rules, using totalGames in results(); and main method
    public static void main(String[] args){
      Scanner console = new Scanner(System.in);
      Random rand = new Random();
      
      instructions();   // prints intro paragraph
      String s;     //declaring s locally for the "do you want to play again?" question later on (see below)
      char c = 'y';  // initializing c to 'y' so while loop for game runs immediately like example
      while (c == 'y'){ // y indicates that game will play 
      game(console, rand); //runs game
      System.out.println();
      System.out.print("Do you want to play again? ");
      s = console.next();  //user input 
      c = s.toLowerCase().charAt(0);  // looks for first letter of user input, isolates 'y' or 'n' for while loop
      playerGuess = 0;  // resets the player guess to 0 so it can be re-initialized in the game(); method
      System.out.println();
      }
      System.out.println();
      results(); // calls results() method to post results
    }
    public static void instructions(){
        System.out.println("This program allows you to play a guessing game.");
        System.out.println("I will think of a number between 1 and 100");
        System.out.println("and will allow you to guess until you get it.");
        System.out.println("For each guess, I will tell you whether the");
        System.out.println("right answer is higher or lower than your guess");
        System.out.println();
    }
    public static void game(Scanner console, Random rand){
        
        System.out.println("I'm thinking of a number...");
        int computerNumber = rand.nextInt(NUMBER) + 1;  //generates random number from 1-Constant declared globally
        int counter = 0; // counts guesses locally
        while (playerGuess != computerNumber){
            System.out.print("Your Guess? ");
            playerGuess = console.nextInt(); //initial player guess
            if (playerGuess > computerNumber){
                System.out.println("lower");
                counter++;  //adds +1 to local guess counter
                totalGuesses++; // adds +1 to global guess counter
                
            }
            else if (playerGuess < computerNumber){
                System.out.println("higher");
                counter++; //adds +1 to local guess counter
                totalGuesses++; // adds +1 to global guess counter
            }
            else{
                counter++; //adds +1 to local guess counter
                totalGuesses++; // adds +1 to global guess counter
                System.out.println("You got it right in " + counter + " guesses");
                maxGuesses = Math.max(maxGuesses, counter);  // saves largest # of guesses in global variable
                counter = 0; // resets local counter to zero
                System.out.println();
            }
        }
        totalGames++; // adds +1 to total games player has played
        }
    public static void results(){
        System.out.println("Overall results:");
        System.out.println("    total games   = " + totalGames);  //prints total games
        System.out.println("    total guesses = " + totalGuesses); //prints total guesses
        System.out.print("    guesses/game  = ");                   
        System.out.printf("%.2f\n", ((double)totalGuesses/totalGames));  //printf formats avg # of guesses to two decimal places
        System.out.println("    max guesses   = " + maxGuesses); // prints max guesses
        }
}
</pre>
</div>