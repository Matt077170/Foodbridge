<!DOCTYPE html>
<html lang="en">
<head> sample
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodBridge - User Profile</title>
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
                    <li><a href="#" class="active"><i class="fas fa-clock"></i> Recent</a></li>
                    <li><a href="#"><i class="fas fa-bell"></i> Notifications</a></li>
                    <li><a href="#"><i class="fas fa-comments"></i> Messages</a></li>
                    <li><a href="#"><i class="fas fa-binoculars"></i> Explore</a></li>
                    <li><a href="#"><i class="fas fa-lightbulb"></i> Know More</a></li>
                    <li><a href="#"><i class="fas fa-sign-out-alt"></i> Log-out</a></li>
                </ul>
            </nav>
        </aside>

        <main class="main-content">
            <div class="profile-header-card">
                <div class="profile-info">
                    <img src="https://via.placeholder.com/100" alt="User Profile Picture" class="profile-pic">
                    <div class="user-details">
                        <h2>maffeA</h2>
                        <p class="location"><i class="fas fa-map-marker-alt"></i> Sampaloc, Manila</p>
                    </div>
                </div>
                <div class="profile-actions">
                    <button class="action-btn create-post-btn"><i class="fas fa-plus"></i> Create Post</button>
                    <button class="action-btn edit-profile-btn"><i class="fas fa-edit"></i> Edit Profile</button>
                </div>
            </div>

            <section class="explore-organizations">
                <div class="section-header">
                    <h3>Explore Organizations You Can Help</h3>
                    <a href="#" class="see-all">See All</a>
                </div>
                <div class="organizations-carousel">
                    <div class="organization-card">
                        <img src="https://via.placeholder.com/150x100" alt="Missionaries of Charity" class="org-image">
                        <p class="org-name">Missionaries of Charity</p>
                        <span class="org-tag">Elderly People</span>
                    </div>
                    <div class="organization-card">
                        <img src="https://via.placeholder.com/150x100" alt="Tuluyan San Benito" class="org-image">
                        <p class="org-name">Tuluyan San Benito</p>
                        <span class="org-tag">Shelter for the Homeless</span>
                    </div>
                    <div class="organization-card">
                        <img src="https://via.placeholder.com/150x100" alt="Arnold Janssen Kalinga Center" class="org-image">
                        <p class="org-name">Arnold Janssen Kalinga Center</p>
                        <span class="org-tag">Center</span>
                    </div>
                    <div class="organization-card">
                        <img src="https://via.placeholder.com/150x100" alt="Don Bosco Youth Center" class="org-image">
                        <p class="org-name">Don Bosco Youth Center</p>
                        <span class="org-tag">Center</span>
                    </div>
                    <div class="organization-card">
                        <img src="https://via.placeholder.com/150x100" alt="Another Org" class="org-image">
                        <p class="org-name">Another Organization</p>
                        <span class="org-tag">Type</span>
                    </div>
                </div>
            </section>

            <section class="user-posts">
                <h3>Posts</h3>
                <div class="post-card">
                    <div class="post-header">
                        <img src="https://via.placeholder.com/50" alt="maffeA" class="post-user-pic">
                        <div class="post-user-info">
                            <p class="post-username">maffeA</p>
                            <p class="post-timestamp">May 4 at 1:09 PM</p>
                        </div>
                        <div class="post-status">
                            <span>Status: Received</span>
                            <i class="fas fa-check-circle"></i>
                        </div>
                    </div>
                    <p class="post-content">LF: May need ng 20 kg. rice</p>
                    <img src="https://via.placeholder.com/600x400" alt="Post Image" class="post-image">
                </div>
                </section>
        </main>
    </div>
</body>
</html>
