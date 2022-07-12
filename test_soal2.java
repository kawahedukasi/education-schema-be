Nama : inri veronika togatorop
Alamat Email: inritogatorop369@gmail.com

import java.util.Scanner;
public class soal3{

   public static void main(String[] args) {

    int[] arr = new int[1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1];
    int arr_count, i;

    System.out.print("Input index: ");
    arr_count = input.nextInt();

    for(i = 0; i < arr_count; i++){
      arr[i] = input.nextInt();
      if(arr[i] == 0){
        System.out.print(index ke 0 adalah integer dengan data 1);
        break;
      }
      else if(arr[i] == 2){
        System.out.print(index ke 2 adalah string dengan data kawah);
        break;
      }
      else if(arr[i] == 3){
        System.out.print(index ke 3 adalah integer dengan data 67);
        break;
      }
       else if(arr[i] == 4){
        System.out.print(index ke 4 adalah string dengan data wah);
        break;
      }
      else if(arr[i] == 5){
        System.out.print(index ke 5 adalah integer dengan data 1772);
        break;
      }
      else if(arr[i] == 6){
        System.out.print(index ke 6 adalah string dengan data edukasi);
        break;
      }
       else if(arr[i] == 7){
        System.out.print(index ke 7 adalah integer dengan data 7);
        break;
      }
       else if(arr[i] == 8){
        System.out.print(index ke 8 adalah integer dengan data 98);
        break;
      }
       else if(arr[i] == 9){
        System.out.print(index ke 9 adalah integer dengan data -1);
        break;
      }
    }

   }
}
