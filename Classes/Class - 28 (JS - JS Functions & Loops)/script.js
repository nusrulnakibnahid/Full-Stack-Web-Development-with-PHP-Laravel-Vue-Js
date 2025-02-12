let name = "Sobuj";

function myFunction(){
    console.log("Hello Function");
}

myFunction();

function sumTest(a,b){
    let result = a+b;
    return result;
}

let sumResult =  sumTest(10,20);

console.log(sumResult*20);

//Named Function

function sayHello(){
    console.log("Hello I am named function");
}
sayHello();



//Anonymous Function

let anoFunction = function (){
    console.log("Hello, I am Sobuj");
}

anoFunction();

//Arrow Function
let multiplyTwoNumbers = (x,y) => x*y;

console.log(multiplyTwoNumbers(23,67));

//Immediately Invoked Function Expression (IIFE)

(function (){
    console.log("This function will run automatically");
})();

//recursive function

function factorial(n){
    if(n===0){
        return 1;
    }else{
        let result = n*factorial(n-1);
        return result;
    }
}

console.log(factorial(4));


let firstName = "Sobuj";
let lastName = "Ahmed";

let fullNameWithGr = "Hello everyone, my name is "+firstName+" "+lastName+" Welcome to my page";

//Template literals

let fullName = `Hello everyone, my name is ${firstName} ${lastName}. <b>Welcome to my page</b>`;

console.log(fullNameWithGr);

console.log(fullName);
document.write(fullName);


 (function (){
    console.log("Hello, I am a test function");
})();

let myFirstName = "Nahid";
let myLastName = "Haider";

console.log("1. Hi, I am "+myFirstName+" "+myLastName);

console.log(`Hi, I am ${myFirstName} ${myLastName}`);


//0,1,1,2,3,5,8..

function fibonacci(n){
    if(n <=1){
        return n;
    }else{
        let result = fibonacci(n-1)+fibonacci(n-2);
        return result;
    }
}

console.log(fibonacci(10));





function arraySum(numbers,index=0){
    if(index=== numbers.length){
        return 0;
    }else{
        let result = numbers[index] + arraySum(numbers,index+1);

        return result;
    }
}

console.log(arraySum([1,2,3,78,54]));





function sumWithForLoop(testArr){

    let sum = 0;

    for(let i=0; i<testArr.length; i++){
        sum = sum + testArr[i]
    }
    
    console.log(sum);
}

sumWithForLoop([1,2,3,4,5]);

function sumRecWay(testArrRec, i = 0){

    if(i === testArrRec.length){
        return 0;
    }

    let sumResult = testArrRec[i] + sumRecWay(testArrRec, i+1);

    return sumResult;

}

console.log(sumRecWay([5,2,3,4]));

function sumRecWay2nd(testArrRec, i = 1){

    if(i === testArrRec.length){
        return 0;
    }

    let sumResult = testArrRec[i];

    return sumResult;

}

console.log(sumRecWay2nd([5,2,3,4]));


let testVar = 0;


testVar = 10;

testVar = 10+2;

testVar = 10+2+3;

console.log(testVar);





