void main() {
  soal1();
}

void soal1() {
  const List<int> data = [1, 2, 4, 3, 10, 11, 20, 5, 100, 200];
  for (var i = 0; i < data.length; i++) {
    if (data[i] == 5 && data[i] == 11) {
      print("FizzBuzz");
    } else if (data[i] == 5) {
      print("Fizz");
    } else if (data[i] == 11) {
      print("Buzz");
    } else {
      print(data[i]);
    }
  }
}
