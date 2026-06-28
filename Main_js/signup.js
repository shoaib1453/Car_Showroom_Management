 // Reveal effect after loading the page
 document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("signupBox").classList.add("reveal");
});
function validateForm() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var phone_number = document.getElementById("phone_number").value;
    
    if (email === "" || password === "" || phone_number === "") {
        alert("All fields are required!");
        return false;
    }
    alert("Sign Up Is Successful!");
    return true;
}