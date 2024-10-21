<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=account_circle" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js"></script>
    <style>

    @font-face {
    font-family: 'ValorantFont';
    src: url('{{ asset('font/Valorant-Font.ttf') }}');
    font-weight: normal;
    font-style: normal;
}
body {
    background-color: #1A1A1A;
    color: #FFFFFF;
    font-family: Arial, sans-serif;
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem;
    background-color: #1A1A1A;
}

.logo {
    display: flex;
    align-items: center;
}

.logo img {
    height: 120px;
}

.site-name {
    font-family: 'ValorantFont', sans-serif;
    color: #FF4B50;
    font-size: 3rem;
    margin-left: 10px;
    margin-top: 15px;
}

.site-name-link {
    text-decoration: none;
    color: #FF4B50;
}

.site-name-link:hover {
    color: #5FEEB8;
}

.dark-mode-switch button {
    background: none;
    border: none;
    color: #FFFFFF;
    font-size: 2rem;
    cursor: pointer;
    outline: none;
}

.light-theme {
    background-color: #ADADAD;
    color: #000000;
}

.light-theme .header,
.light-theme .navbar,
.light-theme .footer,
.light-theme .search-bar {
    background-color: #ADADAD;
    border-color: #1A1A1A;
}

.light-theme .search-input {
    background-color: #ADADAD;
    color: #000000;
    border-color: #1A1A1A;
}

.light-theme .search-btn {
    background-color: #FF4B50;
}


.nav-container {
    display: flex;
    justify-content: center;
    position: relative;
}

.nav-links {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
    font-size: 1.5rem;
}

.navbar {
    position: relative;
    padding: 1rem 0;
}

.auth-links {
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
}

.material-symbols-outlined {
    font-size: 2.5rem;
    color: #FFFFFF;
    transition: color 0.3s;
    margin-right: 1.5rem;
}

.material-symbols-outlined:hover {
    text-shadow: 0 0 5px rgba(255, 75, 80, 0.8), 0 0 10px rgba(255, 75, 80, 0.8);
}

.nav-links li {
    margin: 0 1.5rem;
}

.nav-links a {
    position: relative;
    margin: 0 1rem;
    color: #FFFFFF;
    text-decoration: none;
    font-weight: bold;
    padding: 0.5rem;
    transition: color 0.3s;
}

.nav-links a:hover {
    text-shadow: 0 0 5px rgba(255, 75, 80, 0.8), 0 0 10px rgba(255, 75, 80, 0.8);
}

.nav-links a:before, .nav-links a:after {
    position: absolute;
    opacity: 0;
    width: 0%;
    height: 2px;
    content: '';
    background: #FF4B50;
    transition: all 0.3s;
}

.nav-links a:before {
    left: 0;
    top: 0;
}

.nav-links a:after {
    right: 0;
    bottom: 0;
}

.nav-links a:hover:before, .nav-links a:hover:after {
    opacity: 1;
    width: 100%;
}

.search-bar {
    display: flex;
    justify-content: center;
    padding: 1rem 0;
    background-color: #1A1A1A;
}

.search-input {
    padding: 0.5rem;
    width: 1400px;
    border: 2px solid #ADADAD;
    border-radius: 5px;
    background-color: #1A1A1A;
    color: #FFFFFF;
}

.search-btn {
    margin-left: 0.5rem;
    padding: 0.5rem 1rem;
    background-color: #FF4B50;
    border: none;
    border-radius: 5px;
    color: #FFFFFF;
    cursor: pointer;
}

.search-btn:hover {
    background-color: #5FEEB8;
    color: #000000
}

.main-content {
    padding: 2rem;
}

.footer {
    text-align: center;
    padding: 1rem;
    background-color: #1A1A1A;
    color: #FFFFFF;
    border-top: 2px solid #ADADAD;
}

    </style>

</head>
<body>
    <div id="app">
        <header class="header">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('logo/LogoValo.png') }}" alt="Logo">
                </a>
                <span class="site-name"><a href="{{ route('home') }}" class="site-name-link">SpikePlanted</a></span>
            </div>
            <div class="dark-mode-switch">
                <button id="toggle-theme" aria-label="Toggle dark/light mode">
                    🌙
                </button>
            </div>
        </header>

        <!-- Navigation Bar -->
<nav class="navbar">
    <div class="nav-container">
        <ul class="nav-links">
            <li><a href="#">Actualités</a></li>
            <li><a href="{{ route('game') }}">Mini-jeux</a></li>
            <li><a href="#">Lore</a></li>
            <li><a href="#">Tracker</a></li>
            <li><a href="#">Forum</a></li>
        </ul>
        <div class="auth-links">
            <a href="#"><span class="material-symbols-outlined">
                account_circle
                </span></a>
        </div>
    </div>
</nav>

        <!-- Search Bar -->
        <div class="search-bar">
            <input type="text" placeholder="Rechercher..." class="search-input">
            <button type="submit" class="search-btn">Search</button>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="footer">
            &copy; {{ date('Y') }} Mon Application. Tous droits réservés.
        </footer>
    </div>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            const toggleThemeButton = document.getElementById('toggle-theme');
            const currentTheme = localStorage.getItem('theme');

            // Vérifie le thème actuel et applique le mode approprié
            if (currentTheme) {
                document.body.classList.toggle('light-theme', currentTheme === 'dark');
                toggleThemeButton.textContent = currentTheme === 'dark' ? '🌙' : '☀️'; // Modifie l'icône
            }

            toggleThemeButton.addEventListener('click', () => {
                const isDarkMode = document.body.classList.toggle('light-theme');
                // Sauvegarde le thème dans localStorage
                localStorage.setItem('theme', isDarkMode ? 'dark' : 'light');
                // Change l'icône en fonction du mode
                toggleThemeButton.textContent = isDarkMode ? '🌙' : '☀️';
            });
        </script>

</body>

</html>
