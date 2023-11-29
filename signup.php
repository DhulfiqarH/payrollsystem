<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="signup.css">
    <link rel="stylesheet" type="text/css" href="dropdown.css">

    <title>Sign Up</title>
</head>
<body>
    <?php
    session_start();
    include 'sqlconnection.php';

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $UserName = $_POST["UserName"];
        $Password = $_POST["Password"];
        $Email = $_POST["Email"];
        $Phone = $_POST["Phone"];

        // Check if the username is already present in the database
        $check_username_query = "SELECT * FROM UserLogin WHERE UserName = '$UserName'";
        $check_username_result = mysqli_query($conn, $check_username_query);

        if (mysqli_num_rows($check_username_result) == 0) {
            // Username is available, proceed with registration
            $insert_query = "INSERT INTO UserLogin (UserName, Password, Email, Phone) VALUES ('$UserName', '$Password', '$Email', '$Phone')";

            $result = mysqli_query($conn, $insert_query);

            if ($result) {
                echo "<div class='center'><h2>Registration successful. Please log in.</h2></div>";
            } else {
                echo "<div class='center'><h2>Registration failed. Please try again.</h2></div>";
            }
        } else {
            echo "<div class='center'><h2>Username not available. Please choose a different username.</h2></div>";
        }
    }
    ?>
    <div class="dropdown">
        <span class="cool-button animated-button">Option</span>
        <div class="dropdown-content">
          <a href="signup.php" class="cool-button animated-button">Signup</a>
          <a href="signin.php" class="cool-button animated-button">Signin</a>
        </div>
    </div>
    <div class="signup-container">
        <h2>Sign Up</h2>
        <form action="signup.php" method="post">
            <label for="email">Email:</label>
            <input type="email" name="Email" required>

            <label for="phone">Phone:</label>
            <input type="text" name="Phone" required>

            <label for="username">Username:</label>
            <input type="text" name="UserName" required>

            <label for="password">Password:</label>
            <input type="password" name="Password" required>

            <button type="submit" name="reg_user">Sign Up</button>
        </form>
    </div>
</body>
</html>
