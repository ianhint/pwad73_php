<?php

include_once("dbconficc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h3 class="page-title">Students List</h3>
    <a href="student_new.php" class="btn btn-primary new-entry">New Entry</a>

    <?php
    $rowData = $conn->query("SELECT * FROM students");
    ?>

    <table class="student-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php while ($row = $rowData->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['Id']); ?></td>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><?php echo htmlspecialchars($row['addres']); ?></td>
                    <td><?php echo htmlspecialchars($row['phonnumber']); ?></td>
                    <td class="action-cell">
                        <a href="student_edit.php?id=<?php echo urlencode($row['Id']); ?>" class="btn btn-edit">Edit</a>
                        <a href="student_delete.php?id=<?php echo urlencode($row['Id']); ?>" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this student?')">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>