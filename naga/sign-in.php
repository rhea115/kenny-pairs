
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            background-image: url("images/sign-in-bg.jpg");
            background-attachment: fixed;
        }

        .container {
            height: 360px;
            max-width: 300px;
            margin:  100px auto;
            padding: 30px;
            background-color: rgb(245,245,220);
            border-radius:20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #E3BC83;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .forgot-password {
            text-align: center;
            margin-top: 20px;
        }

        .signup-link {
            text-align: center;
            margin-top: 20px;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            border-radius: 10px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sign In Form -->
        <div class="form-container" id="signin-form-container">
            <h2>Sign In</h2>
            <form action="signinaction.php" method="post">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <button type="button" onclick="validateForm()">Sign In</button>
            </form>

            <p class="forgot-password"><a href="#" onclick="openForgotPasswordModal()">Forgot Password?</a></p>
            <p class="error-message" id="error-message"></p>
        </div>
        <p class="signup-link">New Customer? <a href="sign-up.php" onclick="showSignUpForm()">Sign-Up</a></p>
            <p class="error-message" id="signup-error-message"></p>
        </div>
    </div>

      <!-- Forgot Password Modal -->
      <div id="forgotPasswordModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeForgotPasswordModal()">&times;</span>
            <p>Enter your email to reset your password:</p>
            <input type="text" id="resetEmail" placeholder="Enter your email" required>
            <button onclick="sendResetLink()">Send Reset Link</button>
        </div>
    </div> 
    <script>
        function validateForm() {
            var usernameInput = document.getElementById("username").value;
            var passwordInput = document.getElementById("password").value;

            var validUsername = "Rheamae Naga";
            var validPassword = "12345";

            if (usernameInput === validUsername && passwordInput === validPassword) {
                document.getElementById("error-message").innerText = "Welcome, " + validUsername + "!";
                 window.location.href = "login success.php";
            } else if (usernameInput !== validUsername) {
                document.getElementById("error-message").innerText = "Invalid username. Please try again.";
            } else if (passwordInput !== validPassword) {
                document.getElementById("error-message").innerText = "Invalid password. Please try again.";
            }
        }

        function openForgotPasswordModal() {
            document.getElementById("forgotPasswordModal").style.display = "block";
        }

        function closeForgotPasswordModal() {
            document.getElementById("forgotPasswordModal").style.display = "none";
        }

        function sendResetLink() {
            var resetEmail = document.getElementById("resetEmail").value;

            // Add your logic for sending a reset link to the specified email
            // This is a placeholder, and you should implement a proper backend logic
            console.log("Reset link sent to: " + resetEmail);

            // Close the modal after sending the reset link
            closeForgotPasswordModal();
        }
    </script>
</body>
</html>
   