<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodBridge - Sign Up for Admin</title>
    <link rel="stylesheet" href="TermsnConditionsStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrNj/2P9Vf4lB1c7l3s+Fv7/J8qLz9x+T+Gq0t1f2FmG8f/n2k+y+L+9qG6d+h+J+A+c+c+u+B+S+q+F+w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="navbar">
        <div class="container">
            <div class="logo">
                <a href="SignUp.php">
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
            <button class="account-btn">Account</button>
        </div>
    </header>

    <main>
        <section class="admin-signup-section">
            <div class="container">
                <div class="intro-text">
                    <h1>Make an Impact Today</h1>
                    <p>Join FoodBridge and be part of a movement to fight food waste and feed communities.</p>
                    <p>It only takes a minute to start making a difference.</p>
                </div>

                <div class="signup-card">
                    <h2>Sign up for Admin</h2>
                    <form>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first-name">FIRST NAME:</label>
                                <input type="text" id="first-name" name="first_name" placeholder="FIRSTNAME">
                            </div>
                            <div class="form-group">
                                <label for="username">USER NAME:</label>
                                <input type="text" id="username" name="username" placeholder="USER NAME">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="last-name">LAST NAME:</label>
                                <input type="text" id="last-name" name="last_name" placeholder="LASTNAME">
                            </div>
                            <div class="form-group">
                                <label for="email">EMAIL ADDRESS:</label>
                                <input type="email" id="email" name="email" placeholder="EMAIL ADDRESS">
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
                                <label for="password">PASSWORD:</label>
                                <input type="password" id="password" name="password" placeholder="PASSWORD">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group empty-placeholder">
                                </div>
                            <div class="form-group">
                                <label for="confirm-password">CONFIRM PASSWORD:</label>
                                <input type="password" id="confirm-password" name="confirm_password" placeholder="CONFIRM PASSWORD">
                            </div>
                        </div>

                        <div class="terms-checkbox">
                            <input type="checkbox" id="terms" name="terms">
                            <label for="terms">By clicking this button, you agree to the <a href="#" id="open-terms-modal">terms and conditions</a></label>
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

    <div id="termsModal" class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h3>TERMS AND CONDITIONS</h3>
            <p>By creating an account, you agree to these terms and conditions and acknowledge that you are solely responsible for all activities that occur under your account, whether or not authorized by you.</p>
            <p>You are responsible for maintaining the confidentiality of your account password and any other security information associated with your account.</p>
            <p>You agree to notify us immediately if you suspect any unauthorized use of your account or any security breach.</p>
            <p>You agree to use the platform in accordance with all applicable laws and regulations.</p>
            <p>You agree not to engage in any activity that could disrupt or interfere with the platform or its users.</p>
            <p>You agree not to upload, post, or transmit any content that is illegal, harmful, abusive, or offensive.</p>
            <p>We may terminate or suspend your account immediately, without prior notice or liability, for any reason, including but not limited to, if you violate these Terms and Conditions.</p>
            <p>You may terminate your account at any time by following the instructions provided on the platform.</p>
            <p>Upon termination, you will no longer have access to your account and any associated data.</p>
            <p>These Terms and Conditions shall be governed by and construed in accordance with the laws of [Metro Manila, Philippines], without regard to its conflict of law provisions.</p>
            <button class="confirm-button" id="confirm-terms-button">Confirm</button>
        </div>
    </div>

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

        // JavaScript for Modal functionality
        const termsModal = document.getElementById('termsModal');
        const openTermsModalLink = document.getElementById('open-terms-modal');
        const closeButton = document.querySelector('.close-button');
        const confirmTermsButton = document.getElementById('confirm-terms-button');
        const termsCheckbox = document.getElementById('terms');

        openTermsModalLink.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior
            termsModal.style.display = 'block';
        });

        closeButton.addEventListener('click', function() {
            termsModal.style.display = 'none';
        });

        confirmTermsButton.addEventListener('click', function() {
            termsCheckbox.checked = true; // Check the checkbox when 'Confirm' is clicked
            termsModal.style.display = 'none';
        });

        // Close the modal if user clicks outside of it
        window.addEventListener('click', function(event) {
            if (event.target == termsModal) {
                termsModal.style.display = 'none';
            }
        });
    </script>
</body>
</html>