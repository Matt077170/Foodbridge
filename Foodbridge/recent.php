<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodBridge - Donor Dashboard</title>
    <link rel="stylesheet" href="recentstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrNj/2P9Vf4lB1c7l3s+Fv7/J8qLz9x+T+Gq0t1f2FmG8f/n2k+y+L+9qG6d+h+J+A+c+c+u+B+S+q+F+w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="page-wrapper">
        <aside class="sidebar">
            <div class="sidebar-header">
                <img src="logo.png" alt="FoodBridge Logo" class="sidebar-logo">
                <span>FoodBridge</span>
            </div>
            <nav class="sidebar-nav">
                <ul>
                    <li><a href="recent.php" class="active"><i class="fas fa-clock"></i> Recent</a></li>
                    <li><a href="#"><i class="fas fa-bell"></i> Notifications</a></li>
                    <li><a href="#"><i class="fas fa-comments"></i> Messages</a></li>
                    <li><a href="#"><i class="fas fa-binoculars"></i> Explore</a></li>
                    <li><a href="#"><i class="fas fa-lightbulb"></i> Know More</a></li>
                    <li><a href="Logout.php" id="logoutLink"><i class="fas fa-sign-out-alt"></i> Log-out</a></li>
                </ul>
            </nav>
        </aside>

    <title>Recent Posts</title>
<body>
    <div class="page-container">
        <h1>Recent Posts</h1>

        <div class="link-container">
            <a href="createpost.php">➕ Create Another Post</a>
        </div>

        <div class="post-container">
        <?php
        $conn = new mysqli("localhost", "root", "", "foodbridge");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC LIMIT 10");

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='post'>";
                echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
                echo "<p>" . nl2br(htmlspecialchars($row['content'])) . "</p>";
                echo "<small>Posted on " . $row['created_at'] . "</small>";
                echo "</div>";
            }
        } else {
            echo "<p class='no-posts'>No posts found.</p>";
        }

        $conn->close();
        ?>
        </div>
    </div>
</body>
</html>

