<div class="raw_code_container">
<pre>
/**
 Mario Morales
 Project 2
 March 15 2019
 CS22 Data Structures & Algorithms
 **/

import java.util.*;
import java.io.*;
public class Project2 {
    public static void main (String[] args)
        throws FileNotFoundException
    {
        File gettysburg = new File("gettysburg.txt");
        
        ArrayList<String> words = new ArrayList<String>();
        ArrayList<Integer> wordCount = new ArrayList<Integer>();
        ArrayList<String>  parsedFile = new ArrayList<String>();
        
        parseFile(gettysburg, parsedFile);
        
        for (int i = 0; i < parsedFile.size(); i++){
            String currentWord = parsedFile.get(i);
            if(onTheList(words, currentWord)){
            words.add(currentWord);
            
            int counter = 0;
            for (int j = 0; j < parsedFile.size(); j++){
                if (currentWord.equalsIgnoreCase(parsedFile.get(j))){
                    counter++;
                }
            }
            wordCount.add(counter);
           }
        }
        
        
        for (int i = 0; i < words.size(); i++){
            System.out.print(words.get(i) + ", ");
            System.out.print(wordCount.get(i));
            System.out.println();
        }
        
        
        //System.out.println(words);
        //System.out.println(wordCount);
        
    }
    
    public static boolean onTheList(ArrayList<String> list, String testWord){
        if (list.size() > 0){
            for (int i = 0; i <= list.size() - 1; i++){
            String temp = list.get(i);
                if (temp.equalsIgnoreCase(testWord)){
                    return false;
            }
        }
     }
     return true;
    }
    
    public static boolean isThereANumber(String word){
        for (int i = 0; i <= word.length() - 1; i++){
            if(Character.isDigit(word.charAt(i))) {
            return true;
        }
        }
        return false;
    }
    
    
    public static void parseFile (File file, ArrayList<String> parsedFile) throws FileNotFoundException{
        Scanner readDocument = new Scanner(file);
        
        while (readDocument.hasNext()){
        String currentWord = readDocument.next();

        if (currentWord.endsWith("-") || isThereANumber(currentWord)){
                //do nothing
        }
        else if (currentWord.endsWith(",") || currentWord.endsWith(".")){
                String tempWord;
                tempWord = currentWord.substring(0, currentWord.length() - 1);
                parsedFile.add(tempWord);
        }
        else {
                parsedFile.add(currentWord);
        }
       }
    }
}
</pre>
</div>