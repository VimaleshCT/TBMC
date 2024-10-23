<!DOCTYPE html>
<html lang="<?= service('language')->getLocale(); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBARAM CITY MUNICIPAL CORPORATION</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <!-- Header Section -->
    <header class="main-header">
        <div class="header-top">
            <div class="top-left">
                <img src="img/chief_minister.jpg" alt="Chief Minister" class="cm-img">
            </div>
            <div class="top-center">
                <img src="img/logo.jpg" alt="Tambaram Logo" class="logo">
                <h1 class="title"><?= lang('App.welcome_message'); ?></h1>
            </div>
            <div class="top-right">
                <div class="accessibility">
                    <button class="accessibility-btn" id="increase-font">A+</button>
                    <button class="accessibility-btn" id="reset-font">A</button>
                    <button class="accessibility-btn" id="decrease-font">A-</button>
                </div>
                <div class="language-switcher">
                    <span id="languageLabelLeft">English</span>
                    <label class="switch">
                        <input type="checkbox" id="languageToggle">
                        <span class="slider"></span>
                    </label>
                    <span id="languageLabelRight">தமிழ்</span>
                </div>
            </div>
        </div>

        <!-- Navigation Bar -->
        <nav class="navbar">
            <ul class="nav-menu">
                <li><a href="#" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">About Us</a></li>
                <li><a href="#" class="nav-link">About Tambaram</a></li>
                <li><a href="#" class="nav-link">People</a></li>
                <li><a href="#" class="nav-link">Departments</a></li>
                <li><a href="#" class="nav-link">Services</a></li>
                <li><a href="#" class="nav-link">Schemes</a></li>
                <li><a href="#" class="nav-link">Contact Us</a></li>
            </ul>
        </nav>

        <!-- Announcement Bar -->

        <div class="announcement-bar">
            <h3 class="announcement-label">Announcement:</h3>
            <div class="announcement-content">
                <p><?= lang('App.announcement'); ?></p>
            </div>
        </div>

    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let fontSize = localStorage.getItem('fontSize') ? parseInt(localStorage.getItem('fontSize')) : 16;

            // Apply saved font size on page load
            document.body.style.fontSize = fontSize + 'px';

            // Increase font size
            document.getElementById('increase-font').addEventListener('click', function () {
                fontSize += 2;
                document.body.style.fontSize = fontSize + 'px';
                localStorage.setItem('fontSize', fontSize); // Save the font size
            });

            // Reset to default font size
            document.getElementById('reset-font').addEventListener('click', function () {
                fontSize = 16;
                document.body.style.fontSize = fontSize + 'px';
                localStorage.setItem('fontSize', fontSize); // Save the font size
            });

            // Decrease font size
            document.getElementById('decrease-font').addEventListener('click', function () {
                if (fontSize > 10) { // Limit to a minimum font size
                    fontSize -= 2;
                    document.body.style.fontSize = fontSize + 'px';
                    localStorage.setItem('fontSize', fontSize); // Save the font size
                }
            });
        });
    </script>
</body>

</html>