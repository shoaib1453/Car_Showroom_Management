//- Custom JS for Effects & Validation -->
    
// Reveal effect when the page loads
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("loginBox").classList.add("reveal");
});

function validateForm() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    
    if (email === "" || password === "") {
        alert("All fields are required!");
        return false;
    }
    alert("Login successful!");
    return true;
}