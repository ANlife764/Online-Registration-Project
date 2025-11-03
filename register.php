<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $college = htmlspecialchars($_POST['college']);
    $team = htmlspecialchars($_POST['team']);
    $members = htmlspecialchars($_POST['members']);
    $track = htmlspecialchars($_POST['track']);

    echo "
    <html>
    <head>
      <link rel='stylesheet' href='style.css'>
    </head>
    <body style='background: #f9fafb;'>
      <div class='container'>
        <h1>Registration Successful!</h1>
        <p>Here are your submitted details:</p>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>College:</strong> $college</p>
        <p><strong>Team Name:</strong> $team</p>
        <p><strong>Members:</strong> $members</p>
        <p><strong>Track:</strong> $track</p>
        <a href='index.html'><button>Go Back</button></a>
      </div>
    </body>
    </html>
    ";
}
?>
