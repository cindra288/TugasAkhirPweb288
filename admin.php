<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - CinMo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>CinMo</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="schedule.html">Jadwal Saya</a></li>
                    <li><a href="appointment.html">Buat Janji</a></li>
                    <li><a href="admin.html">Admin</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="content">
        <div class="container">
            <h2>Data Janji Temu</h2>
            <pre class="appointment-data">
<?php
$filename = 'appointments.txt';
if (file_exists($filename)) {
    echo htmlspecialchars(file_get_contents($filename));
} else {
    echo "Tidak ada data janji temu.";
}
?>
            </pre>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>© 2024 CinMo. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
