<?php include('../../includes/head.php'); ?>

<div class="raw_code_container">
<pre>
/**
 * Mario Morales
 * CS22 Data Structures & Algorithms
 * Project 8
 * Project CH9 Get Heap entries less than K
 */
/**
 Create a new method to return a list or array. For instance, List<V> getEntriesLessThan(k) 
 returns a List of entries of type V whose keys are less than k.
 */


//import net.datastructures.HeapPriorityQueue;
//import net.datastructures.AbstractPriorityQueue;
//import net.datastructures.Entry;
import net.datastructures.*;
import java.util.ArrayList;
import java.util.Comparator;
public class Project8Heap<K,V> extends HeapPriorityQueue<K,V> {
    public static void main(String [] args){
        Integer[] myKeys = {16, 15, 25, 5, 9, 14, 12, 2, 4, 7, 11, 8, 6, 20, 10};
        String[] myValues = {"X", "K", "J", "A", "F", "E", "H", "B", "C", "Q", "S", "W", "Z", "B", "I"};
        Project8Heap<Integer, String> myHPQ = new Project8Heap(myKeys, myValues);  //constructor for my class using a super() wrapper 
                                                                                   //to create HPQ
                                               

        
        ArrayList<String> queryList = new ArrayList<String>();  //list to hold values of keys under 7
        
        PQEntry<Integer, String> query = new PQEntry<>(7, "");  //wrapper for 7 couldn't figure out another why to wrap 7 as a K value
        
        //System.out.print(query.getKey()); //checking to see if wrapper can print integer
        
        queryList = myHPQ.queryReturn(query, queryList, 0);
        
        //myHPQ.test();
        
        for(int i = 0; i < queryList.size(); i++){
            System.out.print(queryList.get(i) + " ");
        }
        
    }
    
    public Project8Heap(K[] keys, V[] values){ //constructor for my class, just a wrapper of original HPQ class from datastructures.net
        super(keys, values);
    }
    
    /* /inheritance internals/                                                 //useful methods from HPQ class from datastructures.net                                 
     * /array/
     * protected int parent(int j) { return (j-1) / 2; }     // truncating division
     * protected int left(int j) { return 2*j + 1; }
     * protected int right(int j) { return 2*j + 2; }
     * protected boolean hasLeft(int j) { return left(j) < heap.size(); }
     * protected boolean hasRight(int j) { return right(j) < heap.size(); }
     * /node/
     * public K getKey() { return k; }
     * public V getValue() { return v; }*/
       
    /*protected void test(){                               //testing to see if i can gain access to internal heap with getkey/getvalue
        Entry<K, V> temp = heap.get(0);
        System.out.println((heap.get(0)).getKey());
        System.out.println((heap.get(0)).getValue());
    }*/
    
    protected ArrayList<V> queryReturn(Entry<K, V> query, ArrayList<V> list, int root){  //recursive method to gather keys based on
                                                                                          //comparison
        //System.out.println((heap.get(0)).getKey());
        Entry<K, V> temp = heap.get(root);
        //ArrayList<V> tempList = new ArrayList<V>();
        
        //System.out.println(compare(query, temp));
        if(temp == null){                                                                 //avoids externals & empty heaps
            //do nothing
        }
        else if (compare(query, temp) >= 0){                                              //really gheto way to compare keys, based
                                                                                          //on compare() method from abstract
            if (hasLeft(root)){
                //tempList = 
                queryReturn(query, list, left(root));                                     //recursive call using HPQ utilities
                /*for (int i = 0; i < tempList.size(); i++){
                    list.add(tempList.get(i));
                }*/
            }
            if (hasRight(root)){
                //tempList = 
                queryReturn(query, list, right(root));                                          //recursive call using HPQ utilities
                /*for (int i = 0; i < tempList.size(); i++){
                    list.add(tempList.get(i));
                }*/
            }
            list.add(temp.getValue());                                                          //adding values to arraylist
        }
        return list;
    }
}
</pre>
</div>