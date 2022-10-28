/* const firstName = 'Kim';

let lastName = 'Kardashian';

console.log(firstName); */



/* const firstName= "Kim";

const greet = (username) => {
	console.log("Welcome " + username + " to this site!");
};

greet(firstName); */



/* const firstName= "Kim";

const greet = (firstName, lastName, age) => {
    const greeting = `Welcome ${firstName} ${lastName} to this site! You are ${age} years old.`;
	console.log(greeting);
};

greet("Kim", "Kardashian", 43); */



/* const sum = function (x, y) {
    return x + y;
};

const sumResult = sum (10, 20);
console.log(sumResult); */


console.log(window.location);

/*
const words = ["awesome", "brilliant", "super", "great", "epic"];

console.log(words[3]);

const joinedWords = words.join("");

const addedWord = words.push("good");

console.log(words);

words.reverse(); // Tar arrayen baklänges
words.pop(); // Tar bort det sista i arrayen
words.shift(); // Tar bort det första i arrayen

console.log(words.split) // Delar upp t.ex. ett ord.
*/

const words = ["awesome", "brilliant", "super", "great", "epic"];

for (let index = 0; index < words.length; index++) {
    const word = words[4];

    console.log(word);
}

words.forEach((word) => {
    console.log("word");
});

const uppercaseWords = words.map((word) => {
    return word.toUpperCase();
});



const filteredWords = words.filter((word) => {
    if (word.length ===5) {
        return true;
    }
    return false
});
console.log(words);
console.log(uppercaseWords);
console.log(filteredWords);


const task = {
    duration: 20,
    name: "Do the dishes",
}

console.log(task.name); // Detta skriver ut namet jag lagt i objektet

const tasks = [
    {name: "Do the dishes", duration: 30},
    {name: "Walk the dog", duration: 50},
    {name: "Take a nap", duration: 120},
]

tasks.forEach((task) => {
    console.log(`${task.name} will take ${task.duration} minutes.`);
});