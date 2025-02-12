// Variables
let name = "John"; // String
const age = 25; // Number
var isStudent = false; // Boolean

// Comments
// This is a single-line comment
/* This is a 
   multi-line comment */

// Data Types
let number = 10; // Number
let text = "Hello"; // String
let isTrue = true; // Boolean
let arr = [1, 2, 3]; // Array
let obj = { key: "value" }; // Object
let notDefined; // Undefined
let emptyValue = null; // Null

// Operators
let sum = 5 + 3; // Addition
let difference = 10 - 4; // Subtraction
let product = 2 * 3; // Multiplication
let quotient = 10 / 2; // Division
let remainder = 10 % 3; // Modulus
let isEqual = (5 == "5"); // Equality (true)
let isStrictEqual = (5 === "5"); // Strict Equality (false)

// If-else statements
if (age >= 18) {
    console.log("You are an adult.");
} else {
    console.log("You are a minor.");
}

// Switch case statements
let day = "Monday";
switch (day) {
    case "Monday":
        console.log("Start of the week!");
        break;
    case "Friday":
        console.log("Weekend is coming!");
        break;
    default:
        console.log("Regular day.");
}

// For loop
for (let i = 0; i < 5; i++) {
    console.log("Iteration: " + i);
}

// While loop
let count = 0;
while (count < 3) {
    console.log("Count: " + count);
    count++;
}

// Do-while loop
do {
    console.log("Do-while loop executed");
} while (false);

// For-in loop (Iterating over object properties)
let person = { name: "Alice", age: 30, city: "New York" };
for (let key in person) {
    console.log(key + ": " + person[key]);
}

// For-of loop (Iterating over array values)
let numbers = [10, 20, 30];
for (let num of numbers) {
    console.log(num);
}

// Function
//def function greet(name) {
    return "Hello, " + name + "!";
//}
console.log(greet("John"));

// Object
let car = {
    brand: "Toyota",
    model: "Corolla",
    year: 2022,
    start: function () {
        console.log("Car started");
    }
};
console.log(car.brand);
car.start();
