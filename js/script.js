const burger = document.querySelector("#burger");
const header = document.querySelector("header");
const body = document.querySelector("body");
const nav = document.querySelector("nav");

burger.addEventListener('click', () =>{
    header.classList.toggle('responsive')
    nav.classList.toggle('block')
})

$(document).ready(function(){
    $(".chosen-select").chosen(); 
});