<code>
/**
Mario Morales
Small Project 1 isEven
CS22 Data Structures & Algorithms
Mar 11 2019
 */
public class Project1IsEven
{
   public static void main(String[] args){
       for (int i = 0; i <= 3; i++){
       if (isEven(i)){
           System.out.println(i + " is even");
       }
       else {
           System.out.println(i + " is odd");
        } 
    }
    }
    
   public static boolean isEven(int a){
    return ((a & 1) == 0);
    }
}
</code>