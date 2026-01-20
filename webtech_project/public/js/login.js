function validateLogin() {

    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value.trim();

    // Empty check
    if (email === "" || password === "") {
        alert(" Email and Password are required");
        return false;
    }

    // Email format check
    if (!email.includes("@") || !email.includes(".")) {
        alert("Please enter a valid email address");
        return false;
    }

    // Password length check
    if (password.length < 4) {
        alert("Password must be at least 4 characters");
        return false;
    }

    // Passed validation
    return true;
}
