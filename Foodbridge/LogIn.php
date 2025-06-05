<?php
session_start();
$host = "localhost";
$dbname = "foodbridge";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username']; // changed from $users to $user
    $pass = $_POST['password']; // renamed to match password_verify

    // Updated to include last_name
    $sql = "SELECT id, username, password, first_name, last_name, address FROM users WHERE username = ? OR email_address = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $user, $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        // Verify the password
        if (password_verify($pass, $row['password'])) {
            // Set session variables
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['profile_picture'] = $row['profile_picture_path'];

            // Redirect to dashboard
            header("Location: Donor.php");
            exit();
        } else {
            $message = "Invalid password.";
        }
    } else {
        $message = "User not found.";
    }

    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log In - FoodBridge</title>
    <link rel="stylesheet" href="LogInStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrNj/2P9Vf4lB1c7l3s+Fv7/J8qLz9x+T+Gq0t1f2FmG8f/n2k+y+L+9qG6d+h+J+A+c+c+u+B+S+q+F+w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<main>
    <section class="hero-section">
        <div class="container hero-content">
            <div class="hero-text">
                <h1>Bridging Communities Through Food and Generosity</h1>
                <p>At FoodBridge, we connect local donors, vendors, and individuals with soup kitchens to reduce food waste and fight hunger. By redistributing surplus food, we ensure that nutritious meals reach those who need them most. Join us in making a difference—one meal at a time.</p>
            </div>
            <div class="login-card">
                <h2>LOGIN</h2>

                <?php if (isset($_GET['signup']) && $_GET['signup'] == "success") echo "<p style='color:green;'>Registration successful! Please log in.</p>"; ?>
                <?php if ($message) echo "<p style='color:red;'>$message</p>"; ?>

                <form action="LogIn.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username/Email</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
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