<?php include('../../includes/head.php'); ?>

<div class="raw_code_container">
<pre>
import net.datastructures.*;
/**
 * Mario Morales
 * 5/6/2019
 * Project 6 
 * CS22 Data Structures & Algorithms
 */
public class CreateLinkedBinaryTreeProject6
{
    public static void main(String[] args){
        LinkedBinaryTree<Integer> myTree = populateSampleTree();
        
        System.out.println("Inorder: ");
        Iterable<Position<Integer>> treeList = myTree.inorder();
        for (Position<Integer> node: treeList){
            System.out.print(node.getElement() + " ");
        }
        System.out.println();
        
        System.out.println("Preorder: ");
        treeList = myTree.preorder();
        for (Position<Integer> node: treeList){
            System.out.print(node.getElement() + " ");
        }
        System.out.println();
        
        System.out.println("Postorder: ");
        treeList = myTree.postorder();
        for (Position<Integer> node: treeList){
            System.out.print(node.getElement() + " ");
        }
        System.out.println();
    }
    
    public static LinkedBinaryTree<Integer> populateSampleTree(){
        LinkedBinaryTree<Integer> newTree = new LinkedBinaryTree<Integer>();
        Position rootHandle = newTree.addRoot(6);
        Position tier1Left = newTree.addLeft(rootHandle, 4);
        Position tier1Right = newTree.addRight(rootHandle, 8);
        
        Position tier2OuterLeft = newTree.addLeft(tier1Left, 2);
        Position tier2InnerRight = newTree.addRight(tier1Left, 5);
        Position tier2InnnerLeft = newTree.addLeft(tier1Right, 7);
        Position tier2OuterRight = newTree.addRight(tier1Right, 9);
        
        Position tier3Left = newTree.addLeft(tier2OuterLeft, 1);
        Position tier3InnerRight = newTree.addRight(tier2OuterLeft, 3);
        Position tier3OuterRight = newTree.addRight(tier2OuterRight, 10);
        
        return newTree;
    }
}
</pre>
</div>