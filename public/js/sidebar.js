let arrow = document.querySelectorAll(".arrow")[0];
let slider = document.querySelectorAll(".slider")[0];
arrow.addEventListener("click", () => {
    slider.classList.toggle("close");
});
let togglebtn = document.querySelectorAll(".checkbox")[0];
let body = document.querySelectorAll(".mainbody")[0];
let search = document.querySelectorAll(".fa-magnifying-glass")[0];
let anchor = document.getElementsByTagName("a")[0];
let bars = document.querySelectorAll(".fa-bars")[0];
bars.addEventListener("click", () => {
    slider.classList.toggle("active");
});
