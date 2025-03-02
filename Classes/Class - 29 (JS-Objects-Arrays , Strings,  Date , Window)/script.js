//Object
let car = {
    brand: "Toyota",
    model: "Corolla",
    year: 2021,
    features:["AC","Bluetooth","CC"]
};

console.log(car.model);
console.log(car.features[1]);

//Adding new property

car.color = "Blue";

console.log(car.color);

//JSON 

//convert OBJ to JSON
let carJSON = JSON.stringify(car);

console.log(carJSON);
console.log(typeof carJSON);

console.log(car);
console.log(typeof car);

let testJSONData= '{"brand":"Toyota","model":"Corolla","year":2021,"features":["AC","Bluetooth","CC"],"color":"Blue"}';
//Convert JSON to OBJ
let convertToObj = JSON.parse(testJSONData);

console.log(convertToObj);

console.log(`The converted Obj data ${convertToObj.model}`);


//Array

let fruits = ["Apple","Orange","Banana","Cherry","Apple"];

console.log(fruits[3]);

console.log(fruits.length);

//Adding element to the last
fruits.push("Mango");

console.log(fruits);

//Removing element from last position

fruits.pop();
console.log(fruits);

//Adding element to First

fruits.unshift("Pineapple");
console.log(fruits);

fruits.unshift("Mango","Test","Test 2");
console.log(fruits);

//Removing element from first position

fruits.shift();
console.log(fruits);

//For Each Method

fruits.forEach(function(fruit){
    console.log(fruit);
});

//forEach with Index

fruits.forEach(function(fruit, index){
    console.log(`The fruit name is ${fruit} and the index number is: ${index}`);
});

fruits.forEach(fruit => console.log(fruit));

//Searching elements from an Array

console.log(fruits.includes("Apple"));

console.log(fruits.indexOf("Apple"));

console.log(fruits.lastIndexOf("Apple"));

let filteredFruits = fruits.find(fruit => fruit.length > 5);
console.log(filteredFruits);

let filterFruitsAll = fruits.filter(fruit => fruit.length > 5);
console.log(filterFruitsAll);

//Array Mapping

let upperCaseFruits = fruits.map(fruit => fruit.toUpperCase());
console.log(upperCaseFruits);

//String

let singleQuote = 'Hello';
let doubleQuote = "World";
let templateLi = `Hello ${doubleQuote}`;

//String Length
console.log(templateLi.length);

console.log(singleQuote[1]);

//upper case

console.log(templateLi.toLocaleUpperCase());

//lower case
console.log(templateLi.toLocaleLowerCase());

//replace 

console.log(templateLi.replace("Hello","Hi"));

//replace all

console.log(templateLi.replaceAll("o","Q"));


let myName = "    Nakib Nahid   ";
console.log(myName);

let nameTrim = myName.trim();
console.log(nameTrim);

console.log(myName.trimEnd());
console.log(myName.trimStart());

let stringSplit = "Asad Nur,Alamin,Pias,Jewel,Mizan";

console.log(stringSplit);
console.log(stringSplit.split(","));

let languagePr = "JavaScript";
console.log(languagePr);
console.log(languagePr.slice(4,10));


//Date

let now = new Date();
console.log(now);

console.log(now.getFullYear());
console.log(now.getMonth());
console.log(now.getDate());
console.log(now.getTime());
console.log(now.getHours());
console.log(now.getMinutes());


//Math Object

console.log(Math.PI);

let price = 145.4;
console.log(Math.round(price));

console.log(Math.ceil(price));
console.log(Math.floor(price));


//Window Object

console.log(window.innerWidth);
console.log(window.innerHeight);
console.log(window.location.href);
console.log(window.document.title);

/*
window.alert("Hello, I am alert");
window.confirm("Do you wanna confirm ?")

window.prompt("Enter your Name")
*/

setInterval(()=>document.write("Hello, how are you? <br>"),3000);

setTimeout(()=>document.write("I am nobody"),4000);

//Navigator Objects

console.log(navigator.appName);
console.log(navigator.appVersion);
console.log(navigator.userAgent);
console.log(navigator.platform);
console.log(navigator.onLine);
console.log(navigator.hardwareConcurrency);


let numbers = [1,2,3,4,5,6];
let sum = numbers.reduce((acc,num) => acc+num);
console.log(sum);

