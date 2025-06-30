<?php
session_start();

// Ensure the user is logged in. If not, redirect to the login page with a clear message.
// It's good practice to redirect using absolute URLs for security.
if (!isset($_SESSION['id'])) { // Assuming 'id' is set upon successful login/signup for better session management
    header("Location: LogIn.php?logout=not_logged_in");
    exit();
}

// Retrieve user data from session.
// Using null coalescing operator (??) for graceful fallback if session data is missing.
$username_display = htmlspecialchars($_SESSION['username'] ?? 'Guest');

// IMPORTANT: Session keys cannot contain spaces. Use 'first_name' instead of 'First Name'.
// Ensure your LogIn.php sets $_SESSION['first_name'] and $_SESSION['address'].
$First_Name_display = htmlspecialchars($_SESSION['first_name'] ?? 'FoodBridge User');
$address_display = htmlspecialchars($_SESSION['address'] ?? 'Unknown Location');

// For profile picture, ensure the path is safe and provide a robust fallback.
// If profile_picture is stored as a relative path, you might need to prepend a base URL.
// If it's a full URL, it's fine as is.
$profile_picture_src = htmlspecialchars($_SESSION['profile_picture'] ?? 'https://via.placeholder.com/100/87CEEB/FFFFFF?text=User');

// IMPORTANT: If you need to fetch real-time, dynamic data for the dashboard
// (e.g., a user's latest posts, pending donations, notifications) that might
// change more frequently than session data, you should connect to your database here
// using the $_SESSION['id'] to retrieve specific user data.
// For this example, we'll continue using session data as per your current structure.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodBridge - Donor Dashboard</title>
    <link rel="stylesheet" href="DonorStyle.css">
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
                    <li><a href="Donor.php" class="active"><i class="fas fa-home"></i> Dashboard</a></li>
                    <li><a href="recent.php"><i class="fas fa-clock"></i> Recent</a></li>
                    <li><a href="#"><i class="fas fa-bell"></i> Notifications</a></li>
                    <li><a href="#"><i class="fas fa-comments"></i> Messages</a></li>
                    <li><a href="#"><i class="fas fa-binoculars"></i> Explore</a></li>
                    <li><a href="#"><i class="fas fa-lightbulb"></i> Know More</a></li>
                    <li><a href="LogIn.php" id="logoutLink"><i class="fas fa-sign-out-alt"></i> Log-out</a></li>
                </ul>
            </nav>
        </aside>

        <main class="main-content">
            <div class="profile-header-card">
                <div class="profile-info">
                    <img src="<?php echo $profile_picture_src; ?>" alt="User Profile Picture" class="profile-pic" id="profilePic">
                    <div class="user-details">
                        <h2 id="userNameDisplay"><?php echo $First_Name_display; ?></h2>
                        <p class="location"><i class="fas fa-map-marker-alt"></i> <span id="userLocationDisplay"><?php echo $address_display; ?></span></p>
                    </div>
                </div>
                <div class="profile-actions">
                    <a href="createpost.php" class="action-btn create-post-btn">
  <i class="fas fa-plus"></i> Create Post
