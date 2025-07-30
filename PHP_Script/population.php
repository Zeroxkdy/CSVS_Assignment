<div class="container py-4">
    <a href="query.php" class="btn btn-outline-primary mb-3">⬅ Pick Another Query</a>
    <h3 class="mb-4">Population and Urban Population by Country</h3>

    <?php
    $sql = "SELECT name, population, populationurban FROM countrydata_final;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div class="table-responsive">';
        echo '<table class="table table-striped table-bordered">';
        echo '<thead><tr><th>Country Name</th><th>Total Population</th><th>Urban Population</th></tr></thead>';
        echo '<tbody>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($row["name"]) . '</td>';
            echo '<td>' . htmlspecialchars($row["population"]) . '</td>';
            echo '<td>' . htmlspecialchars($row["populationurban"]) . '</td>';
            echo '</tr>';
        }
        echo '</tbody></table>';
        echo '</div>';
    } else {
        echo '<div class="alert alert-warning">No data found.</div>';
    }
    ?>
</div>
