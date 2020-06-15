<div class="raw_code_container">
<pre>
//Mario Morales Elisa Fernandez
//8.2.18
//cs21 50500
//3rd project
import java.util.*;
public class Quiz{
    public static void main(String[] args){
        Scanner console = new Scanner(System.in);
        String[] questions = new String[10];
        String[] answers = new String[10];
        char[] rightAnswers = new char[10];
        arrays(questions, answers, rightAnswers);
        System.out.println("This is a quiz about Pokemon!");
        System.out.println("I will ask you 10 questions regarding the");
        System.out.println("games, including Pokemon GO, and the T.V. show.");
        System.out.println("Do you want to play? Yes or No?");
        String answer = console.next();
        char initiate = answer.toLowerCase().charAt(0);
        if(initiate == 'n'){
            System.out.println("Maybe next time! Have a great day!");
        }
        else {
        console.nextLine();
        System.out.println();
        System.out.println();
        int correct = 0;
        for (int i = 0; i <= questions.length - 1; i++){
            System.out.println(questions[i]);
            System.out.println("Please choose from the following and enter a, b, or c");
            System.out.println(answers[i]);
            char letter = 'z';
            int tries = 0;
            do {
                String choice = console.next();
                letter = choice.toLowerCase().charAt(0);
                  if (rightAnswers[i] == letter){
                System.out.println("You have it right!");
                correct++;
                System.out.println();
            }
            else if (tries == 1){
                tries = 0;
                System.out.println("Sorry no more tries. Right Answer: " + rightAnswers[i]);
                System.out.println();
                break;
            }
            else {
                System.out.println("Incorrect. Try again.");
                System.out.println();
                tries++;
            }
            }
            while (rightAnswers[i] != letter);
            
        }
        System.out.println("You got " + correct + " correct!");
        System.out.println();
        System.out.println("You got " + (10 - correct) + " incorrect.");
    }
 }
    public static void arrays(String[] questions, String[] answers, char[] rightAnswers){
        questions[0] = "Question 1: Which pokemon is not a starter for generation 1?";
        questions[1] = "Question 2: How old is Ash Ketchum when the T.V. show begins?";
        questions[2] = "Question 3: What can you name Eevee in Pokemon Go to evolve to Jolteon?";
        questions[3] = "Question 4: Which pokemon is not a starter for generation 2?";
        questions[4] = "Question 5: How many candies are needed to evolve Gyarados in Pokemon Go?";
        questions[5] = "Question 6: What evolution can be obtained with the Dragon Scale item?";
        questions[6] = "Question 7: What baby pokemon can only be obtained by hatching an egg?";
        questions[7] = "Question 8: What is the name of the female police officer in Season 1?";
        questions[8] = "Question 9: Which egg color hatches an Alolan pokemon?";
        questions[9] = "Question 10: What type of pokemon can only be obtained by finishing a 5 star raid?";
        
        answers[0] = "a) Squirtle, b) Bulbasaur, c) Butterfree";
        answers[1] = "a) 9, b) 10, c) 12";
        answers[2] = "a) Sprinkles, b) Sparkles, c) Sparkie ";
        answers[3] = "a) Togepi, b) Cyndaquil, c) Totodile";
        answers[4] = "a) 100, b) 250, c) 400";
        answers[5] = "a) Dragonite, b) Kindra, c) Bagon";
        answers[6] = "a) Igglybuff, b) Jigglypuff, c) Marill";
        answers[7] = "a) June, b) Jenny, c) Joy";
        answers[8] = "a) Green, b) Purple, c) Pink";
        answers[9] = "a) Legendary, b) Dragon, c) Fairy";
        
        rightAnswers[0] = 'c';
        rightAnswers[1] =  'b';
        rightAnswers[2] =  'b';
        rightAnswers[3] =  'a';
        rightAnswers[4] =  'c';
        rightAnswers[5] =  'b';
        rightAnswers[6] =  'a';
        rightAnswers[7] =  'b';
        rightAnswers[8] =  'c';
        rightAnswers[9] =  'a';
        
        
    }
}
</pre>
</div>