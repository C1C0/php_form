<?php

$rows = connectToDB(
    "SELECT * FROM survey ORDER BY submitDate DESC",
    'SELECT'
);
?>

<table class="showSurvey">
    <tbody>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surrname</th>
            <th>Street</th>
            <th>Number</th>
            <th>City</th>
            <th>Postal Code</th>
            <th>Date of Submit</th>
        </tr>

        <?php

        foreach ($rows as $row) {
            echo
                "
        <tr class='data' onclick='window.location.href = `edit.php?id={$row['id']}`'>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['surrname']}</td>
            <td>{$row['street']}</td>
            <td>{$row['number']}</td>
            <td>{$row['city']}</td>
            <td>{$row['postalCode']}</td>
            <td>{$row['submitDate']}</td>
        </tr>
        ";
        }

        ?>
    </tbody>
</table>