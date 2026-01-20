
/* ========= ADD USER VALIDATION ========= */
function validateAddUser() {

    let name = document.getElementById("user_name").value.trim();
    let email = document.getElementById("user_email").value.trim();
    let phone = document.getElementById("user_phone").value.trim();
    let password = document.getElementById("user_password").value;
    let role = document.getElementById("user_role").value;

    if (name === "" || email === "" || phone === "" || password === "" || role === "") {
        alert(" All user fields are required");
        return false;
    }

    if (!email.includes("@") || !email.includes(".")) {
        alert(" Invalid email format");
        return false;
    }

    if (isNaN(phone) || phone.length < 10) {
        alert(" Invalid phone number");
        return false;
    }

    if (password.length < 4) {
        alert(" Password must be at least 4 characters");
        return false;
    }

    return true;
}


/* ========= ADD STAFF VALIDATION ========= */
function validateAddStaff() {

    let name = document.getElementById("staff_name").value.trim();
    let email = document.getElementById("staff_email").value.trim();
    let phone = document.getElementById("staff_phone").value.trim();
    let salary = document.getElementById("staff_salary").value;
    let address = document.getElementById("staff_address").value.trim();

    if (name === "" || email === "" || phone === "" || salary === "" || address === "") {
        alert(" All staff fields are required");
        return false;
    }

    if (!email.includes("@")) {
        alert(" Invalid email address");
        return false;
    }

    if (isNaN(phone)) {
        alert(" Phone must contain only numbers");
        return false;
    }

    if (salary <= 0) {
        alert("Salary must be greater than 0");
        return false;
    }

    return true;
}


/* ========= ADD ROOM VALIDATION ========= */
function validateAddRoom() {

    let roomNo = document.getElementById("room_no").value.trim();
    let roomType = document.getElementById("room_type").value.trim();
    let capacity = document.getElementById("room_capacity").value;
    let price = document.getElementById("room_price").value;
    let status = document.getElementById("room_status").value;

    if (roomNo === "" || roomType === "" || capacity === "" || price === "" || status === "") {
        alert(" All room fields are required");
        return false;
    }

    if (capacity <= 0) {
        alert(" Room capacity must be greater than 0");
        return false;
    }

    if (price <= 0) {
        alert(" Room price must be greater than 0");
        return false;
    }

    return true;
}
