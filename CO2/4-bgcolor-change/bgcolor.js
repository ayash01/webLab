const btn = document.getElementById("btn");
const bg = document.getElementById("bg");

btn.addEventListener("click", function () {
    let r = Math.floor(Math.random() * 256);
    let g = Math.floor(Math.random() * 256);
    let b = Math.floor(Math.random() * 256);
    bg.style.background = `rgb(${r}, ${g}, ${b})`;
})


