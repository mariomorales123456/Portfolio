
<p>
In this project, you will use the classes in the DSAJ-sourcecode files to create a binary tree of integers.
</p>
<p>
In BlueJ, you can use the Java classes in DSAJ-sourcecode by importing the classes to your program.
</p>
<p>
One way to do this is to create a new Java class within one of the folders in the DSAJ-sourcecode package hierarchy, then importing the classes you need.
</p>
<p>
Navigate to the top level package in DSAJ-sourcecode project.
In the package display, create a new class, for instance, CreateLinkedBinaryTree.
Review the LinkedBinaryTree methods in package net.datastructures.
Review the constructor and update methods.
Edit the new class source code.
add the statement import net.datastructures.*;
Put (your name) in the comments of the program
Create a new static main method (remember the header for an executable main method)
Create a new object of type LinkedBinaryTree<Integer>
Pick an integer, such as 6 as root, and add it to the tree with addRoot(6)
Save the resulting Position object as your handle to the root
Add the rest of the integers from 1 to 10 as left or right node of existing nodes.
Make sure the resulting tree is ordered, with 1 as the lower left, and 10 on the lower right
Using the methods of LinkedBinaryTree, insert nodes for the integers from 1 to 10.
In the code, print out the contents of the tree inorder
Use the method Iterable<Position<E>> inorder() of AbstractBinaryTree
Next, print out the contents of the tree preorder
Finally, print out the contents of the tree postorder
</p>