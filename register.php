<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $college = htmlspecialchars($_POST['college']);
    $team = htmlspecialchars($_POST['team']);
    $members = htmlspecialchars($_POST['members']);
    $track = htmlspecialchars($_POST['track']);
    $experience = htmlspecialchars($_POST['experience']);
    
    // Handle multiple choice interests
    $interests = [];
    if (isset($_POST['interests'])) {
        foreach ($_POST['interests'] as $interest) {
            $interests[] = htmlspecialchars($interest);
        }
    }
    $interests_display = empty($interests) ? 'None selected' : implode(', ', $interests);

    // Create formatted string for saving
    $entry = "Name: $name\n"
           . "Email: $email\n"
           . "Phone: $phone\n"
           . "College: $college\n"
           . "Team: $team\n"
           . "Members: $members\n"
           . "Track: $track\n"
           . "Experience: $experience\n"
           . "Interests: $interests\n"
           . "------------------------------\n";

    // Save to a text file (append mode)
    $file = 'registration.txt';
    if (file_put_contents($file, $entry, FILE_APPEND | LOCK_EX)) {
        echo "Registration saved successfully!";
    } else {
        echo "Error: Could not save registration.";
    }
?>