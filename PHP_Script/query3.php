<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Population Query Results</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
include 'get-parameters.php';
$conn = new mysqli($ep, $un, $pw, $db);
?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">Lola Research</a>
    </div>
</nav>

<!-- Main Content -->
<section class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Population Query Results</h2>
        <p class="text-muted">Here is the retrieved population data from our database.</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <?php include 'population.php'; ?>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    &copy; 2025 Lola Social Research Organization. All rights reserved.
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
