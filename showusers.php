<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <style>
        table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        text-align: left;
        }
        table th, table td {
        padding: 12px;
        border: 1px solid #ddd;
        }
        tr:nth-child(even) td{
        border-left:none;
        border-right:none;
        }
        </style>
</head>
<body>
<?php
require_once "connection.php";  

// Execute the SQL query using PDO
$sql = "SELECT * FROM users";
$stmt = $conn->query($sql); 

// Fetch all results into an array
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($users) > 0) {
    echo "<table>
        
        <tr>
            <th>User ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>Updated</th>
            <th>Created</th>
            <th>Gender</th>
            <th>Role</th>
        </tr>";

    foreach ($users as $row) {
        if($row["genderId"] == 1){
            $gender = "Female";
        }else{
            $gender = "Male";
        }
        if($row["roleId"] == 1){
            $role = "User";
        }else{
            $role = "Admin";
        }
        echo "<tr>
            <td>" . $row["userId"] . "</td>
            <td>" . $row["fullname"] . "</td>
            <td>" . $row["email"] . "</td>
            <td>" . $row["username"] . "</td>
            <td>" . $row["updated"] . "</td>
            <td>" . $row["created"] . "</td>
            <td>" . $gender . "</td>
            <td>" . $role . "</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "NO RESULTS.";
}
?>
</body>
</html>
//require db 
//sql stmt
//put values in array
//echo table headers
//echo table rows and details
//echo string instead of numbers
//add css 
//