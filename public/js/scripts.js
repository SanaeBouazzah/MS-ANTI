
window.addEventListener('DOMContentLoaded', event => {
    const listHoursArray = document.body.querySelectorAll('.list-hours li');
    listHoursArray[new Date().getDay()].classList.add(('today'));
})


// Get the container element
var btnContainer = document.querySelector("navbar-nav li");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("nav-link");

var navigation =document.querySelector('navbar-nav');
var openbtn = document.querySelector('.menu-btn');
var closebtn = document.querySelector('.close-btn');

openbtn.addEventListener("click", () => {
    navigation.classList.add("active");
});

closebtn.addEventListener("click", () => {
    navigation.classList.remove("active");
});
