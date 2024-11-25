// variable
//keyword (var, let, const)
let freet = "Good Morning";

greet = "Good Afternoon";

const phi = 3.14;

console.log(greet);

const hours = new Date().getHours();

// Percabangan
if (hours > 18) {
    greet = "Good Night";
} else if (hours > 10) {
    greet = "Good Afternoon";
}

console.log(greet);

// Function
/**
 * function basic
 * arrow function
 */

function greetTo() {
    let greet = "Good Morning";

    const hours = new Date().getHours();

if (hours > 18) {
    greet = "Good Night";
} else if (hours > 10) {
    greet = "Good Afternoon";
}
console.log(greet);
}
greetTo();

const helloWorld = () => {
    return "Hello World";
}

console.log(helloWorld());


// Looping
for (let i = 0; i < 10; i++) {
    console.log(i);
}