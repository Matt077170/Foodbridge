<?php
session_start();
$host = "localhost";
$dbname = "foodbridge"; // your DB name
$dbuser = "root";
$dbpass = "";

$conn = new mysqli($host, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$usernameOrEmail = $_POST['username'];
$password = $_POST['password'];

// Search for the user
$sql = "SELECT * FROM users WHERE username = ? OR email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $usernameOrEmail, $usernameOrEmail);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        // Redirect to dashboard or user page
        header("Location: Donor.php");
        exit;
    } else {
        echo "❌ Incorrect password.";
    }
} else {
    echo "❌ User not found.";
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodBridge - Bridging Communities Through Food and Generosity</title>
    <link rel="stylesheet" href="LogInStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrNj/2P9Vf4lB1c7l3s+Fv7/J8qLz9x+T+Gq0t1f2FmG8f/n2k+y+L+9qG6d+h+J+A+c+c+u+B+S+q+F+w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="navbar">
        <div class="container">
            <div class="logo">
               <a href="MainPage.php"> <img src="logo.png" alt="FoodBridge Logo"> </div>
            <nav>
                <ul>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">HOW IT WORKS</a></li>
                    <li><a href="#">ABOUT FOOD WASTE</a></li>
                </ul>
            </nav>
            <button class="account-btn">Account</button>
        </div>
    </header>

    <main>
        <section class="hero-section">
            <div class="container hero-content">
                <div class="hero-text">
                    <h1>Bridging Communities Through Food and Generosity</h1>
                    <p>At FoodBridge, we connect local donors, vendors, and individuals with soup kitchens to reduce food waste and fight hunger. By redistributing surplus food, we ensure that nutritious meals reach those who need them most. Join us in making a difference—one meal at a time.</p>
                </div>
                <div class="login-card">
                    <h2>LOGIN</h2>
                    <form action="LogIn.php" method="POST">
                        <div class="form-group">
                            <label for="username">Username/Email</label>
                            <input type="text" id="username" name="username" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="">
                        </div>
                         <input type="submit" value="LOGIN" class="login-btn">

                    </form>
                    <a href="#" class="forgot-password">Forgot password?</a>
                    <a href="SignUp.php" class="no-account">Don't have an account?</a>
                </div>
            </div>
             <div class="hero-image-overlay">
                <img src="foodbridge_logo_hero.png" alt="FoodBridge Logo Large" class="large-logo">
            </div>
        </section>

        <section class="what-we-do-section">
            <div class="container">
                <h2>What We Do</h2>
                <p class="subtitle">Our efforts in local communities create a ripple effect: connecting donors, vendors, and soup kitchens to reduce food waste and fight hunger.</p>
                <div class="features-grid">
                    <div class="feature-item">
                        <div class="icon-box yellow-border">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3>Connect Communities</h3>
                    </div>
                    <div class="feature-item">
                        <div class="icon-box yellow-border">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h3>Nourish the hungry</h3>
                    </div>
                    <div class="feature-item">
                        <div class="icon-box green-border">
                            <i class="fas fa-recycle"></i>
                        </div>
                        <h3>Promote sustainability</h3>
                    </div>
                    <div class="feature-item">
                        <div class="icon-box yellow-border">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3>Inspire change</h3>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-content">
            <div class="footer-left">
                <img src="logo.png" alt="FoodBridge Logo" class="footer-logo">
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
                </div>
                <div class="footer-buttons">
                    <button>Donate Surplus Food</button>
                    <button>Request Donations</button>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>