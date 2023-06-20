
        function validateLogin() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
           


            if (email === "malindu@gmail.com" && password === "abc123") {
                window.location.href = "index.html";
                return false; // Prevent form submission
            } else {
                alert("Invalid email or password. Please try again.");
                return false; // Prevent form submission
            }
        }
    