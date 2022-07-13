public class soal_test1 {
    public static void main(String[] args) {

        for (int i = 1; i <= 200; i++){
            if (i % 5 == 0 && i % 11 == 0){
                System.out.println("FizzBuzz");
            } else if (i % 5 == 0) {
                System.out.println("Fizz");
            } else if (i % 11 == 0) {
                System.out.println("Buzz");
            } else {
                System.err.println(i);
            }
        }
        
    }
}
