<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $type = $_POST['type'];
    $location = $_POST['location'];
    $participants = $_POST['participants'];
    $duration = $_POST['duration'];
    $wardrobe = $_POST['wardrobe'];
    $props = $_POST['props'];
    $specific_shots = $_POST['specific_shots'];
    $themes = $_POST['themes'];
    $editing = $_POST['editing'];
    $budget = $_POST['budget'];
    $payment_method = $_POST['payment_method'];
    $deposit = $_POST['deposit'];
    $additional_info = $_POST['additional_info'];
    $signature = $_POST['signature'];

    $to = "your-email@example.com"; // Replace with your email address
    $subject = "New Photoshoot Booking from $name";
    $message = "
    Client Information:\n
    Name: $name\n
    Phone: $phone\n
    Email: $email\n
    Address: $address\n\n
    Photoshoot Details:\n
    Preferred Date: $date\n
    Preferred Time: $time\n
    Type of Photoshoot: $type\n
    Location: $location\n
    Number of Participants: $participants\n
    Duration: $duration\n\n
    Photoshoot Preferences:\n
    Wardrobe Changes: $wardrobe\n
    Props: $props\n
    Specific Shots/Poses Required: $specific_shots\n
    Themes/Concepts: $themes\n
    Editing Preferences: $editing\n\n
    Budget and Payment:\n
    Budget Range: $budget\n
    Preferred Payment Method: $payment_method\n
    Deposit Required: $deposit\n\n
    Additional Information: $additional_info\n\n
    Client Signature: $signature
    ";

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your booking! We will contact you soon.";
    } else {
        echo "Sorry, there was an error sending your booking. Please try again later.";
    }
}
?>
