<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\cobain.css">
    <title>Coba Aja Lah</title>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="#" class="logo">Shila Pages</a>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </nav>
    <div class="containers">
        <h1>Selamat Datang di Halaman Saya</h1>
        <p>Halo saya Ashila</p>

        @yield('bio_shila')

        @yield('kesukaan')

        @yield('kontak')
    </div>
    <script src="js\ada.js"></script>
</body>
</html>
