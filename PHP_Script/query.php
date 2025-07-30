<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Query</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">Lola Research</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="query.php">Query</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<section class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Country Data Query</h2>
        <p class="lead text-muted">Select the type of data you’d like to explore below.</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-sm">
                <div class="card-body">
                    <form method="post" action="query2.php">
                        <div class="mb-3">
                            <label for="selection" class="form-label">Choose a Query Type:</label>
                            <select class="form-select" name="selection" id="selection" required>
                                <option value="">-- Select --</option>
                                <option value="Q1">Mobile Phones</option>
                                <option value="Q2">Population</option>
                                <option value="Q3">Life Expectancy</option>
                                <option value="Q4">GDP</option>
                                <option value="Q5">Childhood Mortality</option>
                            </select>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Submit Query</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-auto">
    &copy; 2025 Lola Social Research Organization. All rights reserved.
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
