<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Query Results</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
include 'get-parameters.php';
$conn = new mysqli($ep, $un, $pw, $db);
$_pick = $_POST['selection'];
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
        <h2 class="fw-bold">Query Results</h2>
        <p class="text-muted">Below are the results for your selected dataset.</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <?php
            switch ($_pick) {
                case "Q1":
                    include 'mobile.php';
                    break;
                case "Q2":
                    include 'population.php';
                    break;
                case "Q3":
                    include 'lifeexpectancy.php';
                    break;
                case "Q4":
                    include 'gdp.php';
                    break;
                case "Q5":
                    include 'mortality.php';
                    break;
                default:
                    echo "<div class='alert alert-warning text-center'>⚠️ Invalid query selection. Please go back and try again.</div>";
            }
            ?>
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
