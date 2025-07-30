<div class="container py-4">
    <a href="query.php" class="btn btn-outline-primary mb-4">
        ⬅ Back to Query Page
    </a>

    <h3 class="fw-bold mb-4 text-center">Population and Urban Population by Country</h3>

    <?php
    $sql = "SELECT name, population, populationurban FROM countrydata_final;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div class="table-responsive">';
        echo '<table class="table table-hover table-bordered align-middle text-center">';
        echo '<thead class="table-dark">';
        echo '<tr>';
        echo '<th scope="col">Country Name</th>';
        echo '<th scope="col">Total Population</th>';
        echo '<th scope="col">Urban Population</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($row["name"]) . '</td>';
            echo '<td>' . number_format($row["population"]) . '</td>';
            echo '<td>' . number_format($row["populationurban"]) . '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    } else {
        echo '<div class="alert alert-warning text-center">⚠️ No population data found in the database.</div>';
    }
    ?>
</div>
