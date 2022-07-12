//MUHAMMAD SANDY PUTRA RIYADI - instagram : @msandypr
/* 1. Kami mempunyai data array dengan nama variable  data : 

    var data = [1, 2, 4, 3, 10, 11, 20, 5, 100, 200];

    - buatlah program FizzBuzz dengan looping: 
        - Jika angka yang keluar adalah angka 5 maka output yang di hasilkan adalah "Fizz"
        - Jika angka yang keluar adalah angka 11 maka output yang di hasilkan adalah "Buzz"
        - Jika angka yang keluar adalah 5 dan 11 maka output yang di hasilkan adalah "FizzBuzz" */

//JAWABAN
let msandyprFizzBuzz = function(){

        let arr = [1, 2, 4, 3, 10, 11, 20, 5, 100, 200]

    for(let sandy = 1; arr.length < 200; sandy++){
        if(sandy % 5 === 0 && sandy % 11 === 0){
            arr.push("FizzBuzz")
        } else if(sandy % 5 === 0){
            arr.push("Fizz");
        } else if(sandy % 11 === 0){
            arr.push("Buzz");
        } else {
            arr.push(sandy)
        }
    }
    return arr
};

console.log(msandyprFizzBuzz())