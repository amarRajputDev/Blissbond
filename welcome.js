let button = document.querySelector("#check-5")
let body = document.querySelector("body")
let menu = document.querySelector(".meenu")
let b = document.querySelectorAll(".mtext")
let hr = document.querySelector("hr")
let card = document.querySelectorAll(".card-body")

let a = true;

button.addEventListener("click", () => {
    if (a) {
        a = false;
        console.log(b)
        console.log("dark mode start");
        body.style.backgroundColor = "black";
        menu.style.backgroundColor = "rgb(27, 27, 27)";
        menu.style.borderRight = "1px solid white";
        hr.style.color="white"
        // Adding the 'lighttext' class to 'b' when switching to dark mode
        b.forEach(element => {
            element.style.color = 'white'; // Change color to white 
        });
        card.forEach(element => {
            element.style.backgroundColor = 'rgb(27, 27, 27)';
            element.style.color = 'white'; // Change color to white 
        });
    } else {
        a = true;
        console.log("light mode start");
        body.style.backgroundColor = "white";
        menu.style.backgroundColor = "white";
        hr.style.color="black"
       
        b.forEach(element => {
            element.style.color = 'black'; // Change color to white 
        });
        card.forEach(element => {
            element.style.backgroundColor = 'white';
            element.style.color = 'black'; // Change color to white 
        });
        
    }
        });