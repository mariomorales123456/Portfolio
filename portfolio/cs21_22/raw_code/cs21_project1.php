<?php include('../includes/head.php'); ?>

<div class="raw_code_container">
<pre>
// Mario Morales Diego Garcia Mario Sanchez Elisa Fernandez Jaime Magana
// 6.28.18
// Cs 21 50500
// Group Project #1 Stairs
    public class Stairs { 
    public static final int STEPS = 5;
    public static void main(String[] args){
      // SUBMETHOD // Originally tried to put the loop for duplicate 'drawings' here but can't nest through submethods
        Drawing();
        
      //FLOOR
       System.out.print("**");
      for (int i = 1; i<= 5 + (STEPS * 5); i++){ // didn't want this in the Drawing(); loop
           System.out.print("*");
        }
       System.out.println();
    }
    public static void Drawing(){
        //TOP                                 // STEPS - 1 to compensate for using 0 in my expressions
       for (int j = STEPS - 1; j >= 0; j--){ //left spaces //Inverted equation to flip drawing, inverse is (int j = 0; j <= STEPS - 1, j++)
           for (int i = 1; i <= 2 + (j * 5); i++){ 
               System.out.print(" "); 
       }
       System.out.print("O  ");           // body
            for (int i = 1; i <= 6; i++){ //body //redudant to print 6 stars
           System.out.print("*");
        }
            for (int i = 1; j * 5 - (STEPS * 5 - 7) <= i; i--){ //right Spaces //Had to invert the variables again to straighten the edges
           System.out.print(" ");
        }
        System.out.println("*");
       //MIDDLE
            for (int i = 1; i <= 1 + (j * 5);i++){  //left spaces
           System.out.print(" "); 
        }
       System.out.print("/|\\ *");                 // body
            for (int i = 1; j * 5 - (STEPS * 5 - 2) <= i; i--){ //right spaces // STEPS formulate here is to make it work with any STEPS
           System.out.print(" ");                                              // Had to make a table inserting j to figure out the expression
        }
        System.out.println("*");
       //BOTTOM
            for (int i = 1; i <= 1 + (j * 5);i++){ //left spaces
           System.out.print(" "); 
        }
       System.out.print("/ \\ *");                       //body
            for (int i = 1; j * 5 - (STEPS * 5 - 2) <= i; i--){    //right spaces
           System.out.print(" ");
        }
        System.out.println("*");
       }
    }
}
</pre>
</div>