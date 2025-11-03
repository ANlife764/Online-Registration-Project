$(document).ready(function() {
  $("#hackathonForm").submit(function(e) {
    let email = $("#email").val();
    let phone = $("#phone").val();

    // Simple Email Validation
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!email.match(emailPattern)) {
      alert("Please enter a valid email address!");
      e.preventDefault();
    }

    // Phone Number Validation
    const phonePattern = /^[0-9]{10}$/;
    if (!phone.match(phonePattern)) {
      alert("Please enter a valid 10-digit phone number!");
      e.preventDefault();
    }
  });
});
