let arrayOfWelcomingChangeable = [
    "World !",
    "Every Body !",
    "Eng School !",
    "Users !",
];

let welcoming_changeable = document.querySelector(".welcoming-changeable");
let square_pracit = document.querySelectorAll(".square-pracit");

setInterval(() => {
    let random = Math.floor(Math.random() * 3);
    welcoming_changeable.innerHTML = arrayOfWelcomingChangeable[random];
}, 1000);
// ############################### Make Navbar Fixed ##################################
let navbar = document.querySelector('.navbar')
navbar.style.transition = "all 0.5s linear"

window.onscroll = function () {
    if (window.scrollY > 200) {
        navbar.style.position = "fixed"
        navbar.style.top = "fixed"
        navbar.style.left = "0"
        navbar.style.right = "0"
        navbar.style.zIndex = "9999"
        navbar.style.background = "#0d6efd"

    }
    else {
        navbar.style.position = "static"
        navbar.style.background = "#1955cc"
    }
}
// ############################### Make Navbar Fixed ##################################
// ############################### Add Actie Class To Links ##################################
const activePage = window.location.pathname;
console.log(activePage);

const navLinks = document.querySelectorAll(".navbar .navbar-collapse .navbar-nav  .nav-item  .nav-link")

for (let index = 0; index < navLinks.length; index++) {
    navLinks[index].onclick = function () {

        console.log(navLinks[index].href);
        for (let i = 0; i < navLinks.length; i++) {
            navLinks[i].classList.remove('active')

        }
        navLinks[index].classList.add('active')
        // if (activePage == navLinks[index].href) {
        //     navLinks[index].classList.add('active')
        // }
    }
}

// ############################### Add Actie Class To Links ##################################