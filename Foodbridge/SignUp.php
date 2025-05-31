<?php
$host = "localhost";
$dbname = "foodbridge";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $rawPassword = $_POST['password'];

    // ✅ Hash the password before storing
    $password = password_hash($rawPassword, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $user, $email, $pass);

    if ($stmt->execute()) {
        echo "User registered successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodBridge - Sign Up for Donor</title>
    <link rel="stylesheet" href="SignUpStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrNj/2P9Vf4lB1c7l3s+Fv7/J8qLz9x+T+Gq0t1f2FmG8f/n2k+y+L+9qG6d+h+J+A+c+c+u+B+S+q+F+w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="navbar">
        <div class="container">
            <div class="logo">
                <a href="MainPage.php">
                    <img src="logo.png" alt="FoodBridge Logo">
                    <span>FoodBridge</span>
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">HOW IT WORKS</a></li>
                    <li><a href="#">ABOUT FOOD WASTE</a></li>
                </ul>
            </nav>
            <a href="LogIn.php" class="login-button">Log In</a>
        </div>
    </header>

    <main>
        <section class="donor-signup-section">
            <div class="container">
                <div class="intro-text">
                    <h1>Make an Impact Today</h1>
                    <p>Join FoodBridge and be part of a movement to fight food waste and feed communities.</p>
                    <p>It only takes a minute to start making a difference.</p>
                </div>

                <div class="signup-card">
                    <h2>Sign up for Donor</h2>
                    <form action="SignUp.php" method="POST">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first-name">FIRST NAME:</label>
                                <input type="text" id="first-name" name="first_name" placeholder="FIRSTNAME">
                            </div>
                            <div class="form-group">
                                <label for="address">ADDRESS:</label>
                                <input type="text" id="address" name="address" placeholder="ADDRESS">
                            </div>
                            <div class="form-group">
                                <label for="username">USER NAME:</label>
                                <input type="text" id="username" name="username" placeholder="USER NAME" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="last-name">LAST NAME:</label>
                                <input type="text" id="last-name" name="last_name" placeholder="LASTNAME">
                            </div>
                            <div class="form-group">
                                <label for="district">DISTRICT:</label>
                                <input type="text" id="district" name="district" placeholder="DISTRICT">
                            </div>
                            <div class="form-group">
                                <label for="email">EMAIL ADDRESS:</label>
                                <input type="email" id="email" name="email" placeholder="EMAIL ADDRESS" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="date-of-birth">DATE OF BIRTH:</label>
                                <div class="dob-selects">
                                    <select name="dob_month" id="dob-month"></select>
                                    <select name="dob_day" id="dob-day"></select>
                                    <select name="dob_year" id="dob-year"></select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact-number">CONTACT NUMBER:</label>
                                <input type="tel" id="contact-number" name="contact_number" placeholder="CONTACT NUMBER">
                            </div>
                            <div class="form-group">
                                <label for="password">PASSWORD:</label>
                                <input type="password" id="password" name="password" placeholder="PASSWORD" required>
                            </div>
                        </div>

                        <div class="form-row last-row">
                            <div class="form-group empty-placeholder"></div>
                            <div class="form-group empty-placeholder"></div>
                            <div class="form-group">
                                <label for="confirm-password">CONFIRM PASSWORD:</label>
                                <input type="password" id="confirm-password" name="confirm_password" placeholder="CONFIRM PASSWORD">
                            </div>
                        </div>

                        <div class="terms-checkbox">
                            <input type="checkbox" id="terms" name="terms">
                            <label for="terms">By clicking this button, you agree to the terms and conditions</label>
                        </div>

                        <button type="submit" class="submit-btn">SUBMIT</button>
                    </form>
                </div>
            </div>
            <div class="hero-image-overlay">
                <img src="foodbridge_logo_hero.png" alt="FoodBridge Logo Large" class="large-logo">
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-content">
            <div class="footer-left">
                <a href="index.html">
                    <img src="logo.png" alt="FoodBridge Logo" class="footer-logo">
                </a>
                <p class="copyright">&copy; 2023 FoodBridge. All rights reserved.</p>
            </div>
            <div class="footer-center">
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">How It Works</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
            <div class="footer-right">
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="footer-buttons">
                    <button>Donate Surplus Food</button>
                    <button>Request Donations</button>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // JavaScript for populating Date of Birth dropdowns
        const dobMonth = document.getElementById('dob-month');
        const dobDay = document.getElementById('dob-day');
        const dobYear = document.getElementById('dob-year');

        // Populate Months
        const months = ["Month", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        months.forEach((month, index) => {
            const option = document.createElement('option');
            option.value = index;
            option.textContent = month;
            dobMonth.appendChild(option);
        });

        // Populate Days
        dobDay.innerHTML = '<option value="">Day</option>'; // Initial "Day" option
        for (let i = 1; i <= 31; i++) {
            const option = document.createElement('option');
            option.value = i;
            option.textContent = i;
            dobDay.appendChild(option);
        }

        // Populate Years (e.g., last 100 years from current year)
        const currentYear = new Date().getFullYear();
        dobYear.innerHTML = '<option value="">Year</option>'; // Initial "Year" option
        for (let i = currentYear; i >= currentYear - 100; i--) {
            const option = document.createElement('option');
            option.value = i;
            option.textContent = i;
            dobYear.appendChild(option);
        }
    </script>
</body>
</html>