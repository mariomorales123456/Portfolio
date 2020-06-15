<div class="gradient_title">
<pre>
//Mario Morales
//8.8.18
//cs21 50500
//Practical Final
import java.util.*;
import java.io.*;
public class Final{
    public static void main(String[] args) throws FileNotFoundException{
        ////////////////////////////////////////////////STAGE1
        Scanner input = new Scanner(new File("E:/bowlingscores.txt"));
        int[] score = new int[25];
        String[] student_id = new String[25];
        String[] full_name = new String[25];
        int index = 0;
        while (input.hasNext()){
            score[index] = input.nextInt();
            student_id[index] = input.next();
            full_name[index] = input.nextLine();
            index++;
        }
        ////////////////////////////////////////////////STAGE2
        printRoster(student_id, full_name);
        System.out.println();
        ////////////////////////////////////////////////STAGE3
        printLowest(student_id, full_name, score);
        System.out.println();
        ////////////////////////////////////////////////STAGE4
        printHighest(student_id, full_name, score);
        System.out.println();
    }
    public static void printRoster(String[] student_id, String[] full_name){
        ////////////////////////////////////////////////STAGE2
        System.out.println("Student ID Full Name");
        for (int i = 0; i <= student_id.length - 1; i++){
            System.out.print(student_id[i] + "\t  " + full_name[i]);
            System.out.println();
        }
    }
    public static void printLowest(String[] student_id, String[] full_name, int[] score){
        ////////////////////////////////////////////////STAGE3
        int lowestScore = 300;
        for (int i = 0; i <= score.length - 1; i++){
            lowestScore = Math.min(lowestScore, score[i]);
        }
        System.out.println("Lowest Scores:");
        System.out.println("Student ID Student Name Score");
        for (int i = 0; i <= score.length - 1; i++){
            if (score[i] == lowestScore){
                System.out.println(student_id[i] + "\t  " + full_name[i] + "\t" + score[i]);
            }
        }
    }
    public static void printHighest(String[] student_id, String[] full_name, int[] score){
        ////////////////////////////////////////////////STAGE4
        int highestScore = 0;
        for (int i = 0; i <= score.length - 1; i++){
            highestScore = Math.max(highestScore, score[i]);
        }
        System.out.println("Highest Scores:");
        System.out.println("Student ID Student Name Score");
        for (int i = 0; i <= score.length - 1; i++){
            if (score[i] == highestScore){
                System.out.println(student_id[i] + "\t  " + full_name[i] + "\t" + score[i]);
            }
        }
    }
    /*////////////////////////////////////////////////EXTRACREDIT
     * write a method named sortScores that will take the array sas an arguement and 
     * sort them according to the score.
     * Call this method from your main.
     * Then call printRoster to print the members sorted based on the scores
     
    public static void sortScores(String[] student_id, String[] full_name, int[] score){
        int[] score2 = new int[25];
        String[] student_id2 = new String[25];
        String[] full_name2 = new String[25];
        int count = -1;
        int indexJ = 0;
        for (int i = 0; i <= score.length - 1; i++){
           for (int j = 0; j <= score.length - 1; j++){
               int counter = 0;
               counter++;
               if (score[i] > score[j]){
                   count++;
               }
               if (score[i] == score[j]){
                   count++;
                   indexJ = j;
               }      
          }
           int temp = score[i];
                    String temp1 = full_name[i];
                    String temp2 = student_id[i];
                    score2[count] = temp;
                    full_name2[count] = temp1;
                    student_id2[count] = temp2;
                    count = -1;
                    duplicateCounter = 0;
        }
        for (int i = 0; i <= score.length - 1; i++){
           int temp = score2[i];
           String temp1 = full_name2[i];
           String temp2 = student_id2[i];
           score[i] = temp;
           full_name[i] = temp1;
           student_id[i] = temp2;
        }
    }
    */
}
<pre>
</div>