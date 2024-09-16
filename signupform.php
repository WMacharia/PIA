<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Sign Up Form</title>   
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Sign Up</h2>
        <form method="POST" action="signup.php">
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter Full Name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" id="gender" name="genderId" required>
                    <?php
                        include 'connection.php';  
                        $sql = "SELECT genderId, gender FROM gender";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            echo "<option value='{$row['genderId']}'>{$row['gender']}</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select class="form-control" id="role" name="roleId" required>
                    <?php
                        include 'connection.php';  
                        $sql = "SELECT roleId, role FROM role";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            echo "<option value='{$row['roleId']}'>{$row['role']}</option>";
                        }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
        </form>
    </div>
</body>
</html>
