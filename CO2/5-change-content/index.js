const image = document.getElementById("img");
const txt = document.getElementById("text");
const txt2 = document.getElementById("text").textContent;
const heading = document.getElementById("h1").textContent;
const cric = document.getElementById("cricket").textContent;

image.addEventListener("mouseover", function () {
    h1.innerHTML = "Cricket";
    image.src = "Cricket.jpg";
    txt.textContent = cric;
})

image.addEventListener("mouseout", function () {
    h1.textContent = heading;
    image.src = "Football.jpg"
    txt.textContent = txt2;
})
