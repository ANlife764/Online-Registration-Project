$(document).ready(function() {
    // Hide all error messages initially
    $('.error').hide();

    $('#hackathonForm').submit(function(e) {
        e.preventDefault(); // Prevent default form submission

        let isValid = true;

        // Name validation
        const name = $('#name').val().trim();
        if (name.length < 3) {
            $('#nameError').text('Name must be at least 3 characters long.').show();
            isValid = false;
        } else {
            $('#nameError').hide();
        }

        // Email validation
        const email = $('#email').val().trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[a-z]{2,}$/;
        if (!emailPattern.test(email)) {
            $('#emailError').text('Please enter a valid email address.').show();
            isValid = false;
        } else {
            $('#emailError').hide();
        }

        // Phone number validation
        const phone = $('#phone').val().trim();
        const phonePattern = /^[0-9]{10}$/;
        if (!phonePattern.test(phone)) {
            $('#phoneError').text('Please enter a valid 10-digit phone number.').show();
            isValid = false;
        } else {
            $('#phoneError').hide();
        }

        // College name validation
        const college = $('#college').val().trim();
        if (college === '') {
            $('#collegeError').text('Please enter your college name.').show();
            isValid = false;
        } else {
            $('#collegeError').hide();
        }

        // Track selection validation
        const track = $('#track').val();
        if (!track) {
            $('#trackError').text('Please select a track.').show();
            isValid = false;
        } else {
            $('#trackError').hide();
        }

        // If all validations pass, submit via AJAX
        if (isValid) {
            $.ajax({
                type: 'POST',
                url: 'register.php', // your backend PHP file
                data: $(this).serialize(),
                success: function(response) {
                    alert('Registration successful!');
                    $('#hackathonForm')[0].reset();
                    $('.error').hide();
                },
                error: function(xhr, status, error) {
                    alert('Registration failed: ' + xhr.responseText);
                }
            });
        }
    });
});

