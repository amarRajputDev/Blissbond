let button = document.querySelector("#check-5")
let body = document.querySelector("body")
let b = document.querySelectorAll(".mtext")
let menu = document.querySelector(".meenu")
let post = document.querySelector(".post")
let hr = document.querySelectorAll("hr")
let div = document.querySelectorAll("dar")


let a = true;

button.addEventListener("click", () => {
    if (a) {
        a = false;
        console.log(b)
        console.log("dark mode start");
        body.style.backgroundColor = "black";
        menu.style.backgroundColor = "rgb(27, 27, 27)";
        menu.style.borderRight = "1px solid white";
        
        // Adding the 'lighttext' class to 'b' when switching to dark mode
        b.forEach(element => {
            element.style.color = 'white'; // Change color to white 
        });
        hr.forEach(element => {
            element.style.color = 'white'; // Change color to white 
        });
        post.style.border = "5px solid white";
        div.forEach(element => {
            element.style.border = '2px solid white'; // Change color to white 
            // Change color to white 
        });
        post.style.border = "5px solid white";
        
    } else {
        a = true;
        console.log("light mode start");
        body.style.backgroundColor = "white";
        menu.style.backgroundColor = "white";
        
       
        b.forEach(element => {
            element.style.color = 'black'; // Change color to white 
        });
        
        hr.forEach(element => {
            element.style.color = 'black'; // Change color to white 
        });
        post.style.border = "5px solid black";
    }
    div.forEach(element => {
        element.style.border = '2px solid black'; // Change color to white 
    });
        });