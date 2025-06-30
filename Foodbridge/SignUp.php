<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up for Donor - FoodBridge</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;
    }

    body {
      background-color: #fff;
      color: #333;
    }

    header {
      background-color: white;
      border-bottom: 1px solid #ddd;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
    }

    .navbar .logo {
      font-weight: bold;
      font-size: 1.4rem;
    }

    .navbar ul {
      list-style: none;
      display: flex;
      gap: 2rem;
    }

    .navbar ul li a {
      text-decoration: none;
      color: #4d6442;
      font-weight: bold;
    }

    .intro {
      text-align: left;
      margin-top: 2rem;
      font-size: 1.2rem;
      padding: 0 1rem;
    }

    .intro h2 {
      font-size: 2rem;
    }

    .intro .highlight {
      color: #f89b7f;
    }

    .form-container {
      max-width: 1120px;
      margin: 2rem auto;
      padding: 2rem;
      background: linear-gradient(to bottom right, #fbd0b3, #f6a77d);
      border-radius: 12px;
      box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
      border: 1px solid #444;
      position: relative;
    }

    .form-container h2 {
      position: absolute;
      top: -1.5rem;
      right: 2rem;
      font-size: 2rem;
      font-weight: 900;
      color: #294419;
    }

    form {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1rem 2rem;
    }

    .form-group {
      display: flex;
      flex-direction: column;
    }

    .form-group label {
      font-size: 0.8rem;
      margin-bottom: 0.3rem;
      text-transform: uppercase;
      font-weight: bold;
    }

    .form-group input,
    .form-group select {
      padding: 0.5rem;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .dob-group {
      display: flex;
      gap: 0.5rem;
    }

    .terms {
      grid-column: span 3;
      font-size: 0.8rem;
      color: #2d7a62;
      display: flex;
      align-items: center;
      padding-left: 0.5rem;
    }

    .terms input {
      margin-right: 0.5rem;
    }

    .submit-btn {
      grid-column: span 3;
      text-align: center;
      margin-top: 1rem;
    }

    .submit-btn button {
      padding: 0.7rem 3rem;
      background-color: #7b967a;
      color: white;
      font-size: 1.4rem;
      font-weight: bold;
      border: none;
      border-radius: 16px;
      cursor: pointer;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

       .terms-checkbox label {
        font-size: 0.85em;
    }
  /* Modal Styles (copied from TermsnConditionsStyle.css) */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
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
    padding: 40px;
    border: 1px solid #888;
    width: 80%;
    max-width: 700px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    position: relative;
}
.modal-content h3 {
    text-align: center;
    margin-bottom: 25px;
    font-size: 1.8em;
    color: #a14e0f;
    padding-bottom: 10px;
    border-bottom: 1px solid #ddd;
}
.modal-content p {
    margin-bottom: 15px;
    font-size: 0.95em;
    line-height: 1.7;
    color: #555;
}
.close-button {
    color: #888;
    font-size: 28px;
    font-weight: bold;
    position: absolute;
    top: 15px;
    right: 25px;
    cursor: pointer;
}
.close-button:hover,
.close-button:focus {
    color: #333;
    text-decoration: none;
}
.confirm-button {
    background-color: #2e7d32;
    color: #fff;
    padding: 12px 30px;
    border-radius: 25px;
    font-size: 1.1em;
    display: block;
    margin: 30px auto 0 auto;
    transition: background-color 0.3s ease;
}
.confirm-button:hover {
    background-color: #266a2a;
}

  </style>
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="logo">
  <a href="MainPage.php" style="text-decoration: none; color: inherit;">
    <img src="foodbridge_logo.png" alt="FoodBridge Logo">FOODBRIDGE
  </a>
</div>
      <ul>
        <li><a href="#">ABOUT US</a></li>
        <li><a href="#">HOW IT WORKS</a></li>
        <li><a href="#">ABOUT FOOD WASTE</a></li>
      </ul>
    </nav>
  </header>

  <section class="intro">
    <h2><span class="highlight">Make an</span> Impact Today</h2>
    <br>
    <p>Join FoodBridge and be part of a movement to fight food waste and feed communities.<br>It only takes a minute to start making a difference.</p>
  </section>

  <section class="form-container">
    <h2>Sign up for Donor</h2>
   <form action="submit.php" method="POST">
      <div class="form-group">
        <label>First Name:</label>
       <input type="text" placeholder="FIRSTNAME" name="first_name">
      </div>
      <div class="form-group">
        <label>Address:</label>
        <input type="text" placeholder="ADDRESS" name="address">
      </div>
      <div class="form-group">
        <label>User Name:</label>
       <input type="text" placeholder="USERNAME" name="username">
      </div>

      <div class="form-group">
        <label>Last Name:</label>
        <input type="text" placeholder="LASTNAME" name="lastname">
      </div>
      <div class="form-group">
        <label>District:</label>
        <input type="text" placeholder="DISTRICT" name="district">
      </div>
      <div class="form-group">
        <label>Email Address:</label>
       <input type="email" placeholder="EMAIL ADDRESS" name="email_address">
      </div>

      <div class="form-group">
        <label>Date of Birth:</label>
        <div class="dob-group">
        <select name="dob_day"><option>DD</option></select>
        <select name="dob_month"><option>MM</option></select>
        <select name="dob_year"><option>YYYY</option></select>
        </div>
      </div>
      <div class="form-group">
        <label>Contact Number:</label>
        <input type="text" placeholder="CONTACT NUMBER" name="contact_number">
      </div>
      <div class="form-group">
        <label>Password:</label>
       <input type="password" placeholder="PASSWORD" name="password">
      </div>

      <div></div>
      <div></div>
      <div class="form-group">
        <label>Confirm Password:</label>
       <input type="password" placeholder="CONFIRM PASSWORD" name="confirm_password">

      </div>

        <div class="terms-checkbox">
        <input type="checkbox" id="terms" name="terms">
        <label for="terms">By clicking this button, you agree to the <a href="#" id="open-terms-modal">terms and conditions</a></label>
        </div>

      <div class="submit-btn">
        <button type="submit">SUBMIT</button>
      </div>
    </form>
  </section>

<!-- Place this after your form in SignUp.php -->
<div id="termsModal" class="modal" style="display:none; position:fixed; z-index:1000; left:0; top:0; width:100vw; height:100vh; background:rgba(0,0,0,0.5);">
    <div class="modal-content" style="background:#fff; margin:10vh auto; padding:2rem; border-radius:10px; max-width:500px; position:relative;">
        <span class="close-button" style="position:absolute; top:10px; right:20px; font-size:2rem; cursor:pointer;">&times;</span>
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
        <button class="confirm-button" id="confirm-terms-button" style="margin-top:1rem;">Confirm</button>
    </div>
</div>

<!-- Place this script before </body> -->
<script>
// JavaScript for Modal functionality (matches TermsnConditions.php)
const termsModal = document.getElementById('termsModal');
const openTermsModalLink = document.getElementById('open-terms-modal');
const closeButton = document.querySelector('.close-button');
const confirmTermsButton = document.getElementById('confirm-terms-button');
const termsCheckbox = document.getElementById('terms');

openTermsModalLink.addEventListener('click', function(event) {
    event.preventDefault();
    termsModal.style.display = 'block';
});

closeButton.addEventListener('click', function() {
    termsModal.style.display = 'none';
});

confirmTermsButton.addEventListener('click', function() {
    termsCheckbox.checked = true;
    termsModal.style.display = 'none';
});

window.addEventListener('click', function(event) {
    if (event.target == termsModal) {
        termsModal.style.display = 'none';
    }
});
</script>
</body>
</html>
