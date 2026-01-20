document.getElementById("bookingForm").addEventListener("submit", function(e){
    e.preventDefault(); // stop reload

    let formData = new FormData(this);

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "book_room.php", true);

    xhr.onload = function(){
        if(this.status === 200){
            document.getElementById("msg").innerHTML = this.responseText;
            document.getElementById("msg").style.color = "green";
            document.getElementById("bookingForm").reset();
        }
    };

    xhr.send(formData);
});

function validateBooking() {

    let checkin = document.getElementById("checkin").value;
    let checkout = document.getElementById("checkout").value;
    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let phone = document.getElementById("phone").value.trim();
    let room = document.getElementById("room").value;
    let quantity = document.getElementById("quantity").value;
    let adults = document.getElementById("adults").value;
    let guestType = document.getElementById("guestType").value;

    // Empty field check
    if (
        checkin === "" || checkout === "" || name === "" ||
        email === "" || phone === "" || room === "" ||
        guestType === ""
    ) {
        alert("Please fill in all required fields");
        return false;
    }

    // Date validation
    if (checkout <= checkin) {
        alert("Check-out date must be after Check-in date");
        return false;
    }

    // Phone number validation (Bangladesh format)
    if (!/^[0-9]{10,14}$/.test(phone)) {
        alert("Enter a valid phone number");
        return false;
    }

    // Quantity validation
    if (quantity < 1 || adults < 1) {
        alert("Room quantity and adults must be at least 1");
        return false;
    }

    // Success
    alert("Booking Successful!");

    // Redirect after successful validation
    window.location.href = "guestdashboard.html";

    return false; // prevent real submission for now

}


