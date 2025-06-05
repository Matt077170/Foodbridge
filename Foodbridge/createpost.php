<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
    <link rel="stylesheet" href="createpoststyle.css">
</head>
<body>
    <h1>Create a New Post</h1>
    <form action="submit_post.php" method="POST">
        <label>Title:</label>
        <input type="text" name="title" required>
        
        <label>Content:</label>
        <textarea name="content" rows="5" required></textarea>
        
        <input type="submit" value="Submit Post">
    </form>

    <h2>Recent Posts</h2>
    <?php
    // Connect to the database
    $conn = new mysqli("localhost", "root", "", "foodbridge");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC LIMIT 5");

    while ($row = $result->fetch_assoc()) {
        echo "<div class='post'>";
        echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
        echo "<p>" . nl2br(htmlspecialchars($row['content'])) . "</p>";
        echo "<small>Posted on " . $row['created_at'] . "</small>";
        echo "</div>";
    }

    $conn->close();
    ?>
</body>
</html>
