<?php require '../config/dbconn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/tableStyles.css">
    <script>
        function returnToForms() {
            window.location.href = "../index.php";
        }
    </script>
    <title>List of data</title>
</head>

<body>
    <div class="table-container">
        <h1 class="title">Lender's Information</h1>
        <table>
            <thead>
                <tr>
                    <td>Lender ID</td>
                    <td>Lender Name</td>
                    <td>Lender Address</td>
                    <td>Lender Contact No.</td>
                    <td>Lender Facebook</td>
                    <td>Co-Maker Name</td>
                    <td>Co-Maker Address</td>

                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM lender";
                $result = $connection->query($query);
                if ($result->num_rows > 0) {
                    foreach ($result as $lender) {
                        ?>
                        <tr>
                            <td>
                                <?= $lender["lenderID"]; ?>
                            </td>
                            <td>
                                <?= $lender["lenderName"]; ?>
                            </td>
                            <td>
                                <?= $lender["lenderAddress"]; ?>
                            </td>
                            <td>
                                <?= $lender["lenderContactNo"]; ?>
                            </td>
                            <td>
                                <?= $lender["lenderFBAdd"]; ?>
                            </td>
                            <td>
                                <?= $lender["comakerName"]; ?>
                            </td>
                            <td>
                                <?= $lender["comakerAdd"]; ?>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<tr><td colspan='6'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <button name="return" onclick="returnToForms()">return to forms</button>
    </div>

</body>

</html>