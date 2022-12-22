const fullname = document.getElementById("name");
const address = document.getElementById("address");
const phone = document.getElementById("phone");
const club = document.getElementById("club");
const loc = document.getElementById("location");
const date = document.getElementById("date");
const coach = document.getElementById("coach");
const btn = document.getElementById("btn");
const bg = document.getElementById("bg");

const nameError = document.getElementById("nameError");
const addressError = document.getElementById("addressError");
const phoneError = document.getElementById("phoneError");
const clubError = document.getElementById("clubError");
const locationError = document.getElementById("locationError");
const dateError = document.getElementById("dateError");
const coachError = document.getElementById("coachError");

btn.addEventListener("click", function () {
    let flag = false;

    nameError.textContent = "";
    addressError.textContent = "";
    phoneError.textContent = "";
    clubError.textContent = "";
    locationError.textContent = "";
    dateError.textContent = "";

    if (!fullname.value) {
        nameError.textContent = "Please fill out name field.";
        flag = true;
    }

    if (!address.value) {
        addressError.textContent = "Please fill out address field.";
        flag = true;
    }   

    if (!phone.value) {
        phoneError.textContent = "Please enter your phone number.";
        flag = true;
    }
    else if (isNaN(phone.value)){
        phoneError.textContent = "Phone number should only contain digits (0-9).";
    }
    else if (len(phone.value) < 10 ) {
        phoneError.textContent = "Phone number should contain 10 digits.";
    } 

    if (!club.value) {
        clubError.textContent = "Please select your club.";
        flag = true;
    }  

    if (!loc.value) {
        locationError.textContent = "Please select your location.";
        flag = true;
    }  

    if (!date.value) {
        dateError.textContent = "Please select practice date.";
        flag = true;
    }
    
    if (flag == true) {
        alert ("Please fill out the form correctly.");
        bg.style.background = "rgb(255, 255, 255)";

    }
    else if (flag == false) {
        alert ("Successfully Registered");
        bg.style.background = "rgb(200, 300, 106)";
    }
})
