
package test;

import java.util.Scanner;

public class Test_soal1 {
    public static void main(String[] args) {
   for(int i = 1; i <= 200; i++) {           // count from 1 to 100
            if (((i % 5) == 0) && ((i % 11) == 0)) // Is it a multiple of 5 & 7?
                System.out.print("fizzbuzz");   
            else if ((i % 5) == 0)                // Is it a multiple of 5?
                System.out.print("fizz"); 
            else if ((i % 11) == 0)                // Is it a multiple of 7?
                System.out.print("buzz"); 
            else System.out.print(i);             // Not a multiple of 5 or 7
            System.out.print(" ");                
        }
        System.out.println( );
    }
}