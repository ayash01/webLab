const img = document.getElementById("img");
const h1 = document.getElementById("h1");


img.addEventListener("mouseover", function () {
    h1.innerHTML = "Cricket";
})

img.addEventListener("mouseout", function () {
    h1.innerHTML = "Football";
})