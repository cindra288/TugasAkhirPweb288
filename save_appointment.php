<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);

    $appointment = "Nama: $name\nEmail: $email\nTanggal: $date\nWaktu: $time\n\n";
    file_put_contents('appointments.txt', $appointment, FILE_APPEND);

    header('Location: appointment.html?success=true');
    exit();
}
?>
