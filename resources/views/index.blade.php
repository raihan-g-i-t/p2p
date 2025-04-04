<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog System</title>
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
</head>
<body>
     <!-- Navbar -->
     <nav class="navbar">
        <div class="container">
            <h1 class="logo">Blog System</h1>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#blogs">Blogs</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="auth-links">
                @guest
                    <a href="{{ route('user.login') }}" class="btn">Login</a>
                    <a href="{{ route('user.registration') }}" class="btn">Sign Up</a>
                @else
                    <div class="profile-menu">
                        <img src="{{ asset('css/profile.png') }}" alt="Profile" id="profile-icon">
                        <ul class="dropdown hidden" id="profile-dropdown">
                            <li><a href="{{ route('user.profile') }}">Profile</a></li>
                            <li><a href="{{ route('user.logout') }}">Logout</a></li>
                        </ul>
                    </div>
                @endguest
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Our Blog</h1>
            <p>Discover amazing articles on various topics</p>
            <a href="#blogs" class="btn">Explore Blogs</a>
        </div>
    </section>
    
    <!-- Slider Section -->
    <section class="slider-section">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    
    <!-- Blog Preview Section -->
    <section id="blogs" class="blog-section">
        <h2>Latest Blogs</h2>
        <div class="blog-container">
            
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 Blog System. All rights reserved.</p>
    </footer>

    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        document.getElementById("profile-icon")?.addEventListener("click", function() {
            document.getElementById("profile-dropdown").classList.toggle("hidden");
        });
    </script>
</body>
</html>
