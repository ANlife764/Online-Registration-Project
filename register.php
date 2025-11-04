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
?>