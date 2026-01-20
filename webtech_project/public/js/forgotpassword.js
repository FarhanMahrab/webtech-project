function validateForgotPassword() {

    let email = document.getElementById("email").value.trim();

    // Empty check
    if (email === "") {
        alert("❌ Email is required");
        return false;
    }

    // Email format check
    if (!email.includes("@") || !email.includes(".")) {
        alert("❌ Please enter a valid email address");
        return false;
    }

    // Passed validation
    return true;
}
