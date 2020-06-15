<code>
/**
 Mario Morales
 CS22 Data Structures & Algorithms
 April 17, 2019
 Project 5 Ch 6
 */
import java.util.*;
import java.io.*;
public class Project5ch6
{
    public static void main(String[] args) throws FileNotFoundException{
        //for(int i = 0; i < 10; i++){ System.out.println(i);}
        
        //test code
        //int[] a = {3, 2, 1, 1, 1}; //8
        //int[] b = {4, 3, 2}; //9
        //int[] c = {1, 1, 4, 1};  //7
        
        //37455 79656 95073
        Scanner input1 = new Scanner(new File("testcase1.txt"));
        Scanner input2 = new Scanner(new File("testcase2.txt"));
        Scanner input3 = new Scanner(new File("testcase3.txt"));
        int[] array1 = new int[47599];
        int[] array2 = new int[48091];
        int[] array3 = new int[84149];
        int index = 0;
        int sum = 0;
        while (input1.hasNext()){
            int digit = input1.nextInt();
            array1[index] = digit;
            index++;
            sum += digit;
        }
        System.out.println("File 1 has " + index + " numbers");
        System.out.println("File 1's sum is " + sum);
        index = 0;
        sum = 0;
        while (input2.hasNext()){
            int digit = input2.nextInt();
            array2[index] = digit;
            index++;
            sum += digit;
        }
        System.out.println("File 2 has " + index + " numbers");
        System.out.println("File 2's sum is " + sum);
        index = 0;
        sum = 0;
        while (input3.hasNext()){
            int digit = input3.nextInt();
            array3[index] = digit;
            index++;
            sum += digit;
        }
        System.out.println("File 3 has " + index + " numbers");
        System.out.println("File 3's sum is " + sum);
        index = 0;
        /*
        int sum = 0;
        for(int i = array1.length - 1; i >= 0; i--){
            sum += array1[i];
            if (sum == 2190913){
                System.out.println("Array 1 matches");
            }
        }
        sum = 0;
        for(int i = array2.length - 1; i >= 0; i--){
            sum += array2[i];
            if (sum == 2190913){
                System.out.println("Array 2 matches");
            }
        }
        sum = 0;
        for(int i = array3.length - 1; i >= 0; i--){
            sum += array3[i];
            if (sum == 2190913){
                System.out.println("Array 3 matches");
            }
        }
        */
        
        //expected outcome  2190913
        
        System.out.println(stackLCD(array1, array2, array3));
        
    }
    public static int stackLCD(int[] a, int[] b, int[] c){
        //sum the array totals
        int aTotal = 0;
        int bTotal = 0;
        int cTotal = 0;
        for (int i = 0; i < a.length; i++){
            aTotal += a[i];
        }
        for (int i = 0; i < b.length; i++){
            bTotal += b[i];
        }
        for (int i = 0; i < c.length; i++){
            cTotal += c[i];
        }
        //sort the array totals by size and pass them sorted to the algorithm method
        if (aTotal >= bTotal && bTotal >= cTotal){
            return sortedArrayLCD(a, b, c, aTotal, bTotal, cTotal);
        }
        else if (bTotal >= cTotal && cTotal >= aTotal){
            return sortedArrayLCD(b, c, a, bTotal, cTotal, aTotal);
        }
        else if (cTotal >= aTotal && aTotal >= bTotal){
            return sortedArrayLCD(c, a, b, cTotal, aTotal, bTotal);
        }
        //more options
        else if (cTotal >= bTotal && bTotal >= aTotal){
            return sortedArrayLCD(c, b, a, cTotal, bTotal, aTotal);
        }
        else if (aTotal >= cTotal && cTotal >= bTotal){
            return sortedArrayLCD(a, c, b, aTotal, cTotal, bTotal);
        }
        else if (bTotal >= aTotal && aTotal >= cTotal){
            return sortedArrayLCD(b, a, c, bTotal, aTotal, cTotal);
        }
        //debug
        else {
        //   System.out.println("Debug: There a logic error."); //debug purposes
            return -1;
        }
    }
    
    public static int sortedArrayLCD(int[] largest, int[] mid, int[] smallest, int largestTotal, int midTotal, int smallestTotal){
        if (smallestTotal == largestTotal && largestTotal == midTotal){  //if all arrays are same size case
            return smallestTotal;
        }
        int indexStartMid = 0;
        int indexStartLargest = 0;
        System.out.println("S " + smallestTotal + " M " + midTotal + " L " + largestTotal);
        System.out.println();
        //int lowestLCD = 0;
        for(int i = 0; i < smallest.length; i++){ // compare smallest array first
            if(true){
            for (int j = indexStartLargest; j < largest.length; j++){ //comparing to largest array, if there is a lowest commonn denominator compare that # to 3rd array
                if (smallestTotal == largestTotal){
                    for (int k = indexStartMid; k < mid.length; k++){ //if there is another match return the matching number
                        if (smallestTotal == midTotal){
                            //return smallestTotal;
                            return smallestTotal;
                            /* (debug code for multiple LCDs)
                            System.out.println("----------------------------------------");
                            System.out.println("S " + smallestTotal + " M " + midTotal + " L " + largestTotal);
                            System.out.println("----------------------------------------");
                            break;
                            */
                        }
                        else if(smallestTotal > midTotal){
                            indexStartMid = k;
                            break;
                        }
                        else {
                            //System.out.print("M " + midTotal + " - " + " [k" + k + "] " +  mid[k] + " ");
                            midTotal -= mid[k];
                            //System.out.println("= " + midTotal);
                        }
                    }
                    //System.out.print("L " + largestTotal + " - " + " [j" + j + "] " +  largest[j] + " ");
                    largestTotal -= largest[j];
                    //System.out.println("= " + largestTotal);
                }
                else if (smallestTotal > largestTotal){
                    indexStartLargest = j;
                    break;
                }
                else {
                    //System.out.print("L " + largestTotal + " - " + " [j" + j + "] " +  largest[j] + " ");
                    largestTotal -= largest[j];
                    //System.out.println("= " + largestTotal);
                }
            }
          }
            //System.out.print("S " + smallestTotal + " - " + " [i" + i + "] " + smallest[i] + " ");
            smallestTotal -= smallest[i];
            //System.out.println("= " + smallestTotal);
        }
        //System.out.println(lowestLCD);
        return 0; //no match return 0
    }
}
</code>