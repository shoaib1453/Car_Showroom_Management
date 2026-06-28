// Reveal effect after loading the page
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("signupBox").classList.add("reveal");
});

function validateForm() {
    var email = document.getElementById("email").value;
    var phone_number = document.getElementById("phone_number").value;
    var password = document.getElementById("password").value;
    
    if (email === "" || phone_number === "" || password === "") {
        alert("All fields are required!");
        return false;
    }
    alert("Password updated successful!");
    return true;
}