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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Lola Research</a>
    </div>
</nav>

<section class="container py-5">
    <h2 class="mb-4">Query Results</h2>
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
            echo "<div class='alert alert-warning'>Invalid query selection.</div>";
    }
    ?>
</section>

<footer class="bg-dark text-white text-center py-3 mt-5">
    &copy; 2025 Lola Social Research Organization. All rights reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
