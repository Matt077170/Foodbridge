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
      text-align: center;
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
  </style>
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="logo">
  <a href="MainPage.php" style="text-decoration: none; color: inherit;">
    <img src="" alt="FoodBridge Logo">FOODBRIDGE
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
       <input type="text" placeholder="username" name="username">
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

      <div class="terms">
        <input type="checkbox" name="terms"> By clicking this button, you agree to the terms and conditions
      </div>

      <div class="submit-btn">
        <button type="submit">SUBMIT</button>
      </div>
    </form>
  </section>
</body>
</html>
