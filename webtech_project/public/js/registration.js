function validateRegistration() {

    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let phone = document.getElementById("phone").value.trim();
    let password = document.getElementById("password").value;
    let confirm = document.getElementById("confirm_password").value;

    // Empty fields check
    if (name === "" || email === "" || phone === "" || password === "" || confirm === "") {
        alert(" All fields are required");
        return false;
    }

    // Email format
    if (!email.includes("@") || !email.includes(".")) {
        alert("Invalid email format");
        return false;
    }

    // Phone number check (digits only)
    if (isNaN(phone) || phone.length < 10) {
        alert(" Invalid phone number");
        return false;
    }

    // Password length
    if (password.length < 4) {
        alert(" Password must be at least 4 characters");
        return false;
    }

    // Password match
    if (password !== confirm) {
        alert("Passwords do not match");
        return false;
    }

    // Passed validation
    return true;
}
