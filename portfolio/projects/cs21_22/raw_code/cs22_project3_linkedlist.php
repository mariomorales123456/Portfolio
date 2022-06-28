<?php include('../../includes/head.php'); ?>

<div class="raw_code_container">
<pre>
import java.util.ArrayList;
/**
 Mario Morales
 Project 3
 CS22 Data Structures & Algorithms
 3/25/19
 */
public class SinglyLinkedListProject3
{
    private static class Node{
        private int score;
        private String name;
        private Node next;
        
        public Node(int s, String ns, Node n){
            score = s;
            name = ns;
            next = n;
        }
        public int getScore(){
            return score;
        }
        public String getName(){
            return name;
        }
        public Node getNext(){
            return next;
        }
        public void setNext(Node n){
            next = n;
        }
    }
    private Node head = null;
    private Node tail = null;
    private int size = 0;
    
    public SinglyLinkedListProject3(){}
    public int size(){
        return size;
    }
    public boolean isEmpty(){
        return size==0;
    }
    public String firstName(){
        if (isEmpty()){
            return null;
        }
        return head.getName();
    }
    public String lastName(){
        if (isEmpty()){
            return null;
        }
        return tail.getName();
    }
    public int firstScore(){
        if (isEmpty()){
            return 0;
        }
        return head.getScore();
    }
    public int lastScore(){
        if (isEmpty()){
            return 0;
        }
        return tail.getScore();
    }
    public SinglyLinkedListProject3 sort(){
        SinglyLinkedListProject3 sortedList = new SinglyLinkedListProject3(); //create a new object linked list to return
        Node current = head; //initialize head of list as current
        int maxScore = 0; //initializing variable to store max score
        String maxName = ""; //initializing variable to store max score's associated name
        int lastScoreAdded = 20;
        ArrayList<String> exceptionList = new ArrayList<String>();
        while (current != null) { //loop until current Node reaches null object
            Node compare = head; //intialize another Node as the head of current list, allows program to traverse linkedlist
            while (compare != null){  //loop until compare Node reaches null object
                if (maxScore <= compare.getScore() && compare.getScore() < lastScoreAdded){ //extract largest score 
                    maxScore = compare.getScore();
                    maxName = compare.getName();
                }
                compare = compare.getNext(); //go to next Node in the list, then loop until you reach end of "compare" node
            }
            lastScoreAdded = maxScore;
            sortedList.addFirst(maxScore, maxName); //pass largest numbers & names, in order, to a new list object created earlier
            maxScore = 0;
            maxName = "";
            current = current.getNext();//go to next Node in the list, then loop until you reach end of "current" node
        }
        
        while (head != null){ //return to original list and remove all node pointers, effectively deleting it.
            this.removeFirst();
        }
        
        return sortedList; //return now sorted list.
    }
    public boolean checkExceptionList(ArrayList<String> list, String name){
        for (int i = 0; i < list.size(); i++){
            if (list.get(i).equals(name)){
                return false;
            }
        }
        return true;
    }
    public void newScore(int newScore, String newName){
        Node current = head; //initialize 1st node on list
        Node next = current.getNext(); //initialize 2nd node on list
        Node lowScore = head; //initialize head
        Node highScore = tail; //initialize tail
        if (newScore < lowScore.getScore()){  //if score is lower than lowest do nothing
              //do nothing
        }
        else if (newScore > highScore.getScore()) {  //if score is higher than highest add it as tail and remove head
              this.addLast(newScore, newName);
              this.removeFirst();
        }
        else {
        while (current != null){ //loop through list until you reach a null object
              if (newScore > current.getScore() && newScore <= next.getScore()){  //if score is between two nodes
                    Node newest = new Node(newScore, newName, next);  //create a new node, set pointer as next node
                    current.setNext(newest); //set current nodes pointer to new node
                    this.removeFirst(); //remove lowest score node
                }
              current = current.getNext(); //if none the above happen, set current to next node 
              if (current != null){
                    next = current.getNext(); //and set next node to new currents new node, unless we have reached end of list.
                }
        }
        }
    }
    public void printList(){
        Node current = head;
        while (current != null){ //loop through list
            System.out.println(current.getScore() + " " + current.getName()); //extract instances and print them
            current = current.getNext(); //go to next node
        }
    }
    public void addFirst(int s, String ns){
        head = new Node(s, ns, head);
        if (size == 0){
            tail = head;
        }
        size++;
    }
    public void addLast(int s, String ns){
        Node newest = new Node (s, ns, null);
        if (isEmpty()){
            head = newest;
        }
        else {
            tail.setNext(newest);
            tail = newest;
            size++;
        }
    }
    public void removeFirst(){
        if (isEmpty()) { 
            // do nothing
        }
        head = head.getNext();
        size--;
        if (size == 0 ){
            tail = null;
        }
    }
}
</pre>
</div>