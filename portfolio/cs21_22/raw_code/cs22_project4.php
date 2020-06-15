<?php include('../includes/head.php'); ?>

<div class="raw_code_container">
<pre>
/**
 Mario Morales
 Project 4 Chapter 5
 CS22 Data Structures and Algorithms
 April 3, 2019
 */
public class Project4Ch5
{   
    //Algorithm: 4 x 2 = 4 + 4 // 12 x 8 = 12 + 12 + 12 + 12 + 12 + 12 + 12 + 12
    public static int recursiveMultiplication(int a, int b){
        /* typical way:
        int answer = 0;
        for (int i = 1; i <= a; i++){
            answer += b;
        }*/
        int answer = 0;
        
        if (b == 0){ // termination condition
            return 0;
        }
        else if (a >= 0 && b >= 0) { //checks for positive integers
            answer = a + recursiveMultiplication(a, b - 1); //recursive algorithm
        }
        else {
            System.out.println("Integers may only be positive."); //message for wrong input
        }
        
        return answer;
    }
    public static void main(String[] args){
        System.out.println("Regular multplication: " + (53 * 42)); //answer verification
        System.out.println("Recursive multiplication: " + recursiveMultiplication(53, 42));
    }
}
</pre>
</div>