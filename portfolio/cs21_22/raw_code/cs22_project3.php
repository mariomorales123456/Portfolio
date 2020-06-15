<?php include('../../includes/head.php'); ?>

<div class="raw_code_container">
<pre>
import java.util.*;
/**
 Mario Morales
 Project 3 Top Ten Scores with a Linked list
 March 27 2019
 CS22 Data Strucutres & Algorithms
 */
public class Project3
{
    public static void main(String [] args){
        SinglyLinkedListProject3 top10scores = new SinglyLinkedListProject3();
        int[] scores = {3, 4, 1, 2, 6, 12, 8, 11, 10, 13};
        String[] names = {"David", "Kate", "Dwight", "Jake", "Nea", "Meg", "Adam", "Feng", "Jane", "Ace"};
        for (int i = 0; i < 10; i++){
            top10scores.addFirst(scores[i], names[i]);
            
        }
        
        top10scores.printList();
        
        System.out.println("-----------------------------------");
        
        SinglyLinkedListProject3 sortedTop10 = top10scores.sort();
        
        sortedTop10.printList();
        
        System.out.println("-----------------------------------");
        
        sortedTop10.newScore(15, "Bob");
        
        sortedTop10.printList();

    }
}
</pre>
</div>