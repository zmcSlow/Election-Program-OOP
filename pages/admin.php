<?php
require_once './includes/config.session.php';

if (!isset($_SESSION['users']['admin'])) {
    header("Location: ./index.php");
    die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>

<body>

    <h1>Dashboard</h1>

    <h2>Vote Count of Candidates</h2>

    <table border="1">
        <thead>
            <tr>
                <th>Position</th>
                <th>Candidates</th>
                <th>Vote Count</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Iterate through each position
            foreach ($_SESSION['votes'] as $position => $data) {
                // Determine the number of candidates for the current position
                $numCandidates = count($data['candidates']);

                // Iterate through each candidate for the current position
                for ($i = 0; $i < $numCandidates; $i++) {
                    echo "<tr>";

                    // Output the position for the first row of each position
                    if ($i === 0) {
                        echo "<td rowspan=\"$numCandidates\">$position</td>";
                    }

                    // Output the candidate name
                    $candidate = $data['candidates'][$i];
                    echo "<td>$candidate</td>";

                    // Output the vote count
                    $voteCount = isset($data['counter'][$candidate]) ? $data['counter'][$candidate] : 0;
                    echo "<td>$voteCount</td>";

                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>

    <br>

    <a href="index.php">Logout</a>
</body>

</html>
