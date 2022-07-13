
package test;

import java.util.Scanner;

public class Test_soal1 {
    public static void main(String[] args) {
   for(int i = 1; i <= 200; i++) {           
            if (((i % 5) == 0) && ((i % 11) == 0)) 
                System.out.print("fizzbuzz");   
            else if ((i % 5) == 0)               
                System.out.print("fizz"); 
            else if ((i % 11) == 0) 
                System.out.print("buzz"); 
            else System.out.print(i);
            System.out.print(" ");                
        }
        System.out.println( );
    }
}
