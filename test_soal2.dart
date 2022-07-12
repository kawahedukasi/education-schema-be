void main() {
  soal2();
}

void soal2() {
  const List<dynamic> data2 = [
    1,
    "ka",
    67,
    "wah",
    "1772",
    "edukasi",
    7,
    98,
    -1
  ];

  for (var j = 0; j < data2.length; j++) {
    if (data2[j].runtimeType == int && data2[j] < 0) {
      print('index ke $j Tidak bisa di validasi sistem');
    } else {
      print(
          'index ke $j adalah ${data2[j].runtimeType} dengan data ${data2[j]}');
    }
  }
}
