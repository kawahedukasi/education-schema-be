class FizzBuzz {
//Haikal Ferdian
//test soal 1
//Kawah Edukasi Batch III
    public static void main(String[] args) {
        //jika kelipatan 5, print "Fizz"
        //jika kelipatan 11, print "Buzz"
        //jika kelipatan keduanya 5 dan 11, print "FizzBuzz"
        int[] arr = {1, 2, 4, 3, 10, 11, 20, 5, 100, 200};
        for(int i = 0; i <= arr.length; i++)

            if(i % 5 == 0 && i % 11 == 0){
                System.out.println("FizzBuzz");
            }
            else if(i % 5 == 0){
                System.out.println("Fizz");
            }
            else if(i % 11 == 0){
                System.out.println("Buzz");
            }
            else{
                System.out.println(i);
            }
    }
}
