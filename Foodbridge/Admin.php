<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Food Bridge Dashboard</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      display: flex;
      height: 100vh;
      background-color: #fff;
    }

    .sidebar {
      width: 200px;
      background-color: #f4f4f4;
      padding-top: 10px;
      border-right: 1px solid #ddd;
    }

    .sidebar .logo {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      padding: 10px 0;
      background-color: #f8c4a6;
    }

    .sidebar .logo img {
      height: 40px;
    }

    .sidebar .logo span {
      font-weight: bold;
      font-size: 18px;
      color: #fff;
      text-shadow: 0 0 2px #000;
    }

    .sidebar ul {
      list-style: none;
      margin-top: 20px;
    }

    .sidebar ul li {
      padding: 10px 20px;
    }

    .sidebar ul li:hover {
      background-color: #e0e0e0;
      cursor: pointer;
    }

    .main {
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    .topbar {
      background-color: #f8c4a6;
      height: 50px;
      display: flex;
      justify-content: flex-end;
      align-items: center;
      padding: 0 20px;
    }

    .topbar img {
      width: 35px;
      height: 35px;
      border-radius: 50%;
    }

    .content {
      padding: 30px 40px;
    }

    .content h2 {
      margin-bottom: 20px;
      font-size: 20px;
    }

    .card {
      background-color: #fff;
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 30px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
      max-width: 600px;
    }

    canvas {
      width: 100% !important;
      height: 300px !important;
    }
  </style>
</head>
<body>

<div class="sidebar">
  <div class="logo">
    <img src="logo.png" alt="Logo">
    <span>Food Bridge</span>
  </div>
  <ul>
    <li>🏠 Dashboard</li>
    <li>🍲 Food Waste</li>
    <li>🏡 Soup Kitchen</li>
    <li>🏢 Center/Organization</li>
    <li>👥 Recipients Accounts</li>
    <li>🙋 Donor Accounts</li>
  </ul>
</div>

<div class="main">
  <div class="topbar">
    <img src="profile.png" alt="User">
  </div>
  <div class="content">
    <div class="card">
      <h2>Monthly Records</h2>
      <canvas id="lineChart"></canvas>
    </div>
    <div class="card">
      <h2>Monthly Recipient/Donors Feedbacks</h2>
      <canvas id="donutChart"></canvas>
    </div>
  </div>
</div>

<script>
  const ctx1 = document.getElementById('lineChart').getContext('2d');
  new Chart(ctx1, {
    type: 'line',
    data: {
      labels: ['Week1', 'Week2', 'Week3', 'Week4'],
      datasets: [
        {
          label: 'February',
          data: [3, 5, 6, 7],
          fill: true,
          borderColor: 'rgba(255, 99, 132, 1)',
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
        },
        {
          label: 'March',
          data: [5, 6, 9, 6],
          fill: true,
          borderColor: 'rgba(54, 162, 235, 1)',
          backgroundColor: 'rgba(54, 162, 235, 0.2)',
        },
        {
          label: 'April',
          data: [8, 9, 12, 10],
          fill: true,
          borderColor: 'rgba(75, 192, 192, 1)',
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
        }
      ]
    },
    options: {
      responsive: true,
      plugins: { legend: { position: 'top' } }
    }
  });

  const ctx2 = document.getElementById('donutChart').getContext('2d');
  new Chart(ctx2, {
    type: 'doughnut',
    data: {
      labels: ['Happy', 'Sad', 'Angry', 'Wow'],
      datasets: [{
        label: 'Feedbacks',
        data: [1677, 1396, 2436, 2702],
        backgroundColor: [
          '#8f81f5', '#f87474', '#4ed1b3', '#f9c74f'
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      cutout: '60%',
      plugins: { legend: { position: 'right' } }
    }
  });
</script>

</body>
</html>
