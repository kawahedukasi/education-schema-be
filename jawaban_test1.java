public class soal_test1 {
    public static void main(String[] args) {

        int[] data = {1, 2, 4, 3, 10, 11, 20, 5, 100, 200};

        for (int angka : data) {
            if (angka == 5) {
                System.out.println("Fizz");
            } else if (angka == 11) {
                System.out.println("Buzz");
            } else {
                System.err.println(angka);
            }
        }
        
    }
}