</a>
                    <a href="editprofile.php" class="action-btn edit-profile-btn">
                        <i class="fas fa-edit"></i> Edit Profile
                    </a>
                </div>
            </div>

            <section class="explore-organizations">
                <div class="section-header">
                    <h3>Explore Organizations You Can Help</h3>
                    <a href="#" class="see-all">See All</a>
                </div>
                <div class="organizations-carousel">
                    <div class="organization-card">
                        <?php
                        // Use the getImageUrl function with the correct file name
                        $org1_image_url = getImageUrl("image_70637d.jpg");
                        ?>
                        <img src="<?php echo htmlspecialchars($org1_image_url); ?>" alt="Missionaries of Charity" class="org-image">
                        <p class="org-name">Missionaries of Charity</p>
                        <span class="org-tag">Elderly People</span>
                    </div>
                    <div class="organization-card">
                        <?php
                        // Use the getImageUrl function with the correct file name
                        $org2_image_url = getImageUrl("image_705f7c.jpg");
                        ?>
                        <img src="<?php echo htmlspecialchars($org2_image_url); ?>" alt="Tuluyan San Benito" class="org-image">
                        <p class="org-name">Tuluyan San Benito</p>
                        <span class="org-tag">Shelter for the Homeless</span>
                    </div>
                    <div class="organization-card">
                        <img src="https://via.placeholder.com/150x100/FFB6C1/FFFFFF?text=Org3" alt="Arnold Janssen Kalinga Center" class="org-image">
                        <p class="org-name">Arnold Janssen Kalinga Center</p>
                        <span class="org-tag">Center</span>
                    </div>
                    <div class="organization-card">
                        <img src="https://via.placeholder.com/150x100/FFD700/FFFFFF?text=Org4" alt="Don Bosco Youth Center" class="org-image">
                        <p class="org-name">Don Bosco Youth Center</p>
                        <span class="org-tag">Center</span>
                    </div>
                    <div class="organization-card">
                        <img src="https://via.placeholder.com/150x100/DDA0DD/FFFFFF?text=Org5" alt="Another Org" class="org-image">
                        <p class="org-name">Another Organization</p>
                        <span class="org-tag">Type</span>
                    </div>
                </div>
            </section>

            <section class="user-posts">
                <h3>Posts</h3>
                <div class="post-card">
                    <div class="post-header">
                        <img src="<?php echo $profile_picture_src; ?>" alt="User Profile Picture" class="post-user-pic" id="postUserPic">
                        <div class="post-user-info">
                            <p class="post-username" id="postUsernameDisplay"><?php echo $username_display; ?></p>
                            <p class="post-timestamp">May 4 at 1:09 PM</p>
                        </div>
                        <div class="post-status">
                            <span>Status: Received</span>
                            <i class="fas fa-check-circle"></i>
                        </div>
                    </div>
                    <p class="post-content">LF: May need ng 20 kg. rice</p>
                    <img src="https://via.placeholder.com/600x400/F08080/FFFFFF?text=Rice+Donation" alt="Post Image" class="post-image">
                </div>
                </section>
        </main>
    </div>

    

    <script>
        // Quantity adjustment function
        function adjustQuantity(change) {
            const input = document.getElementById('quantity');
            let value = parseInt(input.value) || 1;
            value += change;
            if (value < 1) value = 1;
            input.value = value;
        }

        // JavaScript for Modal Control
        document.addEventListener('DOMContentLoaded', function() {
            const openModalButton = document.getElementById('openCreatePostModalButton');
            const closeModalButton = document.getElementById('closeModalButton');
            const modalOverlay = document.getElementById('createPostModal');
            const logoutLink = document.getElementById('logoutLink');

            // Modal related logic
            if (openModalButton) {
                openModalButton.addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent default link behavior to 'createpost.html'
                    modalOverlay.style.display = 'flex'; // Change to 'flex' to show it
                });
            }

            if (closeModalButton) {
                closeModalButton.addEventListener('click', function() {
                    modalOverlay.style.display = 'none'; // Hide the modal
                });
            }

            if (modalOverlay) {
                modalOverlay.addEventListener('click', function(event) {
                    // Check if the click occurred directly on the overlay, not on the modal content itself
                    if (event.target === modalOverlay) {
                        modalOverlay.style.display = 'none';
                    }
                });
            }

            // Logout functionality - now handled by PHP script
            if (logoutLink) {
                logoutLink.addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent default link behavior
                    if (confirm('Are you sure you want to log out?')) {
                        // Redirect to the Logout.php script
                        window.location.href = logoutLink.href;
                    }
                });
            }
        });
    </script>
</body>
</html>

<?php
/**
 * Helper function to get image URLs from the uploaded files.
 * This is a simulated function. In a real application, you'd have
 * a proper asset management system or direct paths.
 */
function getImageUrl($fileName) {
    // In a real scenario, this would dynamically generate the path
    // or fetch from a database/CDN.
    // For demonstration, we'll assume images are in the same directory or a known 'images' folder.
    // If your actual image paths are different, adjust this.
    $imageMap = [
        'image_70637d.jpg' => 'image_70637d.jpg', // Assuming image is in the same directory as the PHP file
        'image_705f7c.jpg' => 'image_705f7c.jpg',
        // Add more mappings if you have specific paths for other images
    ];

    return $imageMap[$fileName] ?? 'https://via.placeholder.com/150x100/CCCCCC/FFFFFF?text=Image+Not+Found';
}
?>