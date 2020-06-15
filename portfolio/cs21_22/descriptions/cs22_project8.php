
<p>
Given a heap H and a key k, give an algorithm to compute all the entries in H having a key less than or equal to k.
</p>
<p>
For example, given the heap of Figure 9.12a and query k = 7, the algorithm should report the entries with keys 2, 4, 5, 6, and 7 (but not necessarily in this order).
</p>
<p>
Your algorithm should run in time proportional to the number of entries returned, and should not modify the heap.
</p>
<p>
Implement your algorithm in a new class. Hint: you may import the DSAJ classes and extend HeapPriorityQueue<K,V>
Your new class should handle integer keys and String entries, as above. 
Create a new method to return a list or array. For instance, List<V> getEntriesLessThan(k) returns a List of entries of type V whose keys are less than k.
Test your method with input according to the example. In your main class, create a new variable of your class, and a new empty heap
Add all the entries in Figure 9.12a, as above
You can use the example provided in the file, UsePriorityQueues.java Preview the document(in Ch. 9 Canvas)
After creating the heap and adding data, call your method on the object
Print out the results in any order.
Submit at least two files
Your class, with the modifications
A calling program including the main method, perhaps as part of your new class
A text file with the results
</p>