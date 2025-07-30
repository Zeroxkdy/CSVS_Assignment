<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Query Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Lola Research</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="query.php">Query</a></li>
                <li class="nav-item"><a class="nav-link" href="#contactUs">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Section -->
<section class="py-5 bg-light border-top border-secondary-subtle">
    <div class="container text-center">
        <h2 class="mb-4">Data Query Menu</h2>
        <p class="lead mb-5">Choose the type of data you want to explore or retrieve.</p>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <a href="gdp.php" class="text-decoration-none">
                    <div class="card h-100 shadow-sm border-0 animate-card">
                        <div class="card-body">
                            <div class="mb-2"><i class="bi bi-bar-chart-fill fs-3 text-primary"></i></div>
                            <h5 class="card-title">GDP Data</h5>
                            <p class="card-text text-muted">Access GDP-related statistics by country and year.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="population.php" class="text-decoration-none">
                    <div class="card h-100 shadow-sm border-0 animate-card">
                        <div class="card-body">
                            <div class="mb-2"><i class="bi bi-people-fill fs-3 text-success"></i></div>
                            <h5 class="card-title">Population</h5>
                            <p class="card-text text-muted">Explore population demographics across the globe.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="mortality.php" class="text-decoration-none">
                    <div class="card h-100 shadow-sm border-0 animate-card">
                        <div class="card-body">
                            <div class="mb-2"><i class="bi bi-heart-pulse-fill fs-3 text-danger"></i></div>
                            <h5 class="card-title">Mortality</h5>
                            <p class="card-text text-muted">Review mortality rates and related statistics.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="lifeexpectancy.php" class="text-decoration-none">
                    <div class="card h-100 shadow-sm border-0 animate-card">
                        <div class="card-body">
                            <div class="mb-2"><i class="bi bi-hourglass-split fs-3 text-warning"></i></div>
                            <h5 class="card-title">Life Expectancy</h5>
                            <p class="card-text text-muted">Find global life expectancy trends and values.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="query2.php" class="text-decoration-none">
                    <div class="card h-100 shadow-sm border-0 animate-card">
                        <div class="card-body">
                            <div class="mb-2"><i class="bi bi-search fs-3 text-info"></i></div>
                            <h5 class="card-title">Custom Query 2</h5>
                            <p class="card-text text-muted">A secondary query interface for advanced research.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="query3.php" class="text-decoration-none">
                    <div class="card h-100 shadow-sm border-0 animate-card">
                        <div class="card-body">
                            <div class="mb-2"><i class="bi bi-lightbulb-fill fs-3 text-secondary"></i></div>
                            <h5 class="card-title">Custom Query 3</h5>
                            <p class="card-text text-muted">Another powerful query tool for data insights.</p>
                        </div>
                    </div>
                </a>
            </div>
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
